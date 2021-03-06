<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/searchclause.php");

add_nocache_headers();

include("include/pg_personaggi_variables.php");

CheckPermissionsEvent($strTableName, 'P');

$layout = new TLayout("print","BoldBlueWave","MobileBlueWave");
$layout->blocks["center"] = array();
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"printgrid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "empty";
$layout->blocks["center"][] = "grid";$layout->blocks["top"] = array();
$layout->containers["master"] = array();

$layout->containers["master"][] = array("name"=>"masterinfoprint","block"=>"mastertable_block","substyle"=>1);


$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";$page_layouts["pg_personaggi_print"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');

$cipherer = new RunnerCipherer($strTableName);

$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;
$all = postvalue("all");
$pageName = "print.php";

//array of params for classes
$params = array("id" => $id,
				"tName" => $strTableName,
				"pageType" => PAGE_PRINT);
$params["xt"] = &$xt;
			
$pageObject = new RunnerPage($params);

// add button events if exist
$pageObject->addButtonHandlers();

// Modify query: remove blob fields from fieldlist.
// Blob fields on a print page are shown using imager.php (for example).
// They don't need to be selected from DB in print.php itself.
$noBlobReplace = false;
if(!postvalue("pdf") && !$noBlobReplace)
	$gQuery->ReplaceFieldsWithDummies($pageObject->pSet->getBinaryFieldsIndices());

//	Before Process event
if($eventObj->exists("BeforeProcessPrint"))
	$eventObj->BeforeProcessPrint($conn, $pageObject);

$strWhereClause="";
$strHavingClause="";
$strSearchCriteria="and";

$selected_recs=array();
if (@$_REQUEST["a"]!="") 
{
	$sWhere = "1=0";	
	
//	process selection
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$keys["id"]=refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
			$selected_recs[]=$keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<1)
				continue;
			$keys=array();
			$keys["id"]=urldecode($arr[0]);
			$selected_recs[]=$keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}
	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
}
else
{
	$strWhereClause=@$_SESSION[$strTableName."_where"];
	$strHavingClause=@$_SESSION[$strTableName."_having"];
	$strSearchCriteria=@$_SESSION[$strTableName."_criteria"];
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
}
if(postvalue("pdf"))
	$strWhereClause = @$_SESSION[$strTableName."_pdfwhere"];

$_SESSION[$strTableName."_pdfwhere"] = $strWhereClause;


$strOrderBy = $_SESSION[$strTableName."_order"];
if(!$strOrderBy)
	$strOrderBy=$gstrOrderBy;
$strSQL.=" ".trim($strOrderBy);

$strSQLbak = $strSQL;
if($eventObj->exists("BeforeQueryPrint"))
	$eventObj->BeforeQueryPrint($strSQL,$strWhereClause,$strOrderBy, $pageObject);

//	Rebuild SQL if needed

if($strSQL!=$strSQLbak)
{
//	changed $strSQL - old style	
	$numrows=GetRowCount($strSQL);
}
else
{
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
	$strSQL.=" ".trim($strOrderBy);
	
	$rowcount=false;
	if($eventObj->exists("ListGetRowCount"))
	{
		$masterKeysReq=array();
		for($i = 0; $i < count($pageObject->detailKeysByM); $i ++)
			$masterKeysReq[]=$_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount=$eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
	}
	if($rowcount!==false)
		$numrows=$rowcount;
	else
	{
		$numrows = $gQuery->gSQLRowCount($strWhereClause, $strHavingClause, $strSearchCriteria);
	}
}

LogInfo($strSQL);

$mypage=(integer)$_SESSION[$strTableName."_pagenumber"];
if(!$mypage)
	$mypage=1;

//	page size
$PageSize=(integer)$_SESSION[$strTableName."_pagesize"];
if(!$PageSize)
	$PageSize = $pageObject->pSet->getInitialPageSize();

if($PageSize<0)
	$all = 1;	
	
$recno = 1;
$records = 0;	
$maxpages = 1;
$pageindex = 1;
$pageno=1;

// build arrays for sort (to support old code in user-defined events)
if($eventObj->exists("ListQuery"))
{
	$arrFieldForSort = array();
	$arrHowFieldSort = array();
	require_once getabspath('classes/orderclause.php');
	$fieldList = unserialize($_SESSION[$strTableName."_orderFieldsList"]);
	for($i = 0; $i < count($fieldList); $i++)
	{
		$arrFieldForSort[] = $fieldList[$i]->fieldIndex; 
		$arrHowFieldSort[] = $fieldList[$i]->orderDirection; 
	}
}

if(!$all)
{	
	if($numrows)
	{
		$maxRecords = $numrows;
		$maxpages = ceil($maxRecords/$PageSize);
					
		if($mypage > $maxpages)
			$mypage = $maxpages;
		
		if($mypage < 1) 
			$mypage = 1;
		
		$maxrecs = $PageSize;
	}
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort, 
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $PageSize, $mypage, $pageObject);
	if($listarray!==false)
		$rs = $listarray;
	else
	{
			if($numrows)
		{
			$strSQL.=" limit ".(($mypage-1)*$PageSize).",".$PageSize;
		}
		$rs = db_query($strSQL,$conn);
	}
	
	//	hide colunm headers if needed
	$recordsonpage = $numrows-($mypage-1)*$PageSize;
	if($recordsonpage>$PageSize)
		$recordsonpage = $PageSize;
		
	$xt->assign("page_number",true);
	$xt->assign("maxpages",$maxpages);
	$xt->assign("pageno",$mypage);
}
else
{
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray=$eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $PageSize, $mypage, $pageObject);
	if($listarray!==false)
		$rs = $listarray;
	else
		$rs = db_query($strSQL,$conn);
	$recordsonpage = $numrows;
	$maxpages = ceil($recordsonpage/30);
	$xt->assign("page_number",true);
	$xt->assign("maxpages",$maxpages);
}


$fieldsArr = array();
$arr = array();
$arr['fName'] = "id";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("id");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "id_utente";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("id_utente");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "id_posto";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("id_posto");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "nome";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("nome");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "status";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("status");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "att";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("att");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "def";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("def");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "cha";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("cha");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "mov";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("mov");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "mov_rimanenti";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("mov_rimanenti");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "mov_last_reset_time";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("mov_last_reset_time");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "pf";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("pf");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "pf_rimanenti";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("pf_rimanenti");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "pf_last_reset_time";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("pf_last_reset_time");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "lev";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("lev");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "xp";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("xp");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "xp_next";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("xp_next");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "id_gilda";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("id_gilda");
$fieldsArr[] = $arr;
$pageObject->setGoogleMapsParams($fieldsArr);

$colsonpage=1;
if($colsonpage>$recordsonpage)
	$colsonpage=$recordsonpage;
if($colsonpage<1)
	$colsonpage=1;


//	fill $rowinfo array
	$pages = array();
	$rowinfo = array();
	$rowinfo["data"] = array();
	if($eventObj->exists("ListFetchArray"))
		$data = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$data = $cipherer->DecryptFetchedArray($rs);

	while($data)
	{
		if($eventObj->exists("BeforeProcessRowPrint"))
		{
			if(!$eventObj->BeforeProcessRowPrint($data, $pageObject))
			{
				if($eventObj->exists("ListFetchArray"))
					$data = $eventObj->ListFetchArray($rs, $pageObject);
				else
					$data = $cipherer->DecryptFetchedArray($rs);
				continue;
			}
		}
		break;
	}
	
	while($data && ($all || $recno<=$PageSize))
	{
		$row = array();
		$row["grid_record"] = array();
		$row["grid_record"]["data"] = array();
		for($col=1;$data && ($all || $recno<=$PageSize) && $col<=1;$col++)
		{
			$record = array();
			$recno++;
			$records++;
			$keylink="";
			$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["id"]));

//	id - 
			$record["id_value"] = $pageObject->showDBValue("id", $data, $keylink);
			$record["id_class"] = $pageObject->fieldClass("id");
//	id_utente - 
			$record["id_utente_value"] = $pageObject->showDBValue("id_utente", $data, $keylink);
			$record["id_utente_class"] = $pageObject->fieldClass("id_utente");
//	id_posto - 
			$record["id_posto_value"] = $pageObject->showDBValue("id_posto", $data, $keylink);
			$record["id_posto_class"] = $pageObject->fieldClass("id_posto");
//	nome - 
			$record["nome_value"] = $pageObject->showDBValue("nome", $data, $keylink);
			$record["nome_class"] = $pageObject->fieldClass("nome");
//	status - 
			$record["status_value"] = $pageObject->showDBValue("status", $data, $keylink);
			$record["status_class"] = $pageObject->fieldClass("status");
//	att - 
			$record["att_value"] = $pageObject->showDBValue("att", $data, $keylink);
			$record["att_class"] = $pageObject->fieldClass("att");
//	def - 
			$record["def_value"] = $pageObject->showDBValue("def", $data, $keylink);
			$record["def_class"] = $pageObject->fieldClass("def");
//	cha - 
			$record["cha_value"] = $pageObject->showDBValue("cha", $data, $keylink);
			$record["cha_class"] = $pageObject->fieldClass("cha");
//	mov - 
			$record["mov_value"] = $pageObject->showDBValue("mov", $data, $keylink);
			$record["mov_class"] = $pageObject->fieldClass("mov");
//	mov_rimanenti - 
			$record["mov_rimanenti_value"] = $pageObject->showDBValue("mov_rimanenti", $data, $keylink);
			$record["mov_rimanenti_class"] = $pageObject->fieldClass("mov_rimanenti");
//	mov_last_reset_time - 
			$record["mov_last_reset_time_value"] = $pageObject->showDBValue("mov_last_reset_time", $data, $keylink);
			$record["mov_last_reset_time_class"] = $pageObject->fieldClass("mov_last_reset_time");
//	pf - 
			$record["pf_value"] = $pageObject->showDBValue("pf", $data, $keylink);
			$record["pf_class"] = $pageObject->fieldClass("pf");
//	pf_rimanenti - 
			$record["pf_rimanenti_value"] = $pageObject->showDBValue("pf_rimanenti", $data, $keylink);
			$record["pf_rimanenti_class"] = $pageObject->fieldClass("pf_rimanenti");
//	pf_last_reset_time - 
			$record["pf_last_reset_time_value"] = $pageObject->showDBValue("pf_last_reset_time", $data, $keylink);
			$record["pf_last_reset_time_class"] = $pageObject->fieldClass("pf_last_reset_time");
//	lev - 
			$record["lev_value"] = $pageObject->showDBValue("lev", $data, $keylink);
			$record["lev_class"] = $pageObject->fieldClass("lev");
//	xp - 
			$record["xp_value"] = $pageObject->showDBValue("xp", $data, $keylink);
			$record["xp_class"] = $pageObject->fieldClass("xp");
//	xp_next - 
			$record["xp_next_value"] = $pageObject->showDBValue("xp_next", $data, $keylink);
			$record["xp_next_class"] = $pageObject->fieldClass("xp_next");
//	id_gilda - 
			$record["id_gilda_value"] = $pageObject->showDBValue("id_gilda", $data, $keylink);
			$record["id_gilda_class"] = $pageObject->fieldClass("id_gilda");
			if($col<$colsonpage)
				$record["endrecord_block"] = true;
			$record["grid_recordheader"] = true;
			$record["grid_vrecord"] = true;
			
			if($eventObj->exists("BeforeMoveNextPrint"))
				$eventObj->BeforeMoveNextPrint($data,$row,$record, $pageObject);
				
			$row["grid_record"]["data"][] = $record;
			
			if($eventObj->exists("ListFetchArray"))
				$data = $eventObj->ListFetchArray($rs, $pageObject);
			else
				$data = $cipherer->DecryptFetchedArray($rs);
				
			while($data)
			{
				if($eventObj->exists("BeforeProcessRowPrint"))
				{
					if(!$eventObj->BeforeProcessRowPrint($data, $pageObject))
					{
						if($eventObj->exists("ListFetchArray"))
							$data = $eventObj->ListFetchArray($rs, $pageObject);
						else
							$data = $cipherer->DecryptFetchedArray($rs);
						continue;
					}
				}
				break;
			}
		}
		if($col <= $colsonpage)
		{
			$row["grid_record"]["data"][count($row["grid_record"]["data"])-1]["endrecord_block"] = false;
		}
		$row["grid_rowspace"]=true;
		$row["grid_recordspace"] = array("data"=>array());
		for($i=0;$i<$colsonpage*2-1;$i++)
			$row["grid_recordspace"]["data"][]=true;
		
		$rowinfo["data"][]=$row;
		
		if($all && $records>=30)
		{
			$page=array("grid_row" =>$rowinfo);
			$page["pageno"]=$pageindex;
			$pageindex++;
			$pages[] = $page;
			$records=0;
			$rowinfo=array();
		}
		
	}
	if(count($rowinfo))
	{
		$page=array("grid_row" =>$rowinfo);
		if($all)
			$page["pageno"]=$pageindex;
		$pages[] = $page;
	}
	
	for($i=0;$i<count($pages);$i++)
	{
	 	if($i<count($pages)-1)
			$pages[$i]["begin"]="<div name=page class=printpage>";
		else
		    $pages[$i]["begin"]="<div name=page>";
			
		$pages[$i]["end"]="</div>";
	}

	$page = array();
	$page["data"] = &$pages;
	$xt->assignbyref("page",$page);

	
//	display master table info
$mastertable = $_SESSION[$strTableName."_mastertable"];
$masterkeys = array();

if($mastertable == "pg_gilde")
{
//	include proper masterprint.php code
	include("include/pg_gilde_masterprint.php");
	$masterkeys[] = @$_SESSION[$strTableName."_masterkey1"];
	$params = array("detailtable"=>"pg_personaggi","keys"=>$masterkeys);
	$master = array();
	$master["func"] = "DisplayMasterTableInfo_pg_gilde";
	$master["params"] = $params;
	$xt->assignbyref("showmasterfile",$master);
	$xt->assign("mastertable_block",true);
	$layout = new TLayout("masterprint","BoldBlueWave","MobileBlueWave");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterprintheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterprintfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["pg_gilde_masterprint"] = $layout;

	$layout = GetPageLayout("pg_gilde", 'masterprint');
	if($layout)
	{
		$rtl = $pageObject->xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
		$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
			, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
		$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
	}	
}

if($mastertable == "ge_utenti")
{
//	include proper masterprint.php code
	include("include/ge_utenti_masterprint.php");
	$masterkeys[] = @$_SESSION[$strTableName."_masterkey1"];
	$params = array("detailtable"=>"pg_personaggi","keys"=>$masterkeys);
	$master = array();
	$master["func"] = "DisplayMasterTableInfo_ge_utenti";
	$master["params"] = $params;
	$xt->assignbyref("showmasterfile",$master);
	$xt->assign("mastertable_block",true);
	$layout = new TLayout("masterprint","BoldBlueWave","MobileBlueWave");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterprintheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterprintfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["ge_utenti_masterprint"] = $layout;

	$layout = GetPageLayout("ge_utenti", 'masterprint');
	if($layout)
	{
		$rtl = $pageObject->xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
		$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
			, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
		$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
	}	
}

if($mastertable == "pl_posti")
{
//	include proper masterprint.php code
	include("include/pl_posti_masterprint.php");
	$masterkeys[] = @$_SESSION[$strTableName."_masterkey1"];
	$params = array("detailtable"=>"pg_personaggi","keys"=>$masterkeys);
	$master = array();
	$master["func"] = "DisplayMasterTableInfo_pl_posti";
	$master["params"] = $params;
	$xt->assignbyref("showmasterfile",$master);
	$xt->assign("mastertable_block",true);
	$layout = new TLayout("masterprint","BoldBlueWave","MobileBlueWave");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterprintheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterprintfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["pl_posti_masterprint"] = $layout;

	$layout = GetPageLayout("pl_posti", 'masterprint');
	if($layout)
	{
		$rtl = $pageObject->xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
		$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
			, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
		$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
	}	
}

$strSQL = $_SESSION[$strTableName."_sql"];

$isPdfView = false;
$hasEvents = false;
if ($pageObject->pSet->isUsebuttonHandlers() || $isPdfView || $hasEvents)
{
	$pageObject->body["begin"] .="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
	
	$pageObject->fillSetCntrlMaps();
	$pageObject->body['end'] .= '<script>';
	$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
	$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
	$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
	$pageObject->body['end'] .= '</script>';
		$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
	$pageObject->addCommonJs();
}


if ($pageObject->pSet->isUsebuttonHandlers() || $isPdfView || $hasEvents)
	$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";

$xt->assignbyref("body",$pageObject->body);
$xt->assign("grid_block",true);

$xt->assign("id_fieldheadercolumn",true);
$xt->assign("id_fieldheader",true);
$xt->assign("id_fieldcolumn",true);
$xt->assign("id_fieldfootercolumn",true);
$xt->assign("id_utente_fieldheadercolumn",true);
$xt->assign("id_utente_fieldheader",true);
$xt->assign("id_utente_fieldcolumn",true);
$xt->assign("id_utente_fieldfootercolumn",true);
$xt->assign("id_posto_fieldheadercolumn",true);
$xt->assign("id_posto_fieldheader",true);
$xt->assign("id_posto_fieldcolumn",true);
$xt->assign("id_posto_fieldfootercolumn",true);
$xt->assign("nome_fieldheadercolumn",true);
$xt->assign("nome_fieldheader",true);
$xt->assign("nome_fieldcolumn",true);
$xt->assign("nome_fieldfootercolumn",true);
$xt->assign("status_fieldheadercolumn",true);
$xt->assign("status_fieldheader",true);
$xt->assign("status_fieldcolumn",true);
$xt->assign("status_fieldfootercolumn",true);
$xt->assign("att_fieldheadercolumn",true);
$xt->assign("att_fieldheader",true);
$xt->assign("att_fieldcolumn",true);
$xt->assign("att_fieldfootercolumn",true);
$xt->assign("def_fieldheadercolumn",true);
$xt->assign("def_fieldheader",true);
$xt->assign("def_fieldcolumn",true);
$xt->assign("def_fieldfootercolumn",true);
$xt->assign("cha_fieldheadercolumn",true);
$xt->assign("cha_fieldheader",true);
$xt->assign("cha_fieldcolumn",true);
$xt->assign("cha_fieldfootercolumn",true);
$xt->assign("mov_fieldheadercolumn",true);
$xt->assign("mov_fieldheader",true);
$xt->assign("mov_fieldcolumn",true);
$xt->assign("mov_fieldfootercolumn",true);
$xt->assign("mov_rimanenti_fieldheadercolumn",true);
$xt->assign("mov_rimanenti_fieldheader",true);
$xt->assign("mov_rimanenti_fieldcolumn",true);
$xt->assign("mov_rimanenti_fieldfootercolumn",true);
$xt->assign("mov_last_reset_time_fieldheadercolumn",true);
$xt->assign("mov_last_reset_time_fieldheader",true);
$xt->assign("mov_last_reset_time_fieldcolumn",true);
$xt->assign("mov_last_reset_time_fieldfootercolumn",true);
$xt->assign("pf_fieldheadercolumn",true);
$xt->assign("pf_fieldheader",true);
$xt->assign("pf_fieldcolumn",true);
$xt->assign("pf_fieldfootercolumn",true);
$xt->assign("pf_rimanenti_fieldheadercolumn",true);
$xt->assign("pf_rimanenti_fieldheader",true);
$xt->assign("pf_rimanenti_fieldcolumn",true);
$xt->assign("pf_rimanenti_fieldfootercolumn",true);
$xt->assign("pf_last_reset_time_fieldheadercolumn",true);
$xt->assign("pf_last_reset_time_fieldheader",true);
$xt->assign("pf_last_reset_time_fieldcolumn",true);
$xt->assign("pf_last_reset_time_fieldfootercolumn",true);
$xt->assign("lev_fieldheadercolumn",true);
$xt->assign("lev_fieldheader",true);
$xt->assign("lev_fieldcolumn",true);
$xt->assign("lev_fieldfootercolumn",true);
$xt->assign("xp_fieldheadercolumn",true);
$xt->assign("xp_fieldheader",true);
$xt->assign("xp_fieldcolumn",true);
$xt->assign("xp_fieldfootercolumn",true);
$xt->assign("xp_next_fieldheadercolumn",true);
$xt->assign("xp_next_fieldheader",true);
$xt->assign("xp_next_fieldcolumn",true);
$xt->assign("xp_next_fieldfootercolumn",true);
$xt->assign("id_gilda_fieldheadercolumn",true);
$xt->assign("id_gilda_fieldheader",true);
$xt->assign("id_gilda_fieldcolumn",true);
$xt->assign("id_gilda_fieldfootercolumn",true);

	$record_header=array("data"=>array());
	$record_footer=array("data"=>array());
	for($i=0;$i<$colsonpage;$i++)
	{
		$rheader=array();
		$rfooter=array();
		if($i<$colsonpage-1)
		{
			$rheader["endrecordheader_block"]=true;
			$rfooter["endrecordheader_block"]=true;
		}
		$record_header["data"][]=$rheader;
		$record_footer["data"][]=$rfooter;
	}
	$xt->assignbyref("record_header",$record_header);
	$xt->assignbyref("record_footer",$record_footer);
	$xt->assign("grid_header",true);
	$xt->assign("grid_footer",true);

if($eventObj->exists("BeforeShowPrint"))
	$eventObj->BeforeShowPrint($xt,$pageObject->templatefile, $pageObject);

if(!postvalue("pdf"))
	$xt->display($pageObject->templatefile);
else
{
	$xt->load_template($pageObject->templatefile);
	$page = $xt->fetch_loaded();
	$pagewidth=postvalue("width")*1.05;
	$pageheight=postvalue("height")*1.05;
	$landscape=false;
		if($pagewidth>$pageheight)
		{
			$landscape=true;
			if($pagewidth/$pageheight<297/210)
				$pagewidth = 297/210*$pageheight;
		}
		else
		{
			if($pagewidth/$pageheight<210/297)
				$pagewidth = 210/297*$pageheight;
		}
}
?>
