<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/pg_personaggi_variables.php");
include('include/xtempl.php');
include('classes/addpage.php');

global $globalEvents;

CheckPermissionsEvent($strTableName, 'A');

if ((sizeof($_POST)==0) && (postvalue('ferror'))){
	if (postvalue("inline")){
		$returnJSON['success'] = false;
		$returnJSON['message'] = "Error occurred";
		$returnJSON['fatalError'] = true;
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
	else if (postvalue("fly")){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_add"] = "<< "."Error occurred"." >>";
	}
}

$layout = new TLayout("add2","BoldBlueWave","MobileBlueWave");
$layout->blocks["top"] = array();
$layout->containers["add"] = array();

$layout->containers["add"][] = array("name"=>"addheader","block"=>"","substyle"=>2);


$layout->containers["add"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["add"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"addfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"addbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["add"] = "1";
$layout->blocks["top"][] = "add";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["pg_personaggi_add"] = $layout;



$filename = "";
$status = "";
$message = "";
$mesClass = "";
$usermessage = "";
$error_happened = false;
$readavalues = false;

$keys = array();
$showValues = array();
$showRawValues = array();
$showFields = array();
$showDetailKeys = array();
$IsSaved = false;
$HaveData = true;
$popUpSave = false;

$sessionPrefix = $strTableName;

$onFly = false;
if(postvalue("onFly"))
	$onFly = true;

if(@$_REQUEST["editType"]=="inline")
	$inlineadd = ADD_INLINE;
elseif(@$_REQUEST["editType"]==ADD_POPUP)
{
	$inlineadd = ADD_POPUP;
	if(@$_POST["a"]=="added" && postvalue("field")=="" && postvalue("category")=="")
		$popUpSave = true;	
}
elseif(@$_REQUEST["editType"]==ADD_MASTER)
	$inlineadd = ADD_MASTER;
elseif($onFly)
{
	$inlineadd = ADD_ONTHEFLY;
	$sessionPrefix = $strTableName."_add";
}
else
	$inlineadd = ADD_SIMPLE;

if($inlineadd == ADD_INLINE)
	$templatefile = "pg_personaggi_inline_add.htm";
else
	$templatefile = "pg_personaggi_add.htm";

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

//If undefined session value for mastet table, but exist post value master table, than take second
//It may be happen only when use dpInline mode on page add
if(!@$_SESSION[$sessionPrefix."_mastertable"] && postvalue("mastertable"))
	$_SESSION[$sessionPrefix."_mastertable"] = postvalue("mastertable");
	
$xt = new Xtempl();
	
// assign an id
$xt->assign("id",$id);
	
$auditObj = GetAuditObject($strTableName);

//array of params for classes
$params = array("pageType" => PAGE_ADD,"id" => $id,"mode" => $inlineadd);


$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['includes_js'] = $includes_js;
$params['locale_info'] = $locale_info;
$params['includes_css'] = $includes_css;
$params['useTabsOnAdd'] = $gSettings->useTabsOnAdd();
$params['templatefile'] = $templatefile;
$params['includes_jsreq'] = $includes_jsreq;
$params['pageAddLikeInline'] = ($inlineadd==ADD_INLINE);
$params['needSearchClauseObj'] = false;
$params['strOriginalTableName'] = $strOriginalTableName;

if($params['useTabsOnAdd'])
	$params['arrAddTabs'] = $gSettings->getAddTabs();
	
$pageObject = new AddPage($params);

if(isset($_REQUEST['afteradd'])){
		header('Location: pg_personaggi_add.php');
	if($eventObj->exists("AfterAdd") && isset($_SESSION['after_add_data'][$_REQUEST['afteradd']])){
	
		$data = $_SESSION['after_add_data'][$_REQUEST['afteradd']];
		$eventObj->AfterAdd($data['avalues'], $data['keys'],$data['inlineadd'], $pageObject);
	
	}
	unset($_SESSION['after_add_data'][$_REQUEST['afteradd']]);
	
	foreach (is_array($_SESSION['after_add_data']) ? $_SESSION['after_add_data'] : array() as $k=>$v){
		if (!is_array($v) or !array_key_exists('time',$v)) {
			unset($_SESSION['after_add_data'][$k]);
			continue;
		}
		if ($v['time'] < time() - 3600){
			unset($_SESSION['after_add_data'][$k]);
		}
	}
		exit;
}

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on add page
$addFields = $pageObject->getFieldsByPageType();

// add button events if exist
if ($inlineadd==ADD_SIMPLE || $inlineadd == ADD_ONTHEFLY)
	$pageObject->addButtonHandlers();

$url_page=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//For show detail tables on master page add
if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables  && !isMobile())
	{
		$ids = $id;
		$countDetailsIsShow = 0;
				$pageObject->jsSettings['tableSettings'][$strTableName]['isShowDetails'] = $countDetailsIsShow > 0 ? true : false;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}

//	Before Process event
if($eventObj->exists("BeforeProcessAdd"))
	$eventObj->BeforeProcessAdd($conn, $pageObject);

// proccess captcha
if ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();
	
// insert new record if we have to
if(@$_POST["a"]=="added")
{
	$afilename_values=array();
	$avalues=array();
	$blobfields=array();
//	processing id_utente - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_id_utente = $pageObject->getControl("id_utente", $id);
		$control_id_utente->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing id_utente - end
//	processing id_posto - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_id_posto = $pageObject->getControl("id_posto", $id);
		$control_id_posto->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing id_posto - end
//	processing nome - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_nome = $pageObject->getControl("nome", $id);
		$control_nome->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing nome - end
//	processing status - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_status = $pageObject->getControl("status", $id);
		$control_status->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing status - end
//	processing att - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_att = $pageObject->getControl("att", $id);
		$control_att->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing att - end
//	processing def - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_def = $pageObject->getControl("def", $id);
		$control_def->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing def - end
//	processing cha - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_cha = $pageObject->getControl("cha", $id);
		$control_cha->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing cha - end
//	processing mov - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_mov = $pageObject->getControl("mov", $id);
		$control_mov->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing mov - end
//	processing mov_rimanenti - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_mov_rimanenti = $pageObject->getControl("mov_rimanenti", $id);
		$control_mov_rimanenti->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing mov_rimanenti - end
//	processing mov_last_reset_time - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_mov_last_reset_time = $pageObject->getControl("mov_last_reset_time", $id);
		$control_mov_last_reset_time->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing mov_last_reset_time - end
//	processing pf - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_pf = $pageObject->getControl("pf", $id);
		$control_pf->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing pf - end
//	processing pf_rimanenti - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_pf_rimanenti = $pageObject->getControl("pf_rimanenti", $id);
		$control_pf_rimanenti->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing pf_rimanenti - end
//	processing pf_last_reset_time - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_pf_last_reset_time = $pageObject->getControl("pf_last_reset_time", $id);
		$control_pf_last_reset_time->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing pf_last_reset_time - end
//	processing lev - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_lev = $pageObject->getControl("lev", $id);
		$control_lev->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing lev - end
//	processing xp - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_xp = $pageObject->getControl("xp", $id);
		$control_xp->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing xp - end
//	processing xp_next - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_xp_next = $pageObject->getControl("xp_next", $id);
		$control_xp_next->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing xp_next - end
//	processing id_gilda - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_id_gilda = $pageObject->getControl("id_gilda", $id);
		$control_id_gilda->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing id_gilda - end


//	insert masterkey value if exists and if not specified
	if(@$_SESSION[$sessionPrefix."_mastertable"]=="pg_gilde")
	{
		if(postvalue("masterkey1"))
			$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");
		
		if($avalues["id_gilda"]==""){
			$avalues["id_gilda"] = prepare_for_db("id_gilda",$_SESSION[$sessionPrefix."_masterkey1"]);
		}
			
	}
	if(@$_SESSION[$sessionPrefix."_mastertable"]=="ge_utenti")
	{
		if(postvalue("masterkey1"))
			$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");
		
		if($avalues["id_utente"]==""){
			$avalues["id_utente"] = prepare_for_db("id_utente",$_SESSION[$sessionPrefix."_masterkey1"]);
		}
			
	}
	if(@$_SESSION[$sessionPrefix."_mastertable"]=="pl_posti")
	{
		if(postvalue("masterkey1"))
			$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");
		
		if($avalues["id_posto"]==""){
			$avalues["id_posto"] = prepare_for_db("id_posto",$_SESSION[$sessionPrefix."_masterkey1"]);
		}
			
	}


	$failed_inline_add=false;
//	add filenames to values
	foreach($afilename_values as $akey=>$value)
		$avalues[$akey]=$value;
	
//	before Add event
	$retval = true;
	if($eventObj->exists("BeforeAdd"))
		$retval = $eventObj->BeforeAdd($avalues,$usermessage,(bool)$inlineadd, $pageObject);
	if($retval && $pageObject->isCaptchaOk)
	{
		//add or set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked
		setUpdatedLatLng($avalues, $pageObject->cipherer->pSet);
		
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		if(DoInsertRecord($strOriginalTableName,$avalues,$blobfields,$id,$pageObject, $pageObject->cipherer))
		{
			$IsSaved=true;
//	after edit event
			if($auditObj || $eventObj->exists("AfterAdd"))
			{
				foreach($keys as $idx=>$val)
					$avalues[$idx]=$val;
			}
			
			if($auditObj)
				$auditObj->LogAdd($strTableName,$avalues,$keys);
				
// Give possibility to all edit controls to clean their data				
//	processing id_utente - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_id_utente->afterSuccessfulSave();
			}
//	processing id_utente - end
//	processing id_posto - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_id_posto->afterSuccessfulSave();
			}
//	processing id_posto - end
//	processing nome - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_nome->afterSuccessfulSave();
			}
//	processing nome - end
//	processing status - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_status->afterSuccessfulSave();
			}
//	processing status - end
//	processing att - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_att->afterSuccessfulSave();
			}
//	processing att - end
//	processing def - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_def->afterSuccessfulSave();
			}
//	processing def - end
//	processing cha - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_cha->afterSuccessfulSave();
			}
//	processing cha - end
//	processing mov - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_mov->afterSuccessfulSave();
			}
//	processing mov - end
//	processing mov_rimanenti - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_mov_rimanenti->afterSuccessfulSave();
			}
//	processing mov_rimanenti - end
//	processing mov_last_reset_time - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_mov_last_reset_time->afterSuccessfulSave();
			}
//	processing mov_last_reset_time - end
//	processing pf - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_pf->afterSuccessfulSave();
			}
//	processing pf - end
//	processing pf_rimanenti - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_pf_rimanenti->afterSuccessfulSave();
			}
//	processing pf_rimanenti - end
//	processing pf_last_reset_time - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_pf_last_reset_time->afterSuccessfulSave();
			}
//	processing pf_last_reset_time - end
//	processing lev - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_lev->afterSuccessfulSave();
			}
//	processing lev - end
//	processing xp - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_xp->afterSuccessfulSave();
			}
//	processing xp - end
//	processing xp_next - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_xp_next->afterSuccessfulSave();
			}
//	processing xp_next - end
//	processing id_gilda - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_id_gilda->afterSuccessfulSave();
			}
//	processing id_gilda - end

			$afterAdd_id = '';	
			if($eventObj->exists("AfterAdd") && $inlineadd!=ADD_MASTER){
				$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
			} else if ($eventObj->exists("AfterAdd") && $inlineadd==ADD_MASTER){
				if($onFly)
					$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
				else{
					$afterAdd_id = generatePassword(20);	
				
					$_SESSION['after_add_data'][$afterAdd_id] = array(
						'avalues'=>$avalues,
						'keys'=>$keys,
						'inlineadd'=>(bool)$inlineadd,
						'time' => time()
					);	
				}
			}
				
			if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER)
			{
				$permis = array();
				$keylink = "";$k = 0;
				foreach($keys as $idx=>$val)
				{
					if($k!=0)
						$keylink .="&";
					$keylink .="editid".(++$k)."=".htmlspecialchars(rawurlencode(@$val));
				}
				$permis = $pageObject->getPermissions();				
				if (count($keys))
				{
					$message .="</br>";
					if($pageObject->pSet->hasEditPage() && $permis['edit'])
						$message .='&nbsp;<a href=\'pg_personaggi_edit.php?'.$keylink.'\'>'."Edit".'</a>&nbsp;';
					if($pageObject->pSet->hasViewPage() && $permis['search'])
						$message .='&nbsp;<a href=\'pg_personaggi_view.php?'.$keylink.'\'>'."View".'</a>&nbsp;';
				}
				$mesClass = "mes_ok";	
			}
		}
		elseif($inlineadd!=ADD_INLINE)
			$mesClass = "mes_not";	
	}
	else
	{
		$message = $usermessage;
		$status = "DECLINED";
		$readavalues = true;
	}
}
if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if (no_output_done() && $inlineadd==ADD_SIMPLE && $IsSaved)
{
	// saving message
	$_SESSION["message_add"] = ($message ? $message : "");
	// redirect
	header("Location: pg_personaggi_".$pageObject->getPageType().".php");
	// turned on output buffering, so we need to stop script
	exit();
}

if($inlineadd==ADD_MASTER && $IsSaved)
	$_SESSION["message_add"] = ($message ? $message : "");
	
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if($inlineadd==ADD_SIMPLE && isset($_SESSION["message_add"]))
{
	$message = $_SESSION["message_add"];
	unset($_SESSION["message_add"]);
}

$defvalues=array();

//	copy record
if(array_key_exists("copyid1",$_REQUEST) || array_key_exists("editid1",$_REQUEST))
{
	$copykeys=array();
	if(array_key_exists("copyid1",$_REQUEST))
	{
		$copykeys["id"]=postvalue("copyid1");
	}
	else
	{
		$copykeys["id"]=postvalue("editid1");
	}
	$strWhere=KeyWhere($copykeys);
	$strSQL = $gQuery->gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$defvalues = $pageObject->cipherer->DecryptFetchedArray($rs);
	if(!$defvalues)
		$defvalues=array();
//	clear key fields
	$defvalues["id"]="";
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere, $pageObject);
}
else
{
	$defvalues["att"] = 0;
	$defvalues["def"] = 0;
	$defvalues["cha"] = 0;
	$defvalues["mov"] = 0;
	$defvalues["mov_rimanenti"] = 0;
	$defvalues["mov_last_reset_time"] = 0;
	$defvalues["pf"] = 0;
	$defvalues["pf_rimanenti"] = 0;
	$defvalues["pf_last_reset_time"] = 0;
	$defvalues["lev"] = 0;
	$defvalues["xp"] = 0;
	$defvalues["xp_next"] = 0;
}


//	set default values for the foreign keys

if(@$_SESSION[$sessionPrefix."_mastertable"]=="pg_gilde")
{
	if(postvalue("masterkey1"))
		$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");

	if(postvalue("mainMPageType")<>"add")
		$defvalues["id_gilda"] = @$_SESSION[$sessionPrefix."_masterkey1"];	
	
}

if(@$_SESSION[$sessionPrefix."_mastertable"]=="ge_utenti")
{
	if(postvalue("masterkey1"))
		$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");

	if(postvalue("mainMPageType")<>"add")
		$defvalues["id_utente"] = @$_SESSION[$sessionPrefix."_masterkey1"];	
	
}

if(@$_SESSION[$sessionPrefix."_mastertable"]=="pl_posti")
{
	if(postvalue("masterkey1"))
		$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");

	if(postvalue("mainMPageType")<>"add")
		$defvalues["id_posto"] = @$_SESSION[$sessionPrefix."_masterkey1"];	
	
}

if($readavalues)
{
	$defvalues["id_utente"]=@$avalues["id_utente"];
	$defvalues["id_posto"]=@$avalues["id_posto"];
	$defvalues["nome"]=@$avalues["nome"];
	$defvalues["status"]=@$avalues["status"];
	$defvalues["att"]=@$avalues["att"];
	$defvalues["def"]=@$avalues["def"];
	$defvalues["cha"]=@$avalues["cha"];
	$defvalues["mov"]=@$avalues["mov"];
	$defvalues["mov_rimanenti"]=@$avalues["mov_rimanenti"];
	$defvalues["mov_last_reset_time"]=@$avalues["mov_last_reset_time"];
	$defvalues["pf"]=@$avalues["pf"];
	$defvalues["pf_rimanenti"]=@$avalues["pf_rimanenti"];
	$defvalues["pf_last_reset_time"]=@$avalues["pf_last_reset_time"];
	$defvalues["lev"]=@$avalues["lev"];
	$defvalues["xp"]=@$avalues["xp"];
	$defvalues["xp_next"]=@$avalues["xp_next"];
	$defvalues["id_gilda"]=@$avalues["id_gilda"];
}

if($eventObj->exists("ProcessValuesAdd"))
	$eventObj->ProcessValuesAdd($defvalues, $pageObject);


//for basic files
$includes="";

if($inlineadd!=ADD_INLINE)
{
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$includes .="<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		if (!isMobile())
			$includes.="<div id=\"search_suggest\"></div>\r\n";
	}
	
	if(!$pageObject->isAppearOnTabs("id_utente"))
		$xt->assign("id_utente_fieldblock",true);
	else
		$xt->assign("id_utente_tabfieldblock",true);
	$xt->assign("id_utente_label",true);
	if(isEnableSection508())
		$xt->assign_section("id_utente_label","<label for=\"".GetInputElementId("id_utente", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("id_posto"))
		$xt->assign("id_posto_fieldblock",true);
	else
		$xt->assign("id_posto_tabfieldblock",true);
	$xt->assign("id_posto_label",true);
	if(isEnableSection508())
		$xt->assign_section("id_posto_label","<label for=\"".GetInputElementId("id_posto", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("nome"))
		$xt->assign("nome_fieldblock",true);
	else
		$xt->assign("nome_tabfieldblock",true);
	$xt->assign("nome_label",true);
	if(isEnableSection508())
		$xt->assign_section("nome_label","<label for=\"".GetInputElementId("nome", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("status"))
		$xt->assign("status_fieldblock",true);
	else
		$xt->assign("status_tabfieldblock",true);
	$xt->assign("status_label",true);
	if(isEnableSection508())
		$xt->assign_section("status_label","<label for=\"".GetInputElementId("status", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("att"))
		$xt->assign("att_fieldblock",true);
	else
		$xt->assign("att_tabfieldblock",true);
	$xt->assign("att_label",true);
	if(isEnableSection508())
		$xt->assign_section("att_label","<label for=\"".GetInputElementId("att", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("def"))
		$xt->assign("def_fieldblock",true);
	else
		$xt->assign("def_tabfieldblock",true);
	$xt->assign("def_label",true);
	if(isEnableSection508())
		$xt->assign_section("def_label","<label for=\"".GetInputElementId("def", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("cha"))
		$xt->assign("cha_fieldblock",true);
	else
		$xt->assign("cha_tabfieldblock",true);
	$xt->assign("cha_label",true);
	if(isEnableSection508())
		$xt->assign_section("cha_label","<label for=\"".GetInputElementId("cha", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("mov"))
		$xt->assign("mov_fieldblock",true);
	else
		$xt->assign("mov_tabfieldblock",true);
	$xt->assign("mov_label",true);
	if(isEnableSection508())
		$xt->assign_section("mov_label","<label for=\"".GetInputElementId("mov", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("mov_rimanenti"))
		$xt->assign("mov_rimanenti_fieldblock",true);
	else
		$xt->assign("mov_rimanenti_tabfieldblock",true);
	$xt->assign("mov_rimanenti_label",true);
	if(isEnableSection508())
		$xt->assign_section("mov_rimanenti_label","<label for=\"".GetInputElementId("mov_rimanenti", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("mov_last_reset_time"))
		$xt->assign("mov_last_reset_time_fieldblock",true);
	else
		$xt->assign("mov_last_reset_time_tabfieldblock",true);
	$xt->assign("mov_last_reset_time_label",true);
	if(isEnableSection508())
		$xt->assign_section("mov_last_reset_time_label","<label for=\"".GetInputElementId("mov_last_reset_time", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("pf"))
		$xt->assign("pf_fieldblock",true);
	else
		$xt->assign("pf_tabfieldblock",true);
	$xt->assign("pf_label",true);
	if(isEnableSection508())
		$xt->assign_section("pf_label","<label for=\"".GetInputElementId("pf", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("pf_rimanenti"))
		$xt->assign("pf_rimanenti_fieldblock",true);
	else
		$xt->assign("pf_rimanenti_tabfieldblock",true);
	$xt->assign("pf_rimanenti_label",true);
	if(isEnableSection508())
		$xt->assign_section("pf_rimanenti_label","<label for=\"".GetInputElementId("pf_rimanenti", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("pf_last_reset_time"))
		$xt->assign("pf_last_reset_time_fieldblock",true);
	else
		$xt->assign("pf_last_reset_time_tabfieldblock",true);
	$xt->assign("pf_last_reset_time_label",true);
	if(isEnableSection508())
		$xt->assign_section("pf_last_reset_time_label","<label for=\"".GetInputElementId("pf_last_reset_time", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("lev"))
		$xt->assign("lev_fieldblock",true);
	else
		$xt->assign("lev_tabfieldblock",true);
	$xt->assign("lev_label",true);
	if(isEnableSection508())
		$xt->assign_section("lev_label","<label for=\"".GetInputElementId("lev", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("xp"))
		$xt->assign("xp_fieldblock",true);
	else
		$xt->assign("xp_tabfieldblock",true);
	$xt->assign("xp_label",true);
	if(isEnableSection508())
		$xt->assign_section("xp_label","<label for=\"".GetInputElementId("xp", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("xp_next"))
		$xt->assign("xp_next_fieldblock",true);
	else
		$xt->assign("xp_next_tabfieldblock",true);
	$xt->assign("xp_next_label",true);
	if(isEnableSection508())
		$xt->assign_section("xp_next_label","<label for=\"".GetInputElementId("xp_next", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("id_gilda"))
		$xt->assign("id_gilda_fieldblock",true);
	else
		$xt->assign("id_gilda_tabfieldblock",true);
	$xt->assign("id_gilda_label",true);
	if(isEnableSection508())
		$xt->assign_section("id_gilda_label","<label for=\"".GetInputElementId("id_gilda", $id, PAGE_ADD)."\">","</label>");
	
	
	
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$pageObject->body["begin"] .= $includes;
				$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
		$xt->assign("back_button",true);
	}
	else
	{		
		$xt->assign("cancelbutton_attrs", "id=\"cancelButton".$id."\"");
		$xt->assign("cancel_button",true);
		$xt->assign("header","");
	}
	$xt->assign("save_button",true);
}
$xt->assign("savebutton_attrs","id=\"saveButton".$id."\"");
$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}

//	show readonly fields
$linkdata="";

$i = 0;
$jsKeys = array();
$keyFields = array();
foreach($keys as $field=>$value)
{
	$keyFields[$i] = $field;
	$jsKeys[$i++] = $value;
}

if(@$_POST["a"]=="added" && $inlineadd==ADD_ONTHEFLY)
{
	if( !$error_happened && $status!="DECLINED")
	{
		$addedData = GetAddedDataLookupQuery($pageObject, $keys, false);
		$data =& $addedData[0];	
		
		if($data)
		{
			$respData = array($addedData[1]["linkField"] => @$data[$addedData[1]["linkFieldIndex"]], $addedData[1]["displayField"] => @$data[$addedData[1]["displayFieldIndex"]]);
		}
		else
		{
			$respData = array($addedData[1]["linkField"] => @$avalues[$addedData[1]["linkField"]], $addedData[1]["displayField"] => @$avalues[$addedData[1]["displayField"]]);
		}		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $jsKeys;
		$returnJSON['keyFields'] = $keyFields;
		$returnJSON['vals'] = $respData;
		$returnJSON['fields'] = $showFields;
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}

if(@$_POST["a"]=="added" && ($inlineadd == ADD_INLINE || $inlineadd == ADD_MASTER || $inlineadd==ADD_POPUP)) 
{
	//Preparation   view values
	//	get current values and show edit controls
	$dispFieldAlias = "";
	$data=0;
	$linkAndDispVals = array();
	if(count($keys))
	{
		$where=KeyWhere($keys);
			
		$forLookup = postvalue('forLookup');
		if ($forLookup)
		{
			$addedData = GetAddedDataLookupQuery($pageObject, $keys, true);
			$data =& $addedData[0];
			$linkAndDispVals = array('linkField' => $addedData[0][$addedData[1]["linkField"]], 'displayField' => $addedData[0][$addedData[1]["displayField"]]);
		}
		else
		{
			$strSQL = $gQuery->gSQLWhere_having_fromQuery('', $where, '');		
		
			LogInfo($strSQL);
			$rs=db_query($strSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}
	}
	if(!$data)
	{
		$data=$avalues;
		$HaveData=false;
	}
	//check if correct values added
	$showDetailKeys["pg_mail"]["masterkey1"] = $data["id"];	
	$showDetailKeys["pg_messaggi"]["masterkey1"] = $data["id"];	

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["id"]));
	
////////////////////////////////////////////
//	id
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("id", $data, $keylink);
		$showValues["id"] = $value;
		$showFields[] = "id";
	}	
//	id_utente
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("id_utente", $data, $keylink);
		$showValues["id_utente"] = $value;
		$showFields[] = "id_utente";
	}	
//	id_posto
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("id_posto", $data, $keylink);
		$showValues["id_posto"] = $value;
		$showFields[] = "id_posto";
	}	
//	nome
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("nome", $data, $keylink);
		$showValues["nome"] = $value;
		$showFields[] = "nome";
	}	
//	status
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("status", $data, $keylink);
		$showValues["status"] = $value;
		$showFields[] = "status";
	}	
//	att
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("att", $data, $keylink);
		$showValues["att"] = $value;
		$showFields[] = "att";
	}	
//	def
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("def", $data, $keylink);
		$showValues["def"] = $value;
		$showFields[] = "def";
	}	
//	cha
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("cha", $data, $keylink);
		$showValues["cha"] = $value;
		$showFields[] = "cha";
	}	
//	mov
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("mov", $data, $keylink);
		$showValues["mov"] = $value;
		$showFields[] = "mov";
	}	
//	mov_rimanenti
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("mov_rimanenti", $data, $keylink);
		$showValues["mov_rimanenti"] = $value;
		$showFields[] = "mov_rimanenti";
	}	
//	mov_last_reset_time
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("mov_last_reset_time", $data, $keylink);
		$showValues["mov_last_reset_time"] = $value;
		$showFields[] = "mov_last_reset_time";
	}	
//	pf
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("pf", $data, $keylink);
		$showValues["pf"] = $value;
		$showFields[] = "pf";
	}	
//	pf_rimanenti
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("pf_rimanenti", $data, $keylink);
		$showValues["pf_rimanenti"] = $value;
		$showFields[] = "pf_rimanenti";
	}	
//	pf_last_reset_time
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("pf_last_reset_time", $data, $keylink);
		$showValues["pf_last_reset_time"] = $value;
		$showFields[] = "pf_last_reset_time";
	}	
//	lev
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("lev", $data, $keylink);
		$showValues["lev"] = $value;
		$showFields[] = "lev";
	}	
//	xp
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("xp", $data, $keylink);
		$showValues["xp"] = $value;
		$showFields[] = "xp";
	}	
//	xp_next
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("xp_next", $data, $keylink);
		$showValues["xp_next"] = $value;
		$showFields[] = "xp_next";
	}	
//	id_gilda
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("id_gilda", $data, $keylink);
		$showValues["id_gilda"] = $value;
		$showFields[] = "id_gilda";
	}	
		$showRawValues["id"] = substr($data["id"],0,100);
		$showRawValues["id_utente"] = substr($data["id_utente"],0,100);
		$showRawValues["id_posto"] = substr($data["id_posto"],0,100);
		$showRawValues["nome"] = substr($data["nome"],0,100);
		$showRawValues["status"] = substr($data["status"],0,100);
		$showRawValues["att"] = substr($data["att"],0,100);
		$showRawValues["def"] = substr($data["def"],0,100);
		$showRawValues["cha"] = substr($data["cha"],0,100);
		$showRawValues["mov"] = substr($data["mov"],0,100);
		$showRawValues["mov_rimanenti"] = substr($data["mov_rimanenti"],0,100);
		$showRawValues["mov_last_reset_time"] = substr($data["mov_last_reset_time"],0,100);
		$showRawValues["pf"] = substr($data["pf"],0,100);
		$showRawValues["pf_rimanenti"] = substr($data["pf_rimanenti"],0,100);
		$showRawValues["pf_last_reset_time"] = substr($data["pf_last_reset_time"],0,100);
		$showRawValues["lev"] = substr($data["lev"],0,100);
		$showRawValues["xp"] = substr($data["xp"],0,100);
		$showRawValues["xp_next"] = substr($data["xp_next"],0,100);
		$showRawValues["id_gilda"] = substr($data["id_gilda"],0,100);
	
	// for custom expression for display field
	if ($dispFieldAlias)
	{
		$showValues[] = $data[$dispFieldAlias];	
		$showFields[] = $dispFieldAlias;
		$showRawValues[] = substr($data[$dispFieldAlias],0,100);
	}
	
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_POPUP)
	{	
		if($IsSaved && count($showValues))
		{
			$returnJSON['success'] = true;
			if($HaveData){
				$returnJSON['noKeys'] = false;
			}else{
				$returnJSON['noKeys'] = true;
			}
			
			$returnJSON['keys'] = $jsKeys;
			$returnJSON['keyFields'] = $keyFields;
			$returnJSON['vals'] = $showValues;
			$returnJSON['fields'] = $showFields;
			$returnJSON['rawVals'] = $showRawValues;
			$returnJSON['detKeys'] = $showDetailKeys;
			$returnJSON['userMess'] = $usermessage;
			$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			// add link and display value if list page is lookup with search
			if(array_key_exists('linkField', $linkAndDispVals))
			{
				$returnJSON['linkValue'] = $linkAndDispVals['linkField'];
				$returnJSON['displayValue'] = $linkAndDispVals['displayField'];
			}
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{ 
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$returnJSON['nonEditable'] = true;
			}
			
			if($inlineadd==ADD_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
				$returnJSON['hideCaptcha'] = true;
		}
		else
		{
			$returnJSON['success'] = false;
			$returnJSON['message'] = $message;
			if(!$pageObject->isCaptchaOk)
				$returnJSON['captcha'] = false;
		}
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
} 

/////////////////////////////////////////////////////////////
if($inlineadd==ADD_MASTER)
{
	$respJSON = array();
	if(($_POST["a"]=="added" && $IsSaved))
	{
		$respJSON['afterAddId'] = $afterAdd_id;
		$respJSON['success'] = true;
		$respJSON['fields'] = $showFields;
		$respJSON['vals'] = $showValues;
		if($onFly){
			if($HaveData)
				$respJSON['noKeys'] = false;
			else
				$respJSON['noKeys'] = true;
			$respJSON['keys'] = $jsKeys;
			$respJSON['keyFields'] = $keyFields;
			$respJSON['rawVals'] = $showRawValues;
			$respJSON['detKeys'] = $showDetailKeys;
			$respJSON['userMess'] = $usermessage;
			$respJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$respJSON['nonEditable'] = true;
			}
		}
		$respJSON['mKeys'] = array();
		for($i=0;$i<count($dpParams['ids']);$i++)
		{
			$data=0;
			if(count($keys))
			{
				$where=KeyWhere($keys);
							$strSQL = $gQuery->gSQLWhere($where);
				LogInfo($strSQL);
				$rs = db_query($strSQL,$conn);
				$data = $pageObject->cipherer->DecryptFetchedArray($rs);
			}
			if(!$data)
				$data=$avalues;
			
			$mKeyId = 1;
			foreach($mKeys[$dpParams['strTableNames'][$i]] as $mk)
			{
				if($data[$mk])
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = $data[$mk];
				else
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = '';
			}
		}
		if(isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$respJSON['hidecaptcha'] = true;
	}
	else{
			$respJSON['success'] = false;
			if(!$pageObject->isCaptchaOk)
				$respJSON['captcha'] = false;
			else
				$respJSON['error'] = $message;
			if($onFly)
				$respJSON['message'] = $message;
		}
	echo "<textarea>".htmlspecialchars(my_json_encode($respJSON))."</textarea>";
	exit();
}

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////

//	validation stuff
$regex='';
$regexmessage='';
$regextype = '';
$control = array();

foreach($addFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"] = "xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_ADD;
		$control[$gfName]["params"]["field"] = $fName;
		$control[$gfName]["params"]["value"] = @$defvalues[$fName];
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		if($pageObject->pSet->isUseRTE($fName))
			$_SESSION[$strTableName."_".$fName."_rte"] = @$defvalues[$fName];
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	//if richEditor for field
	if($pageObject->pSet->isUseRTE($fName))
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="add";
		$controls["controls"]['mode'] = "add";
	}
	else
	{
		if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="inline_add";
			$controls["controls"]['mode'] = "inline_add";
		}
		else
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="add";
			$controls["controls"]['mode'] = "add";
		}
	}
	
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$defvalues[$fName];
	
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $addFields))
		$vals = array($fName => @$defvalues[$fName], $strCategoryControl => @$defvalues[$strCategoryControl]);
	else
		$vals = array($fName => @$defvalues[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
	{
		$controls["controls"]['preloadData'] = $preload;
		if(!@$defvalues[$fName] && count($preload["vals"])>0)
			$defvalues[$fName] = $preload["vals"][0];
	}
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')
		$pageObject->fillTimePickSettings($fName, @$defvalues[$fName]);
	
	if((($detailKeys && in_array($fName, $detailKeys)) || $fName == postvalue("category")) && array_key_exists($fName, $defvalues))
	{
		$value = $pageObject->showDBValue($fName, $defvalues);
		
		$xt->assign($gfName."_editcontrol", $value);
	}
}

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_POPUP) && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		include("classes/searchclause.php");
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
		
	$flyId = $ids+1;
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_ADD;
		$options["mainMasterPageType"] = PAGE_ADD;
		$options['masterTable'] = "pg_personaggi";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		
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
		$options['flyId'] = $flyId++;
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk)
		{
			if($defvalues[$mk])
				$options['masterKeysReq'][$mkr++] = $defvalues[$mk];
			else
				$options['masterKeysReq'][$mkr++] = '';
		}
		$listPageObject = ListPage::createListPage($strTableName,$options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		$flyId = $listPageObject->recId+1;
		
		//set page events
		foreach($listPageObject->eventsObject->events as $event => $name)
			$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
		
		//add detail settings to master settings
		$listPageObject->addControlsJSAndCSS();
		$listPageObject->fillSetCntrlMaps();
		$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];

		$dControlsMap[$strTableName] = $listPageObject->controlsMap;
		$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
		
		foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
			$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
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
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap;
	$strTableName = "pg_personaggi";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineadd == ADD_SIMPLE)
{
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{ 
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody", $pageObject->body);
	$xt->assign("body",true);
}	

$xt->assign("style_block",true);
$pageObject->xt->assign("legend", true);

if($eventObj->exists("BeforeShowAdd"))
	$eventObj->BeforeShowAdd($xt, $templatefile, $pageObject);
	
if($inlineadd != ADD_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $id+1;	
	echo (my_json_encode($returnJSON)); 
}
elseif ($inlineadd == ADD_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($addFields as $fName)
	{
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");	
	}	
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);

function GetAddedDataLookupQuery($pageObject, $keys, $forLookup)
{
	global $conn, $strTableName, $strOriginalTableName;
	
	$LookupSQL = "";
	$linkfield = "";
	$dispfield = "";
	$noBlobReplace = false;
	$lookupFieldName = "";
	
	if($LookupSQL && $nLookupType != LT_QUERY)
		$LookupSQL.=" from ".AddTableWrappers($strOriginalTableName);
		
	$data = 0;
	$lookupIndexes = array("linkFieldIndex" => 0, "displayFieldIndex" => 0);
	if(count($keys))
	{
		$where = KeyWhere($keys);
		if($nLookupType == LT_QUERY){
			$LookupSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $where));
		}else 
			$LookupSQL.=" where ".$where;
		$lookupIndexes = GetLookupFieldsIndexes($lookupPSet, $lookupFieldName);
		LogInfo($LookupSQL);
		if($forLookup){
			$rs=db_query($LookupSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}else if($LookupSQL)
		{
			$rs = db_query($LookupSQL,$conn);
			$data = db_fetch_numarray($rs);
			$data[$lookupIndexes["linkFieldIndex"]] = $pageObject->cipherer->DecryptField($linkFieldName, $data[$lookupIndexes["linkFieldIndex"]]);
			if($nLookupType == LT_QUERY)
				$data[$lookupIndexes["displayFieldIndex"]] = $pageObject->cipherer->DecryptField($dispfield, $data[$lookupIndexes["displayFieldIndex"]]);		
		}
	}

	return array($data, array("linkField" => $linkFieldName, "displayField" => $dispfield
		, "linkFieldIndex" => $lookupIndexes["linkFieldIndex"], "displayFieldIndex" => $lookupIndexes["displayFieldIndex"]));
}	
	
?>
