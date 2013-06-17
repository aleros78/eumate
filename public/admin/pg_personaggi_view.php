<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/pg_personaggi_variables.php");
include('include/xtempl.php');
include('classes/viewpage.php');
include("classes/searchclause.php");

add_nocache_headers();

CheckPermissionsEvent($strTableName, 'S');

$layout = new TLayout("view2","BoldBlueWave","MobileBlueWave");
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["pg_personaggi_view"] = $layout;




//$cipherer = new RunnerCipherer($strTableName);
	
$xt = new Xtempl();

$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
$params["all"] = $all;

//Get array of tabs for edit page
$params['useTabsOnView'] = $gSettings->useTabsOnView();
if($params['useTabsOnView'])
	$params['arrViewTabs'] = $gSettings->getViewTabs();
$pageObject = new ViewPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}

//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn, $pageObject);
	
//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();

if (!sizeof($data)) {
	header("Location: pg_personaggi_list.php?a=return");
	exit();
}

$out = "";
$first = true;
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

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("id", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["id"]));

////////////////////////////////////////////
//id - 
	
	$value = $pageObject->showDBValue("id", $data, $keylink);
	if($mainTableOwnerID=="id")
		$ownerIdValue=$value;
	$xt->assign("id_value",$value);
	if(!$pageObject->isAppearOnTabs("id"))
		$xt->assign("id_fieldblock",true);
	else
		$xt->assign("id_tabfieldblock",true);
////////////////////////////////////////////
//id_utente - 
	
	$value = $pageObject->showDBValue("id_utente", $data, $keylink);
	if($mainTableOwnerID=="id_utente")
		$ownerIdValue=$value;
	$xt->assign("id_utente_value",$value);
	if(!$pageObject->isAppearOnTabs("id_utente"))
		$xt->assign("id_utente_fieldblock",true);
	else
		$xt->assign("id_utente_tabfieldblock",true);
////////////////////////////////////////////
//id_posto - 
	
	$value = $pageObject->showDBValue("id_posto", $data, $keylink);
	if($mainTableOwnerID=="id_posto")
		$ownerIdValue=$value;
	$xt->assign("id_posto_value",$value);
	if(!$pageObject->isAppearOnTabs("id_posto"))
		$xt->assign("id_posto_fieldblock",true);
	else
		$xt->assign("id_posto_tabfieldblock",true);
////////////////////////////////////////////
//nome - 
	
	$value = $pageObject->showDBValue("nome", $data, $keylink);
	if($mainTableOwnerID=="nome")
		$ownerIdValue=$value;
	$xt->assign("nome_value",$value);
	if(!$pageObject->isAppearOnTabs("nome"))
		$xt->assign("nome_fieldblock",true);
	else
		$xt->assign("nome_tabfieldblock",true);
////////////////////////////////////////////
//status - 
	
	$value = $pageObject->showDBValue("status", $data, $keylink);
	if($mainTableOwnerID=="status")
		$ownerIdValue=$value;
	$xt->assign("status_value",$value);
	if(!$pageObject->isAppearOnTabs("status"))
		$xt->assign("status_fieldblock",true);
	else
		$xt->assign("status_tabfieldblock",true);
////////////////////////////////////////////
//att - 
	
	$value = $pageObject->showDBValue("att", $data, $keylink);
	if($mainTableOwnerID=="att")
		$ownerIdValue=$value;
	$xt->assign("att_value",$value);
	if(!$pageObject->isAppearOnTabs("att"))
		$xt->assign("att_fieldblock",true);
	else
		$xt->assign("att_tabfieldblock",true);
////////////////////////////////////////////
//def - 
	
	$value = $pageObject->showDBValue("def", $data, $keylink);
	if($mainTableOwnerID=="def")
		$ownerIdValue=$value;
	$xt->assign("def_value",$value);
	if(!$pageObject->isAppearOnTabs("def"))
		$xt->assign("def_fieldblock",true);
	else
		$xt->assign("def_tabfieldblock",true);
////////////////////////////////////////////
//cha - 
	
	$value = $pageObject->showDBValue("cha", $data, $keylink);
	if($mainTableOwnerID=="cha")
		$ownerIdValue=$value;
	$xt->assign("cha_value",$value);
	if(!$pageObject->isAppearOnTabs("cha"))
		$xt->assign("cha_fieldblock",true);
	else
		$xt->assign("cha_tabfieldblock",true);
////////////////////////////////////////////
//mov - 
	
	$value = $pageObject->showDBValue("mov", $data, $keylink);
	if($mainTableOwnerID=="mov")
		$ownerIdValue=$value;
	$xt->assign("mov_value",$value);
	if(!$pageObject->isAppearOnTabs("mov"))
		$xt->assign("mov_fieldblock",true);
	else
		$xt->assign("mov_tabfieldblock",true);
////////////////////////////////////////////
//mov_rimanenti - 
	
	$value = $pageObject->showDBValue("mov_rimanenti", $data, $keylink);
	if($mainTableOwnerID=="mov_rimanenti")
		$ownerIdValue=$value;
	$xt->assign("mov_rimanenti_value",$value);
	if(!$pageObject->isAppearOnTabs("mov_rimanenti"))
		$xt->assign("mov_rimanenti_fieldblock",true);
	else
		$xt->assign("mov_rimanenti_tabfieldblock",true);
////////////////////////////////////////////
//mov_last_reset_time - 
	
	$value = $pageObject->showDBValue("mov_last_reset_time", $data, $keylink);
	if($mainTableOwnerID=="mov_last_reset_time")
		$ownerIdValue=$value;
	$xt->assign("mov_last_reset_time_value",$value);
	if(!$pageObject->isAppearOnTabs("mov_last_reset_time"))
		$xt->assign("mov_last_reset_time_fieldblock",true);
	else
		$xt->assign("mov_last_reset_time_tabfieldblock",true);
////////////////////////////////////////////
//pf - 
	
	$value = $pageObject->showDBValue("pf", $data, $keylink);
	if($mainTableOwnerID=="pf")
		$ownerIdValue=$value;
	$xt->assign("pf_value",$value);
	if(!$pageObject->isAppearOnTabs("pf"))
		$xt->assign("pf_fieldblock",true);
	else
		$xt->assign("pf_tabfieldblock",true);
////////////////////////////////////////////
//pf_rimanenti - 
	
	$value = $pageObject->showDBValue("pf_rimanenti", $data, $keylink);
	if($mainTableOwnerID=="pf_rimanenti")
		$ownerIdValue=$value;
	$xt->assign("pf_rimanenti_value",$value);
	if(!$pageObject->isAppearOnTabs("pf_rimanenti"))
		$xt->assign("pf_rimanenti_fieldblock",true);
	else
		$xt->assign("pf_rimanenti_tabfieldblock",true);
////////////////////////////////////////////
//pf_last_reset_time - 
	
	$value = $pageObject->showDBValue("pf_last_reset_time", $data, $keylink);
	if($mainTableOwnerID=="pf_last_reset_time")
		$ownerIdValue=$value;
	$xt->assign("pf_last_reset_time_value",$value);
	if(!$pageObject->isAppearOnTabs("pf_last_reset_time"))
		$xt->assign("pf_last_reset_time_fieldblock",true);
	else
		$xt->assign("pf_last_reset_time_tabfieldblock",true);
////////////////////////////////////////////
//lev - 
	
	$value = $pageObject->showDBValue("lev", $data, $keylink);
	if($mainTableOwnerID=="lev")
		$ownerIdValue=$value;
	$xt->assign("lev_value",$value);
	if(!$pageObject->isAppearOnTabs("lev"))
		$xt->assign("lev_fieldblock",true);
	else
		$xt->assign("lev_tabfieldblock",true);
////////////////////////////////////////////
//xp - 
	
	$value = $pageObject->showDBValue("xp", $data, $keylink);
	if($mainTableOwnerID=="xp")
		$ownerIdValue=$value;
	$xt->assign("xp_value",$value);
	if(!$pageObject->isAppearOnTabs("xp"))
		$xt->assign("xp_fieldblock",true);
	else
		$xt->assign("xp_tabfieldblock",true);
////////////////////////////////////////////
//xp_next - 
	
	$value = $pageObject->showDBValue("xp_next", $data, $keylink);
	if($mainTableOwnerID=="xp_next")
		$ownerIdValue=$value;
	$xt->assign("xp_next_value",$value);
	if(!$pageObject->isAppearOnTabs("xp_next"))
		$xt->assign("xp_next_fieldblock",true);
	else
		$xt->assign("xp_next_tabfieldblock",true);
////////////////////////////////////////////
//id_gilda - 
	
	$value = $pageObject->showDBValue("id_gilda", $data, $keylink);
	if($mainTableOwnerID=="id_gilda")
		$ownerIdValue=$value;
	$xt->assign("id_gilda_value",$value);
	if(!$pageObject->isAppearOnTabs("id_gilda"))
		$xt->assign("id_gilda_fieldblock",true);
	else
		$xt->assign("id_gilda_tabfieldblock",true);

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "pg_personaggi";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "pg_personaggi";
			continue;
		}
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
		}
		
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
			$options['masterKeysReq'][$mkr++] = $data[$mk];

		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
			}
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "pg_personaggi";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='pg_personaggi_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
	$nextlink=$prevlink="";
	if(count($next))
	{
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
	else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
	{
		$templatefile = $pageObject->templatefile;
		$eventObj->BeforeShowView($xt,$templatefile,$data, $pageObject);
		$pageObject->templatefile = $templatefile;
	}
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($pageObject->templatefile);
		else{
				$xt->load_template($pageObject->templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				if(count($pageObject->includes_css))
					$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
				if(count($pageObject->includes_cssIE))
					$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);				
				$returnJSON['idStartFrom'] = $id+1;
				$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
				echo (my_json_encode($returnJSON)); 
			}
	}
	break;
}
}


?>
