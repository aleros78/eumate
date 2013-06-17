<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/pl_citta_variables.php");
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
$layout->blocks["top"][] = "details";$page_layouts["pl_citta_view"] = $layout;




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
	header("Location: pl_citta_list.php?a=return");
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
$arr['fName'] = "id_regione";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("id_regione");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "citta";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("citta");
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
//id_regione - 
	
	$value = $pageObject->showDBValue("id_regione", $data, $keylink);
	if($mainTableOwnerID=="id_regione")
		$ownerIdValue=$value;
	$xt->assign("id_regione_value",$value);
	if(!$pageObject->isAppearOnTabs("id_regione"))
		$xt->assign("id_regione_fieldblock",true);
	else
		$xt->assign("id_regione_tabfieldblock",true);
////////////////////////////////////////////
//citta - 
	
	$value = $pageObject->showDBValue("citta", $data, $keylink);
	if($mainTableOwnerID=="citta")
		$ownerIdValue=$value;
	$xt->assign("citta_value",$value);
	if(!$pageObject->isAppearOnTabs("citta"))
		$xt->assign("citta_fieldblock",true);
	else
		$xt->assign("citta_tabfieldblock",true);
////////////////////////////////////////////
//nome_it - 
	
	$value = $pageObject->showDBValue("nome_it", $data, $keylink);
	if($mainTableOwnerID=="nome_it")
		$ownerIdValue=$value;
	$xt->assign("nome_it_value",$value);
	if(!$pageObject->isAppearOnTabs("nome_it"))
		$xt->assign("nome_it_fieldblock",true);
	else
		$xt->assign("nome_it_tabfieldblock",true);
////////////////////////////////////////////
//nome_en - 
	
	$value = $pageObject->showDBValue("nome_en", $data, $keylink);
	if($mainTableOwnerID=="nome_en")
		$ownerIdValue=$value;
	$xt->assign("nome_en_value",$value);
	if(!$pageObject->isAppearOnTabs("nome_en"))
		$xt->assign("nome_en_fieldblock",true);
	else
		$xt->assign("nome_en_tabfieldblock",true);
////////////////////////////////////////////
//descrizione_it - 
	
	$value = $pageObject->showDBValue("descrizione_it", $data, $keylink);
	if($mainTableOwnerID=="descrizione_it")
		$ownerIdValue=$value;
	$xt->assign("descrizione_it_value",$value);
	if(!$pageObject->isAppearOnTabs("descrizione_it"))
		$xt->assign("descrizione_it_fieldblock",true);
	else
		$xt->assign("descrizione_it_tabfieldblock",true);
////////////////////////////////////////////
//descrizione_en - 
	
	$value = $pageObject->showDBValue("descrizione_en", $data, $keylink);
	if($mainTableOwnerID=="descrizione_en")
		$ownerIdValue=$value;
	$xt->assign("descrizione_en_value",$value);
	if(!$pageObject->isAppearOnTabs("descrizione_en"))
		$xt->assign("descrizione_en_fieldblock",true);
	else
		$xt->assign("descrizione_en_tabfieldblock",true);
////////////////////////////////////////////
//storia_it - 
	
	$value = $pageObject->showDBValue("storia_it", $data, $keylink);
	if($mainTableOwnerID=="storia_it")
		$ownerIdValue=$value;
	$xt->assign("storia_it_value",$value);
	if(!$pageObject->isAppearOnTabs("storia_it"))
		$xt->assign("storia_it_fieldblock",true);
	else
		$xt->assign("storia_it_tabfieldblock",true);
////////////////////////////////////////////
//storia_en - 
	
	$value = $pageObject->showDBValue("storia_en", $data, $keylink);
	if($mainTableOwnerID=="storia_en")
		$ownerIdValue=$value;
	$xt->assign("storia_en_value",$value);
	if(!$pageObject->isAppearOnTabs("storia_en"))
		$xt->assign("storia_en_fieldblock",true);
	else
		$xt->assign("storia_en_tabfieldblock",true);
////////////////////////////////////////////
//back_it - 
	
	$value = $pageObject->showDBValue("back_it", $data, $keylink);
	if($mainTableOwnerID=="back_it")
		$ownerIdValue=$value;
	$xt->assign("back_it_value",$value);
	if(!$pageObject->isAppearOnTabs("back_it"))
		$xt->assign("back_it_fieldblock",true);
	else
		$xt->assign("back_it_tabfieldblock",true);
////////////////////////////////////////////
//back_en - 
	
	$value = $pageObject->showDBValue("back_en", $data, $keylink);
	if($mainTableOwnerID=="back_en")
		$ownerIdValue=$value;
	$xt->assign("back_en_value",$value);
	if(!$pageObject->isAppearOnTabs("back_en"))
		$xt->assign("back_en_fieldblock",true);
	else
		$xt->assign("back_en_tabfieldblock",true);
////////////////////////////////////////////
//note_it - 
	
	$value = $pageObject->showDBValue("note_it", $data, $keylink);
	if($mainTableOwnerID=="note_it")
		$ownerIdValue=$value;
	$xt->assign("note_it_value",$value);
	if(!$pageObject->isAppearOnTabs("note_it"))
		$xt->assign("note_it_fieldblock",true);
	else
		$xt->assign("note_it_tabfieldblock",true);
////////////////////////////////////////////
//note_en - 
	
	$value = $pageObject->showDBValue("note_en", $data, $keylink);
	if($mainTableOwnerID=="note_en")
		$ownerIdValue=$value;
	$xt->assign("note_en_value",$value);
	if(!$pageObject->isAppearOnTabs("note_en"))
		$xt->assign("note_en_fieldblock",true);
	else
		$xt->assign("note_en_tabfieldblock",true);
////////////////////////////////////////////
//attivo - Checkbox
	
	$value = $pageObject->showDBValue("attivo", $data, $keylink);
	if($mainTableOwnerID=="attivo")
		$ownerIdValue=$value;
	$xt->assign("attivo_value",$value);
	if(!$pageObject->isAppearOnTabs("attivo"))
		$xt->assign("attivo_fieldblock",true);
	else
		$xt->assign("attivo_tabfieldblock",true);

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
		$options['masterTable'] = "pl_citta";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "pl_citta";
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
	$strTableName = "pl_citta";
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
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='pl_citta_edit.php?".$editlink."'\"");

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
