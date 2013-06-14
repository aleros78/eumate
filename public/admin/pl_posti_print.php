<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/searchclause.php");

add_nocache_headers();

include("include/pl_posti_variables.php");

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
$layout->blocks["top"][] = "pdf";$page_layouts["pl_posti_print"] = $layout;


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
$arr['fName'] = "id_location";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("id_location");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "id_citta";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("id_citta");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "id_regione";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("id_regione");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "posto";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("posto");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "nome_it";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("nome_it");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "nome_en";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("nome_en");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "descrizione_it";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("descrizione_it");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "descrizione_en";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("descrizione_en");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "storia_it";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("storia_it");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "storia_en";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("storia_en");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "back_it";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("back_it");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "back_en";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("back_en");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "note_it";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("note_it");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "note_en";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("note_en");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "attivo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("attivo");
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
//	id_location - 
			$record["id_location_value"] = $pageObject->showDBValue("id_location", $data, $keylink);
			$record["id_location_class"] = $pageObject->fieldClass("id_location");
//	id_citta - 
			$record["id_citta_value"] = $pageObject->showDBValue("id_citta", $data, $keylink);
			$record["id_citta_class"] = $pageObject->fieldClass("id_citta");
//	id_regione - 
			$record["id_regione_value"] = $pageObject->showDBValue("id_regione", $data, $keylink);
			$record["id_regione_class"] = $pageObject->fieldClass("id_regione");
//	posto - 
			$record["posto_value"] = $pageObject->showDBValue("posto", $data, $keylink);
			$record["posto_class"] = $pageObject->fieldClass("posto");
//	nome_it - 
			$record["nome_it_value"] = $pageObject->showDBValue("nome_it", $data, $keylink);
			$record["nome_it_class"] = $pageObject->fieldClass("nome_it");
//	nome_en - 
			$record["nome_en_value"] = $pageObject->showDBValue("nome_en", $data, $keylink);
			$record["nome_en_class"] = $pageObject->fieldClass("nome_en");
//	descrizione_it - 
			$record["descrizione_it_value"] = $pageObject->showDBValue("descrizione_it", $data, $keylink);
			$record["descrizione_it_class"] = $pageObject->fieldClass("descrizione_it");
//	descrizione_en - 
			$record["descrizione_en_value"] = $pageObject->showDBValue("descrizione_en", $data, $keylink);
			$record["descrizione_en_class"] = $pageObject->fieldClass("descrizione_en");
//	storia_it - 
			$record["storia_it_value"] = $pageObject->showDBValue("storia_it", $data, $keylink);
			$record["storia_it_class"] = $pageObject->fieldClass("storia_it");
//	storia_en - 
			$record["storia_en_value"] = $pageObject->showDBValue("storia_en", $data, $keylink);
			$record["storia_en_class"] = $pageObject->fieldClass("storia_en");
//	back_it - 
			$record["back_it_value"] = $pageObject->showDBValue("back_it", $data, $keylink);
			$record["back_it_class"] = $pageObject->fieldClass("back_it");
//	back_en - 
			$record["back_en_value"] = $pageObject->showDBValue("back_en", $data, $keylink);
			$record["back_en_class"] = $pageObject->fieldClass("back_en");
//	note_it - 
			$record["note_it_value"] = $pageObject->showDBValue("note_it", $data, $keylink);
			$record["note_it_class"] = $pageObject->fieldClass("note_it");
//	note_en - 
			$record["note_en_value"] = $pageObject->showDBValue("note_en", $data, $keylink);
			$record["note_en_class"] = $pageObject->fieldClass("note_en");
//	attivo - Checkbox
			$record["attivo_value"] = $pageObject->showDBValue("attivo", $data, $keylink);
			$record["attivo_class"] = $pageObject->fieldClass("attivo");
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

if($mastertable == "pl_citta")
{
//	include proper masterprint.php code
	include("include/pl_citta_masterprint.php");
	$masterkeys[] = @$_SESSION[$strTableName."_masterkey1"];
	$params = array("detailtable"=>"pl_posti","keys"=>$masterkeys);
	$master = array();
	$master["func"] = "DisplayMasterTableInfo_pl_citta";
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["pl_citta_masterprint"] = $layout;

	$layout = GetPageLayout("pl_citta", 'masterprint');
	if($layout)
	{
		$rtl = $pageObject->xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
		$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
			, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
		$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
	}	
}

if($mastertable == "pl_locations")
{
//	include proper masterprint.php code
	include("include/pl_locations_masterprint.php");
	$masterkeys[] = @$_SESSION[$strTableName."_masterkey1"];
	$params = array("detailtable"=>"pl_posti","keys"=>$masterkeys);
	$master = array();
	$master["func"] = "DisplayMasterTableInfo_pl_locations";
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["pl_locations_masterprint"] = $layout;

	$layout = GetPageLayout("pl_locations", 'masterprint');
	if($layout)
	{
		$rtl = $pageObject->xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
		$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
			, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
		$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
	}	
}

if($mastertable == "pl_regioni")
{
//	include proper masterprint.php code
	include("include/pl_regioni_masterprint.php");
	$masterkeys[] = @$_SESSION[$strTableName."_masterkey1"];
	$params = array("detailtable"=>"pl_posti","keys"=>$masterkeys);
	$master = array();
	$master["func"] = "DisplayMasterTableInfo_pl_regioni";
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["pl_regioni_masterprint"] = $layout;

	$layout = GetPageLayout("pl_regioni", 'masterprint');
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
$xt->assign("id_location_fieldheadercolumn",true);
$xt->assign("id_location_fieldheader",true);
$xt->assign("id_location_fieldcolumn",true);
$xt->assign("id_location_fieldfootercolumn",true);
$xt->assign("id_citta_fieldheadercolumn",true);
$xt->assign("id_citta_fieldheader",true);
$xt->assign("id_citta_fieldcolumn",true);
$xt->assign("id_citta_fieldfootercolumn",true);
$xt->assign("id_regione_fieldheadercolumn",true);
$xt->assign("id_regione_fieldheader",true);
$xt->assign("id_regione_fieldcolumn",true);
$xt->assign("id_regione_fieldfootercolumn",true);
$xt->assign("posto_fieldheadercolumn",true);
$xt->assign("posto_fieldheader",true);
$xt->assign("posto_fieldcolumn",true);
$xt->assign("posto_fieldfootercolumn",true);
$xt->assign("nome_it_fieldheadercolumn",true);
$xt->assign("nome_it_fieldheader",true);
$xt->assign("nome_it_fieldcolumn",true);
$xt->assign("nome_it_fieldfootercolumn",true);
$xt->assign("nome_en_fieldheadercolumn",true);
$xt->assign("nome_en_fieldheader",true);
$xt->assign("nome_en_fieldcolumn",true);
$xt->assign("nome_en_fieldfootercolumn",true);
$xt->assign("descrizione_it_fieldheadercolumn",true);
$xt->assign("descrizione_it_fieldheader",true);
$xt->assign("descrizione_it_fieldcolumn",true);
$xt->assign("descrizione_it_fieldfootercolumn",true);
$xt->assign("descrizione_en_fieldheadercolumn",true);
$xt->assign("descrizione_en_fieldheader",true);
$xt->assign("descrizione_en_fieldcolumn",true);
$xt->assign("descrizione_en_fieldfootercolumn",true);
$xt->assign("storia_it_fieldheadercolumn",true);
$xt->assign("storia_it_fieldheader",true);
$xt->assign("storia_it_fieldcolumn",true);
$xt->assign("storia_it_fieldfootercolumn",true);
$xt->assign("storia_en_fieldheadercolumn",true);
$xt->assign("storia_en_fieldheader",true);
$xt->assign("storia_en_fieldcolumn",true);
$xt->assign("storia_en_fieldfootercolumn",true);
$xt->assign("back_it_fieldheadercolumn",true);
$xt->assign("back_it_fieldheader",true);
$xt->assign("back_it_fieldcolumn",true);
$xt->assign("back_it_fieldfootercolumn",true);
$xt->assign("back_en_fieldheadercolumn",true);
$xt->assign("back_en_fieldheader",true);
$xt->assign("back_en_fieldcolumn",true);
$xt->assign("back_en_fieldfootercolumn",true);
$xt->assign("note_it_fieldheadercolumn",true);
$xt->assign("note_it_fieldheader",true);
$xt->assign("note_it_fieldcolumn",true);
$xt->assign("note_it_fieldfootercolumn",true);
$xt->assign("note_en_fieldheadercolumn",true);
$xt->assign("note_en_fieldheader",true);
$xt->assign("note_en_fieldcolumn",true);
$xt->assign("note_en_fieldfootercolumn",true);
$xt->assign("attivo_fieldheadercolumn",true);
$xt->assign("attivo_fieldheader",true);
$xt->assign("attivo_fieldcolumn",true);
$xt->assign("attivo_fieldfootercolumn",true);

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
