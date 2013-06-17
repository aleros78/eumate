<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/pg_personaggi_variables.php");
include('include/xtempl.php');
include('classes/editpage.php');
include("classes/searchclause.php");

add_nocache_headers();

global $globalEvents;

CheckPermissionsEvent($strTableName, 'E');

$layout = new TLayout("edit2","BoldBlueWave","MobileBlueWave");
$layout->blocks["top"] = array();
$layout->containers["edit"] = array();

$layout->containers["edit"][] = array("name"=>"editheader","block"=>"","substyle"=>2);


$layout->containers["edit"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["edit"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"editfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"editbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["edit"] = "1";
$layout->blocks["top"][] = "edit";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["pg_personaggi_edit"] = $layout;




if ((sizeof($_POST)==0) && (postvalue('ferror')) && (!postvalue("editid1"))){
	$returnJSON['success'] = false;
	$returnJSON['message'] = "Error occurred";
	$returnJSON['fatalError'] = true;
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}
else if ((sizeof($_POST)==0) && (postvalue('ferror')) && (postvalue("editid1"))){
	if (postvalue('fly')){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_edit"] = "<< "."Error occurred"." >>";
	}
}
/////////////////////////////////////////////////////////////
//init variables
/////////////////////////////////////////////////////////////
if(postvalue("editType")=="inline")
	$inlineedit = EDIT_INLINE;
elseif(postvalue("editType")==EDIT_POPUP)
	$inlineedit = EDIT_POPUP;
else
	$inlineedit = EDIT_SIMPLE;

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

$flyId = $id+1;
$xt = new Xtempl();

// assign an id
$xt->assign("id",$id);

$templatefile = "pg_personaggi_edit.htm";

//array of params for classes
$params = array("pageType" => PAGE_EDIT,"id" => $id);


$params['tName'] = $strTableName;
$params['xt'] = &$xt;
$params['mode'] = $inlineedit;
$params['includes_js'] = $includes_js;
$params['includes_jsreq'] = $includes_jsreq;
$params['includes_css'] = $includes_css;
$params['locale_info'] = $locale_info;
$params['templatefile'] = $templatefile;
$params['pageEditLikeInline'] = ($inlineedit == EDIT_INLINE);
//Get array of tabs for edit page
$params['useTabsOnEdit'] = $gSettings->useTabsOnEdit();
if($params['useTabsOnEdit'])
	$params['arrEditTabs'] = $gSettings->getEditTabs();

$pageObject = new EditPage($params);

//	For ajax request 
if($_REQUEST["action"]!="")
{
	if($pageObject->lockingObj)
	{
		$arrkeys = explode("&",refine($_REQUEST["keys"]));
		foreach($arrkeys as $ind=>$val)
			$arrkeys[$ind]=urldecode($val);
		
		if($_REQUEST["action"]=="unlock")
		{
			$pageObject->lockingObj->UnlockRecord($strTableName,$arrkeys,$_REQUEST["sid"]);
			exit();	
		}
		else if($_REQUEST["action"]=="lockadmin" && (IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP))
		{
			$pageObject->lockingObj->UnlockAdmin($strTableName,$arrkeys,$_REQUEST["startEdit"]=="yes");
			if($_REQUEST["startEdit"]=="no")
				echo "unlock";
			else if($_REQUEST["startEdit"]=="yes")
				echo "lock";
			exit();	
		}
		else if($_REQUEST["action"]=="confirm")
		{
			if(!$pageObject->lockingObj->ConfirmLock($strTableName,$arrkeys,$message));
				echo $message;
			exit();	
		}
	}
	else
		exit();
}

$filename = $status = $message = $mesClass = $usermessage = $strWhereClause = $bodyonload = "";
$showValues = $showRawValues = $showFields = $showDetailKeys = $key = $next = $prev = array();
$HaveData = $enableCtrlsForEditing = true;
$error_happened = $readevalues = $IsSaved = false;

$auditObj = GetAuditObject($strTableName);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;


if($pageObject->lockingObj)
{
	$system_attrs = "style='display:none;'";
	$system_message = "";
}

if ($inlineedit!=EDIT_INLINE)
{
	// add button events if exist
	$pageObject->addButtonHandlers();
}

$url_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//	Before Process event
if($eventObj->exists("BeforeProcessEdit"))
	$eventObj->BeforeProcessEdit($conn, $pageObject);

$keys = array();
$skeys = "";
$savedKeys = array();
$keys["id"] = urldecode(postvalue("editid1"));
$savedKeys["id"] = urldecode(postvalue("editid1"));
$skeys.= rawurlencode(postvalue("editid1"))."&";

$pageObject->setKeys($keys);

if($skeys!="")
	$skeys = substr($skeys,0,-1);

//For show detail tables on master page edit
if($inlineedit!=EDIT_INLINE)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables && !isMobile())
	{
		$ids = $id;
				$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}
/////////////////////////////////////////////////////////////
//	process entered data, read and save
/////////////////////////////////////////////////////////////

// proccess captcha
if ($inlineedit!=EDIT_INLINE)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();

if(@$_POST["a"] == "edited")
{
	$strWhereClause = whereAdd($strWhereClause,KeyWhere($keys));
		$oldValuesRead = false;	
	if($eventObj->exists("AfterEdit") || $eventObj->exists("BeforeEdit") || $auditObj || isTableGeoUpdatable($pageObject->cipherer->pSet)
		|| $globalEvents->exists("IsRecordEditable", $strTableName))
	{
		//	read old values
		$rsold = db_query($gQuery->gSQLWhere($strWhereClause), $conn);
		$dataold = $pageObject->cipherer->DecryptFetchedArray($rsold);
		$oldValuesRead = true;
	}
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($dataold, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
	$evalues = $efilename_values = $blobfields = array();
	

//	processing id_utente - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_id_utente = $pageObject->getControl("id_utente", $id);
		$control_id_utente->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing id_utente - end
//	processing id_posto - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_id_posto = $pageObject->getControl("id_posto", $id);
		$control_id_posto->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing id_posto - end
//	processing nome - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_nome = $pageObject->getControl("nome", $id);
		$control_nome->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing nome - end
//	processing status - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_status = $pageObject->getControl("status", $id);
		$control_status->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing status - end
//	processing att - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_att = $pageObject->getControl("att", $id);
		$control_att->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing att - end
//	processing def - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_def = $pageObject->getControl("def", $id);
		$control_def->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing def - end
//	processing cha - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_cha = $pageObject->getControl("cha", $id);
		$control_cha->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing cha - end
//	processing mov - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_mov = $pageObject->getControl("mov", $id);
		$control_mov->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing mov - end
//	processing mov_rimanenti - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_mov_rimanenti = $pageObject->getControl("mov_rimanenti", $id);
		$control_mov_rimanenti->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing mov_rimanenti - end
//	processing mov_last_reset_time - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_mov_last_reset_time = $pageObject->getControl("mov_last_reset_time", $id);
		$control_mov_last_reset_time->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing mov_last_reset_time - end
//	processing pf - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_pf = $pageObject->getControl("pf", $id);
		$control_pf->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing pf - end
//	processing pf_rimanenti - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_pf_rimanenti = $pageObject->getControl("pf_rimanenti", $id);
		$control_pf_rimanenti->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing pf_rimanenti - end
//	processing pf_last_reset_time - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_pf_last_reset_time = $pageObject->getControl("pf_last_reset_time", $id);
		$control_pf_last_reset_time->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing pf_last_reset_time - end
//	processing lev - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_lev = $pageObject->getControl("lev", $id);
		$control_lev->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing lev - end
//	processing xp - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_xp = $pageObject->getControl("xp", $id);
		$control_xp->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing xp - end
//	processing xp_next - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_xp_next = $pageObject->getControl("xp_next", $id);
		$control_xp_next->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing xp_next - end
//	processing id_gilda - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_id_gilda = $pageObject->getControl("id_gilda", $id);
		$control_id_gilda->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing id_gilda - end

	foreach($efilename_values as $ekey=>$value)
		$evalues[$ekey] = $value;
		
	if($pageObject->lockingObj)
	{
		$lockmessage = "";
		if(!$pageObject->lockingObj->ConfirmLock($strTableName,$savedKeys,$lockmessage))
		{
			$enableCtrlsForEditing = false;
			$system_attrs = "style='display:block;'";
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,false,$id);
				
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
				exit();
			}
			else
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$system_message = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,true,$id);
				else
					$system_message = $lockmessage;
			}
			$status = "DECLINED";
			$readevalues = true;
		}
	}
	
	if($readevalues==false)
	{
	//	do event
		$retval = true;
		if($eventObj->exists("BeforeEdit"))
			$retval=$eventObj->BeforeEdit($evalues,$strWhereClause,$dataold,$keys,$usermessage,(bool)$inlineedit, $pageObject);
	
		if($retval && $pageObject->isCaptchaOk)
		{		
			if($inlineedit!=EDIT_INLINE)
				$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		
			//set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked	
            if(isTableGeoUpdatable($pageObject->cipherer->pSet)) {			
				setUpdatedLatLng($evalues, $pageObject->cipherer->pSet, $dataold);
			}	
			
			if(DoUpdateRecord($strOriginalTableName,$evalues,$blobfields,$strWhereClause,$id,$pageObject, $pageObject->cipherer))
			{
				$IsSaved = true;

			// Give possibility to all edit controls to clean their data				
			//	processing id_utente - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_id_utente->afterSuccessfulSave();
				}
	//	processing id_utente - end
			//	processing id_posto - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_id_posto->afterSuccessfulSave();
				}
	//	processing id_posto - end
			//	processing nome - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_nome->afterSuccessfulSave();
				}
	//	processing nome - end
			//	processing status - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_status->afterSuccessfulSave();
				}
	//	processing status - end
			//	processing att - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_att->afterSuccessfulSave();
				}
	//	processing att - end
			//	processing def - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_def->afterSuccessfulSave();
				}
	//	processing def - end
			//	processing cha - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_cha->afterSuccessfulSave();
				}
	//	processing cha - end
			//	processing mov - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_mov->afterSuccessfulSave();
				}
	//	processing mov - end
			//	processing mov_rimanenti - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_mov_rimanenti->afterSuccessfulSave();
				}
	//	processing mov_rimanenti - end
			//	processing mov_last_reset_time - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_mov_last_reset_time->afterSuccessfulSave();
				}
	//	processing mov_last_reset_time - end
			//	processing pf - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_pf->afterSuccessfulSave();
				}
	//	processing pf - end
			//	processing pf_rimanenti - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_pf_rimanenti->afterSuccessfulSave();
				}
	//	processing pf_rimanenti - end
			//	processing pf_last_reset_time - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_pf_last_reset_time->afterSuccessfulSave();
				}
	//	processing pf_last_reset_time - end
			//	processing lev - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_lev->afterSuccessfulSave();
				}
	//	processing lev - end
			//	processing xp - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_xp->afterSuccessfulSave();
				}
	//	processing xp - end
			//	processing xp_next - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_xp_next->afterSuccessfulSave();
				}
	//	processing xp_next - end
			//	processing id_gilda - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_id_gilda->afterSuccessfulSave();
				}
	//	processing id_gilda - end
				
				//	after edit event
				if($pageObject->lockingObj && $inlineedit == EDIT_INLINE)
					$pageObject->lockingObj->UnlockRecord($strTableName,$savedKeys,"");
				if($auditObj || $eventObj->exists("AfterEdit"))
				{
					foreach($dataold as $idx=>$val)
					{
						if(!array_key_exists($idx,$evalues))
							$evalues[$idx] = $val;
					}
				}

				if($auditObj)
					$auditObj->LogEdit($strTableName,$evalues,$dataold,$keys);
				if($eventObj->exists("AfterEdit"))
					$eventObj->AfterEdit($evalues,KeyWhere($keys),$dataold,$keys,(bool)$inlineedit, $pageObject);
							
				$mesClass = "mes_ok";
			}
			elseif($inlineedit!=EDIT_INLINE)
				$mesClass = "mes_not";	
		}
		else
		{
			$message = $usermessage;
			$readevalues = true;
			$status = "DECLINED";
		}
	}
	if($readevalues)
		$keys = $savedKeys;
}
//else
{
	/////////////////////////
	//Locking recors
	/////////////////////////

	if($pageObject->lockingObj)
	{
		$enableCtrlsForEditing = $pageObject->lockingObj->LockRecord($strTableName,$keys);
		if(!$enableCtrlsForEditing)
		{
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,false,$id);
				else
					$lockmessage = $pageObject->lockingObj->LockUser;
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo my_json_encode($returnJSON);
				exit();
			}
			
			$system_attrs = "style='display:block;'";
			$system_message = $pageObject->lockingObj->LockUser;
			
			if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
			{
				$rb = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,true,$id);
				if($rb!="")
					$system_message = $rb;
			}
		}
	}
}

if($pageObject->lockingObj && $inlineedit!=EDIT_INLINE)
	$pageObject->body["begin"] .='<div class="runner-locking" '.$system_attrs.'>'.$system_message.'</div>';

if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if ($IsSaved && no_output_done() && $inlineedit == EDIT_SIMPLE)
{
	// saving message
	$_SESSION["message_edit"] = ($message ? $message : "");
	// key get query
	$keyGetQ = "";
		$keyGetQ.="editid1=".rawurldecode($keys["id"])."&";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	header("Location: pg_personaggi_".$pageObject->getPageType().".php?".$keyGetQ);
	// turned on output buffering, so we need to stop script
	exit();
}
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if ($inlineedit == EDIT_SIMPLE && isset($_SESSION["message_edit"]))
{
	$message = $_SESSION["message_edit"];
	unset($_SESSION["message_edit"]);
}


$pageObject->setKeys($keys);
$pageObject->readEditValues = $readevalues;
if($readevalues)
	$pageObject->editValues = $evalues;

//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();
if(!$data)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		header("Location: pg_personaggi_list.php?a=return");
		exit();
	}
	else
		$data = array();
}

if($globalEvents->exists("IsRecordEditable", $strTableName))
{
	if(!$globalEvents->IsRecordEditable($data, true, $strTableName) && $inlineedit != EDIT_INLINE)
	{
		return SecurityRedirect($inlineedit);
	}
}


//global variable use in BuildEditControl function
//	show readonly fields

if($readevalues)
{
	$data["id_utente"] = $evalues["id_utente"];
	$data["id_posto"] = $evalues["id_posto"];
	$data["nome"] = $evalues["nome"];
	$data["status"] = $evalues["status"];
	$data["att"] = $evalues["att"];
	$data["def"] = $evalues["def"];
	$data["cha"] = $evalues["cha"];
	$data["mov"] = $evalues["mov"];
	$data["mov_rimanenti"] = $evalues["mov_rimanenti"];
	$data["mov_last_reset_time"] = $evalues["mov_last_reset_time"];
	$data["pf"] = $evalues["pf"];
	$data["pf_rimanenti"] = $evalues["pf_rimanenti"];
	$data["pf_last_reset_time"] = $evalues["pf_last_reset_time"];
	$data["lev"] = $evalues["lev"];
	$data["xp"] = $evalues["xp"];
	$data["xp_next"] = $evalues["xp_next"];
	$data["id_gilda"] = $evalues["id_gilda"];
}

/////////////////////////////////////////////////////////////
//	assign values to $xt class, prepare page for displaying
/////////////////////////////////////////////////////////////
//Basic includes js files
$includes = "";
//javascript code
	
if($inlineedit != EDIT_INLINE)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		$includes.= "<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		
		if (!isMobile())
			$includes.= "<div id=\"search_suggest".$id."\"></div>\r\n";
			
		$pageObject->body["begin"].= $includes;
	}	

	if(!$pageObject->isAppearOnTabs("id_utente"))
		$xt->assign("id_utente_fieldblock",true);
	else
		$xt->assign("id_utente_tabfieldblock",true);
	$xt->assign("id_utente_label",true);
	if(isEnableSection508())
		$xt->assign_section("id_utente_label","<label for=\"".GetInputElementId("id_utente", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("id_posto"))
		$xt->assign("id_posto_fieldblock",true);
	else
		$xt->assign("id_posto_tabfieldblock",true);
	$xt->assign("id_posto_label",true);
	if(isEnableSection508())
		$xt->assign_section("id_posto_label","<label for=\"".GetInputElementId("id_posto", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("nome"))
		$xt->assign("nome_fieldblock",true);
	else
		$xt->assign("nome_tabfieldblock",true);
	$xt->assign("nome_label",true);
	if(isEnableSection508())
		$xt->assign_section("nome_label","<label for=\"".GetInputElementId("nome", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("status"))
		$xt->assign("status_fieldblock",true);
	else
		$xt->assign("status_tabfieldblock",true);
	$xt->assign("status_label",true);
	if(isEnableSection508())
		$xt->assign_section("status_label","<label for=\"".GetInputElementId("status", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("att"))
		$xt->assign("att_fieldblock",true);
	else
		$xt->assign("att_tabfieldblock",true);
	$xt->assign("att_label",true);
	if(isEnableSection508())
		$xt->assign_section("att_label","<label for=\"".GetInputElementId("att", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("def"))
		$xt->assign("def_fieldblock",true);
	else
		$xt->assign("def_tabfieldblock",true);
	$xt->assign("def_label",true);
	if(isEnableSection508())
		$xt->assign_section("def_label","<label for=\"".GetInputElementId("def", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("cha"))
		$xt->assign("cha_fieldblock",true);
	else
		$xt->assign("cha_tabfieldblock",true);
	$xt->assign("cha_label",true);
	if(isEnableSection508())
		$xt->assign_section("cha_label","<label for=\"".GetInputElementId("cha", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("mov"))
		$xt->assign("mov_fieldblock",true);
	else
		$xt->assign("mov_tabfieldblock",true);
	$xt->assign("mov_label",true);
	if(isEnableSection508())
		$xt->assign_section("mov_label","<label for=\"".GetInputElementId("mov", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("mov_rimanenti"))
		$xt->assign("mov_rimanenti_fieldblock",true);
	else
		$xt->assign("mov_rimanenti_tabfieldblock",true);
	$xt->assign("mov_rimanenti_label",true);
	if(isEnableSection508())
		$xt->assign_section("mov_rimanenti_label","<label for=\"".GetInputElementId("mov_rimanenti", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("mov_last_reset_time"))
		$xt->assign("mov_last_reset_time_fieldblock",true);
	else
		$xt->assign("mov_last_reset_time_tabfieldblock",true);
	$xt->assign("mov_last_reset_time_label",true);
	if(isEnableSection508())
		$xt->assign_section("mov_last_reset_time_label","<label for=\"".GetInputElementId("mov_last_reset_time", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("pf"))
		$xt->assign("pf_fieldblock",true);
	else
		$xt->assign("pf_tabfieldblock",true);
	$xt->assign("pf_label",true);
	if(isEnableSection508())
		$xt->assign_section("pf_label","<label for=\"".GetInputElementId("pf", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("pf_rimanenti"))
		$xt->assign("pf_rimanenti_fieldblock",true);
	else
		$xt->assign("pf_rimanenti_tabfieldblock",true);
	$xt->assign("pf_rimanenti_label",true);
	if(isEnableSection508())
		$xt->assign_section("pf_rimanenti_label","<label for=\"".GetInputElementId("pf_rimanenti", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("pf_last_reset_time"))
		$xt->assign("pf_last_reset_time_fieldblock",true);
	else
		$xt->assign("pf_last_reset_time_tabfieldblock",true);
	$xt->assign("pf_last_reset_time_label",true);
	if(isEnableSection508())
		$xt->assign_section("pf_last_reset_time_label","<label for=\"".GetInputElementId("pf_last_reset_time", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("lev"))
		$xt->assign("lev_fieldblock",true);
	else
		$xt->assign("lev_tabfieldblock",true);
	$xt->assign("lev_label",true);
	if(isEnableSection508())
		$xt->assign_section("lev_label","<label for=\"".GetInputElementId("lev", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("xp"))
		$xt->assign("xp_fieldblock",true);
	else
		$xt->assign("xp_tabfieldblock",true);
	$xt->assign("xp_label",true);
	if(isEnableSection508())
		$xt->assign_section("xp_label","<label for=\"".GetInputElementId("xp", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("xp_next"))
		$xt->assign("xp_next_fieldblock",true);
	else
		$xt->assign("xp_next_tabfieldblock",true);
	$xt->assign("xp_next_label",true);
	if(isEnableSection508())
		$xt->assign_section("xp_next_label","<label for=\"".GetInputElementId("xp_next", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("id_gilda"))
		$xt->assign("id_gilda_fieldblock",true);
	else
		$xt->assign("id_gilda_tabfieldblock",true);
	$xt->assign("id_gilda_label",true);
	if(isEnableSection508())
		$xt->assign_section("id_gilda_label","<label for=\"".GetInputElementId("id_gilda", $id, PAGE_EDIT)."\">","</label>");
		

	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("id", $data)));
	//$xt->assign('editForm',true);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if(!@$_SESSION[$strTableName."_noNextPrev"] && $inlineedit == EDIT_SIMPLE)
	{
		$next = array();
		$prev = array();
		$pageObject->getNextPrevRecordKeys($data,"Edit",$next,$prev);
	}
	$nextlink = $prevlink = "";
	if(count($next))
	{
		$xt->assign("next_button",true);
				$nextlink.= "editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
				$prevlink.= "editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("prev_button",false);
	$xt->assign("resetbutton_attrs",'id="resetButton'.$id.'"');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//End Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if($inlineedit == EDIT_SIMPLE)
	{
		$xt->assign("back_button",true);
		$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	}
	// onmouseover event, for changing focus. Needed to proper submit form
	//$onmouseover = "this.focus();";
	//$onmouseover = 'onmouseover="'.$onmouseover.'"';
	
	$xt->assign("save_button",true);
	if(!$enableCtrlsForEditing)
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\" type=\"disabled\" ");
	else
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\"");
		
	$xt->assign("reset_button",true);

}

$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}
/////////////////////////////////////////////////////////////
//process readonly and auto-update fields
/////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////
//	validation stuff
$regex = '';
$regexmessage = '';
$regextype = '';
$control = array();

foreach($pageObject->editFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if (!$detailKeys || !in_array($fName, $detailKeys))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"]="xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_EDIT;
		$control[$gfName]["params"]["field"] = $fName;
		if(!IsNumberType($pageObject->pSet->getFieldType($fName)) || is_null(@$data[$fName]))
			$control[$gfName]["params"]["value"] = @$data[$fName];
		else
		{
			$control[$gfName]["params"]["value"] = str_replace(".",$locale_info["LOCALE_SDECIMAL"],@$data[$fName]);
		}
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation	
		$additionalCtrlParams = array();
		$additionalCtrlParams["disabled"] = !$enableCtrlsForEditing;
		$control[$gfName]["params"]["additionalCtrlParams"] = $additionalCtrlParams;
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	
	if($inlineedit == EDIT_INLINE)
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="inline_edit";
		$controls["controls"]['mode'] = "inline_edit";
	}
	else{
			if (!$detailKeys || !in_array($fName, $detailKeys))
				$control[$gfName]["params"]["mode"] = "edit";
			$controls["controls"]['mode'] = "edit";
		}
																		
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$data[$fName];
		
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $pageObject->editFields))
		$vals = array($fName => @$data[$fName],$strCategoryControl => @$data[$strCategoryControl]);
	else
		$vals = array($fName => @$data[$fName]);
		
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;
	
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, $data[$fName]);
	
	if($pageObject->pSet->getViewFormat($fName) == FORMAT_MAP)	
		$pageObject->googleMapCfg['isUseGoogleMap'] = true;
		
	if($detailKeys && in_array($fName, $detailKeys) && array_key_exists($fName, $data))
	{
		$value = $pageObject->showDBValue($fName, $data);
		
		$xt->assign($gfName."_editcontrol",$value);
	}
}
//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
if($pageObject->lockingObj)
{
	$pageObject->jsSettings['tableSettings'][$strTableName]["sKeys"] = $skeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]["enableCtrls"] = $enableCtrlsForEditing;
	$pageObject->jsSettings['tableSettings'][$strTableName]["confirmTime"] = $pageObject->lockingObj->ConfirmTime;
}

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && $inlineedit!=EDIT_INLINE && !isMobile())
{
	if(count($dpParams['ids']))
	{
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		$xt->assign("detail_tables",true);	
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
		$options["masterPageType"] = PAGE_EDIT;
		$options["mainMasterPageType"] = PAGE_EDIT;
		$options['masterTable'] = "pg_personaggi";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
			$strTableName = "pg_personaggi";
			continue;
		}
		
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
		$masterKeys = array();
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk){
			$options['masterKeysReq'][$mkr] = $data[$mk];
			$masterKeys['masterKey'.$mkr] = $data[$mk];
			$mkr++;
		}
		
		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->isDispGrid())
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			
			foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
				$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
			}
			
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dControlsMap[$strTableName]['masterKeys'] = $masterKeys;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
			
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
			
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
		$flyId = $listPageObject->recId+1;
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "pg_personaggi";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->flyId = $flyId;
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineedit == EDIT_SIMPLE)
{
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineedit == EDIT_POPUP){
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);
}

$xt->assign("style_block",true);

$pageObject->xt->assign("legend", true);

$viewlink = "";
$viewkeys = array();
	$viewkeys["editid1"] = postvalue("editid1");
foreach($viewkeys as $key => $val)
{
	if($viewlink)
		$viewlink.="&";
	$viewlink.=$key."=".$val;
}
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton".$id."\" onclick=\"window.location.href='pg_personaggi_view.php?".$viewlink."'\"");
if(CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && $inlineedit == EDIT_SIMPLE)
	$xt->assign("view_button",true);
else
	$xt->assign("view_button",false);

/////////////////////////////////////////////////////////////
//display the page
/////////////////////////////////////////////////////////////
if($eventObj->exists("BeforeShowEdit"))
	$eventObj->BeforeShowEdit($xt,$templatefile,$data, $pageObject);

if($inlineedit != EDIT_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}
	
if($inlineedit == EDIT_POPUP || $inlineedit == EDIT_INLINE)
{
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($data, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
}
if($inlineedit == EDIT_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $flyId + 1;
	echo (my_json_encode($returnJSON)); 
}
elseif($inlineedit == EDIT_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($pageObject->editFields as $fName)
	{
		if($detailKeys && in_array($fName, $detailKeys))
			continue;
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");
	}
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);
	
function SecurityRedirect($inlineedit)
{
	if($inlineedit == EDIT_INLINE)
	{
		echo my_json_encode(array("success" => false, "message" => "The record is not editable"));
		return;
	}
	
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: menu.php?message=expired");	
}
?>
