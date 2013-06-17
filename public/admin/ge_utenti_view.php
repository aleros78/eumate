<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/ge_utenti_variables.php");
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
$layout->blocks["top"][] = "details";$page_layouts["ge_utenti_view"] = $layout;




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
	header("Location: ge_utenti_list.php?a=return");
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
$arr['fName'] = "id_tipologia";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("id_tipologia");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "nome";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("nome");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "cognome";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("cognome");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "email";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("email");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "password";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("password");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "data_registrazione";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("data_registrazione");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ip_registrazione";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ip_registrazione");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "numero_login";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("numero_login");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ip_ultimo_login";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ip_ultimo_login");
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
//id_tipologia - 
	
	$value = $pageObject->showDBValue("id_tipologia", $data, $keylink);
	if($mainTableOwnerID=="id_tipologia")
		$ownerIdValue=$value;
	$xt->assign("id_tipologia_value",$value);
	if(!$pageObject->isAppearOnTabs("id_tipologia"))
		$xt->assign("id_tipologia_fieldblock",true);
	else
		$xt->assign("id_tipologia_tabfieldblock",true);
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
//cognome - 
	
	$value = $pageObject->showDBValue("cognome", $data, $keylink);
	if($mainTableOwnerID=="cognome")
		$ownerIdValue=$value;
	$xt->assign("cognome_value",$value);
	if(!$pageObject->isAppearOnTabs("cognome"))
		$xt->assign("cognome_fieldblock",true);
	else
		$xt->assign("cognome_tabfieldblock",true);
////////////////////////////////////////////
//email - 
	
	$value = $pageObject->showDBValue("email", $data, $keylink);
	if($mainTableOwnerID=="email")
		$ownerIdValue=$value;
	$xt->assign("email_value",$value);
	if(!$pageObject->isAppearOnTabs("email"))
		$xt->assign("email_fieldblock",true);
	else
		$xt->assign("email_tabfieldblock",true);
////////////////////////////////////////////
//password - 
	
	$value = $pageObject->showDBValue("password", $data, $keylink);
	if($mainTableOwnerID=="password")
		$ownerIdValue=$value;
	$xt->assign("password_value",$value);
	if(!$pageObject->isAppearOnTabs("password"))
		$xt->assign("password_fieldblock",true);
	else
		$xt->assign("password_tabfieldblock",true);
////////////////////////////////////////////
//data_registrazione - Short Date
	
	$value = $pageObject->showDBValue("data_registrazione", $data, $keylink);
	if($mainTableOwnerID=="data_registrazione")
		$ownerIdValue=$value;
	$xt->assign("data_registrazione_value",$value);
	if(!$pageObject->isAppearOnTabs("data_registrazione"))
		$xt->assign("data_registrazione_fieldblock",true);
	else
		$xt->assign("data_registrazione_tabfieldblock",true);
////////////////////////////////////////////
//ip_registrazione - 
	
	$value = $pageObject->showDBValue("ip_registrazione", $data, $keylink);
	if($mainTableOwnerID=="ip_registrazione")
		$ownerIdValue=$value;
	$xt->assign("ip_registrazione_value",$value);
	if(!$pageObject->isAppearOnTabs("ip_registrazione"))
		$xt->assign("ip_registrazione_fieldblock",true);
	else
		$xt->assign("ip_registrazione_tabfieldblock",true);
////////////////////////////////////////////
//numero_login - 
	
	$value = $pageObject->showDBValue("numero_login", $data, $keylink);
	if($mainTableOwnerID=="numero_login")
		$ownerIdValue=$value;
	$xt->assign("numero_login_value",$value);
	if(!$pageObject->isAppearOnTabs("numero_login"))
		$xt->assign("numero_login_fieldblock",true);
	else
		$xt->assign("numero_login_tabfieldblock",true);
////////////////////////////////////////////
//ip_ultimo_login - 
	
	$value = $pageObject->showDBValue("ip_ultimo_login", $data, $keylink);
	if($mainTableOwnerID=="ip_ultimo_login")
		$ownerIdValue=$value;
	$xt->assign("ip_ultimo_login_value",$value);
	if(!$pageObject->isAppearOnTabs("ip_ultimo_login"))
		$xt->assign("ip_ultimo_login_fieldblock",true);
	else
		$xt->assign("ip_ultimo_login_tabfieldblock",true);
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
		$options['masterTable'] = "ge_utenti";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "ge_utenti";
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
	$strTableName = "ge_utenti";
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
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='ge_utenti_edit.php?".$editlink."'\"");

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
