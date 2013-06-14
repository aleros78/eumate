<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapg_personaggi = array();
	$tdatapg_personaggi[".NumberOfChars"] = 80; 
	$tdatapg_personaggi[".ShortName"] = "pg_personaggi";
	$tdatapg_personaggi[".OwnerID"] = "";
	$tdatapg_personaggi[".OriginalTable"] = "pg_personaggi";

//	field labels
$fieldLabelspg_personaggi = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspg_personaggi["English"] = array();
	$fieldToolTipspg_personaggi["English"] = array();
	$fieldLabelspg_personaggi["English"]["id"] = "Id";
	$fieldToolTipspg_personaggi["English"]["id"] = "";
	$fieldLabelspg_personaggi["English"]["id_utente"] = "Id Utente";
	$fieldToolTipspg_personaggi["English"]["id_utente"] = "";
	$fieldLabelspg_personaggi["English"]["id_posto"] = "Id Posto";
	$fieldToolTipspg_personaggi["English"]["id_posto"] = "";
	$fieldLabelspg_personaggi["English"]["nome"] = "Nome";
	$fieldToolTipspg_personaggi["English"]["nome"] = "";
	$fieldLabelspg_personaggi["English"]["status"] = "Status";
	$fieldToolTipspg_personaggi["English"]["status"] = "";
	$fieldLabelspg_personaggi["English"]["att"] = "Att";
	$fieldToolTipspg_personaggi["English"]["att"] = "";
	$fieldLabelspg_personaggi["English"]["def"] = "Def";
	$fieldToolTipspg_personaggi["English"]["def"] = "";
	$fieldLabelspg_personaggi["English"]["cha"] = "Cha";
	$fieldToolTipspg_personaggi["English"]["cha"] = "";
	$fieldLabelspg_personaggi["English"]["mov"] = "Mov";
	$fieldToolTipspg_personaggi["English"]["mov"] = "";
	$fieldLabelspg_personaggi["English"]["mov_rimanenti"] = "Mov Rimanenti";
	$fieldToolTipspg_personaggi["English"]["mov_rimanenti"] = "";
	$fieldLabelspg_personaggi["English"]["mov_last_reset_time"] = "Mov Last Reset Time";
	$fieldToolTipspg_personaggi["English"]["mov_last_reset_time"] = "";
	$fieldLabelspg_personaggi["English"]["pf"] = "Pf";
	$fieldToolTipspg_personaggi["English"]["pf"] = "";
	$fieldLabelspg_personaggi["English"]["pf_rimanenti"] = "Pf Rimanenti";
	$fieldToolTipspg_personaggi["English"]["pf_rimanenti"] = "";
	$fieldLabelspg_personaggi["English"]["pf_last_reset_time"] = "Pf Last Reset Time";
	$fieldToolTipspg_personaggi["English"]["pf_last_reset_time"] = "";
	$fieldLabelspg_personaggi["English"]["lev"] = "Lev";
	$fieldToolTipspg_personaggi["English"]["lev"] = "";
	$fieldLabelspg_personaggi["English"]["xp"] = "Xp";
	$fieldToolTipspg_personaggi["English"]["xp"] = "";
	$fieldLabelspg_personaggi["English"]["xp_next"] = "Xp Next";
	$fieldToolTipspg_personaggi["English"]["xp_next"] = "";
	$fieldLabelspg_personaggi["English"]["id_gilda"] = "Id Gilda";
	$fieldToolTipspg_personaggi["English"]["id_gilda"] = "";
	if (count($fieldToolTipspg_personaggi["English"]))
		$tdatapg_personaggi[".isUseToolTips"] = true;
}
	
	
	$tdatapg_personaggi[".NCSearch"] = true;



$tdatapg_personaggi[".shortTableName"] = "pg_personaggi";
$tdatapg_personaggi[".nSecOptions"] = 0;
$tdatapg_personaggi[".recsPerRowList"] = 1;
$tdatapg_personaggi[".mainTableOwnerID"] = "";
$tdatapg_personaggi[".moveNext"] = 1;
$tdatapg_personaggi[".nType"] = 0;

$tdatapg_personaggi[".strOriginalTableName"] = "pg_personaggi";




$tdatapg_personaggi[".showAddInPopup"] = false;

$tdatapg_personaggi[".showEditInPopup"] = false;

$tdatapg_personaggi[".showViewInPopup"] = false;

$tdatapg_personaggi[".fieldsForRegister"] = array();

$tdatapg_personaggi[".listAjax"] = false;

	$tdatapg_personaggi[".audit"] = false;

	$tdatapg_personaggi[".locking"] = false;

$tdatapg_personaggi[".listIcons"] = true;
$tdatapg_personaggi[".edit"] = true;
$tdatapg_personaggi[".inlineEdit"] = true;
$tdatapg_personaggi[".inlineAdd"] = true;
$tdatapg_personaggi[".view"] = true;

$tdatapg_personaggi[".exportTo"] = true;

$tdatapg_personaggi[".printFriendly"] = true;

$tdatapg_personaggi[".delete"] = true;

$tdatapg_personaggi[".showSimpleSearchOptions"] = false;

$tdatapg_personaggi[".showSearchPanel"] = true;

if (isMobile())
	$tdatapg_personaggi[".isUseAjaxSuggest"] = false;
else 
	$tdatapg_personaggi[".isUseAjaxSuggest"] = true;

$tdatapg_personaggi[".rowHighlite"] = true;

// button handlers file names

$tdatapg_personaggi[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapg_personaggi[".isUseTimeForSearch"] = false;



$tdatapg_personaggi[".useDetailsPreview"] = true;

$tdatapg_personaggi[".allSearchFields"] = array();

$tdatapg_personaggi[".allSearchFields"][] = "id";
$tdatapg_personaggi[".allSearchFields"][] = "id_utente";
$tdatapg_personaggi[".allSearchFields"][] = "id_posto";
$tdatapg_personaggi[".allSearchFields"][] = "nome";
$tdatapg_personaggi[".allSearchFields"][] = "status";
$tdatapg_personaggi[".allSearchFields"][] = "att";
$tdatapg_personaggi[".allSearchFields"][] = "def";
$tdatapg_personaggi[".allSearchFields"][] = "cha";
$tdatapg_personaggi[".allSearchFields"][] = "mov";
$tdatapg_personaggi[".allSearchFields"][] = "mov_rimanenti";
$tdatapg_personaggi[".allSearchFields"][] = "mov_last_reset_time";
$tdatapg_personaggi[".allSearchFields"][] = "pf";
$tdatapg_personaggi[".allSearchFields"][] = "pf_rimanenti";
$tdatapg_personaggi[".allSearchFields"][] = "pf_last_reset_time";
$tdatapg_personaggi[".allSearchFields"][] = "lev";
$tdatapg_personaggi[".allSearchFields"][] = "xp";
$tdatapg_personaggi[".allSearchFields"][] = "xp_next";
$tdatapg_personaggi[".allSearchFields"][] = "id_gilda";

$tdatapg_personaggi[".googleLikeFields"][] = "id";
$tdatapg_personaggi[".googleLikeFields"][] = "id_utente";
$tdatapg_personaggi[".googleLikeFields"][] = "id_posto";
$tdatapg_personaggi[".googleLikeFields"][] = "nome";
$tdatapg_personaggi[".googleLikeFields"][] = "status";
$tdatapg_personaggi[".googleLikeFields"][] = "att";
$tdatapg_personaggi[".googleLikeFields"][] = "def";
$tdatapg_personaggi[".googleLikeFields"][] = "cha";
$tdatapg_personaggi[".googleLikeFields"][] = "mov";
$tdatapg_personaggi[".googleLikeFields"][] = "mov_rimanenti";
$tdatapg_personaggi[".googleLikeFields"][] = "mov_last_reset_time";
$tdatapg_personaggi[".googleLikeFields"][] = "pf";
$tdatapg_personaggi[".googleLikeFields"][] = "pf_rimanenti";
$tdatapg_personaggi[".googleLikeFields"][] = "pf_last_reset_time";
$tdatapg_personaggi[".googleLikeFields"][] = "lev";
$tdatapg_personaggi[".googleLikeFields"][] = "xp";
$tdatapg_personaggi[".googleLikeFields"][] = "xp_next";
$tdatapg_personaggi[".googleLikeFields"][] = "id_gilda";


$tdatapg_personaggi[".advSearchFields"][] = "id";
$tdatapg_personaggi[".advSearchFields"][] = "id_utente";
$tdatapg_personaggi[".advSearchFields"][] = "id_posto";
$tdatapg_personaggi[".advSearchFields"][] = "nome";
$tdatapg_personaggi[".advSearchFields"][] = "status";
$tdatapg_personaggi[".advSearchFields"][] = "att";
$tdatapg_personaggi[".advSearchFields"][] = "def";
$tdatapg_personaggi[".advSearchFields"][] = "cha";
$tdatapg_personaggi[".advSearchFields"][] = "mov";
$tdatapg_personaggi[".advSearchFields"][] = "mov_rimanenti";
$tdatapg_personaggi[".advSearchFields"][] = "mov_last_reset_time";
$tdatapg_personaggi[".advSearchFields"][] = "pf";
$tdatapg_personaggi[".advSearchFields"][] = "pf_rimanenti";
$tdatapg_personaggi[".advSearchFields"][] = "pf_last_reset_time";
$tdatapg_personaggi[".advSearchFields"][] = "lev";
$tdatapg_personaggi[".advSearchFields"][] = "xp";
$tdatapg_personaggi[".advSearchFields"][] = "xp_next";
$tdatapg_personaggi[".advSearchFields"][] = "id_gilda";

$tdatapg_personaggi[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
		


$tdatapg_personaggi[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapg_personaggi[".strOrderBy"] = $tstrOrderBy;

$tdatapg_personaggi[".orderindexes"] = array();

$tdatapg_personaggi[".sqlHead"] = "SELECT id,   id_utente,   id_posto,   nome,   status,   att,   def,   cha,   mov,   mov_rimanenti,   mov_last_reset_time,   pf,   pf_rimanenti,   pf_last_reset_time,   lev,   xp,   xp_next,   id_gilda";
$tdatapg_personaggi[".sqlFrom"] = "FROM pg_personaggi";
$tdatapg_personaggi[".sqlWhereExpr"] = "";
$tdatapg_personaggi[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapg_personaggi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapg_personaggi[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspg_personaggi = array();
$tableKeyspg_personaggi[] = "id";
$tdatapg_personaggi[".Keys"] = $tableKeyspg_personaggi;

$tdatapg_personaggi[".listFields"] = array();
$tdatapg_personaggi[".listFields"][] = "id";
$tdatapg_personaggi[".listFields"][] = "id_utente";
$tdatapg_personaggi[".listFields"][] = "id_posto";
$tdatapg_personaggi[".listFields"][] = "nome";
$tdatapg_personaggi[".listFields"][] = "status";
$tdatapg_personaggi[".listFields"][] = "att";
$tdatapg_personaggi[".listFields"][] = "def";
$tdatapg_personaggi[".listFields"][] = "cha";
$tdatapg_personaggi[".listFields"][] = "mov";
$tdatapg_personaggi[".listFields"][] = "mov_rimanenti";
$tdatapg_personaggi[".listFields"][] = "mov_last_reset_time";
$tdatapg_personaggi[".listFields"][] = "pf";
$tdatapg_personaggi[".listFields"][] = "pf_rimanenti";
$tdatapg_personaggi[".listFields"][] = "pf_last_reset_time";
$tdatapg_personaggi[".listFields"][] = "lev";
$tdatapg_personaggi[".listFields"][] = "xp";
$tdatapg_personaggi[".listFields"][] = "xp_next";
$tdatapg_personaggi[".listFields"][] = "id_gilda";

$tdatapg_personaggi[".viewFields"] = array();
$tdatapg_personaggi[".viewFields"][] = "id";
$tdatapg_personaggi[".viewFields"][] = "id_utente";
$tdatapg_personaggi[".viewFields"][] = "id_posto";
$tdatapg_personaggi[".viewFields"][] = "nome";
$tdatapg_personaggi[".viewFields"][] = "status";
$tdatapg_personaggi[".viewFields"][] = "att";
$tdatapg_personaggi[".viewFields"][] = "def";
$tdatapg_personaggi[".viewFields"][] = "cha";
$tdatapg_personaggi[".viewFields"][] = "mov";
$tdatapg_personaggi[".viewFields"][] = "mov_rimanenti";
$tdatapg_personaggi[".viewFields"][] = "mov_last_reset_time";
$tdatapg_personaggi[".viewFields"][] = "pf";
$tdatapg_personaggi[".viewFields"][] = "pf_rimanenti";
$tdatapg_personaggi[".viewFields"][] = "pf_last_reset_time";
$tdatapg_personaggi[".viewFields"][] = "lev";
$tdatapg_personaggi[".viewFields"][] = "xp";
$tdatapg_personaggi[".viewFields"][] = "xp_next";
$tdatapg_personaggi[".viewFields"][] = "id_gilda";

$tdatapg_personaggi[".addFields"] = array();
$tdatapg_personaggi[".addFields"][] = "id_utente";
$tdatapg_personaggi[".addFields"][] = "id_posto";
$tdatapg_personaggi[".addFields"][] = "nome";
$tdatapg_personaggi[".addFields"][] = "status";
$tdatapg_personaggi[".addFields"][] = "att";
$tdatapg_personaggi[".addFields"][] = "def";
$tdatapg_personaggi[".addFields"][] = "cha";
$tdatapg_personaggi[".addFields"][] = "mov";
$tdatapg_personaggi[".addFields"][] = "mov_rimanenti";
$tdatapg_personaggi[".addFields"][] = "mov_last_reset_time";
$tdatapg_personaggi[".addFields"][] = "pf";
$tdatapg_personaggi[".addFields"][] = "pf_rimanenti";
$tdatapg_personaggi[".addFields"][] = "pf_last_reset_time";
$tdatapg_personaggi[".addFields"][] = "lev";
$tdatapg_personaggi[".addFields"][] = "xp";
$tdatapg_personaggi[".addFields"][] = "xp_next";
$tdatapg_personaggi[".addFields"][] = "id_gilda";

$tdatapg_personaggi[".inlineAddFields"] = array();
$tdatapg_personaggi[".inlineAddFields"][] = "id_utente";
$tdatapg_personaggi[".inlineAddFields"][] = "id_posto";
$tdatapg_personaggi[".inlineAddFields"][] = "nome";
$tdatapg_personaggi[".inlineAddFields"][] = "status";
$tdatapg_personaggi[".inlineAddFields"][] = "att";
$tdatapg_personaggi[".inlineAddFields"][] = "def";
$tdatapg_personaggi[".inlineAddFields"][] = "cha";
$tdatapg_personaggi[".inlineAddFields"][] = "mov";
$tdatapg_personaggi[".inlineAddFields"][] = "mov_rimanenti";
$tdatapg_personaggi[".inlineAddFields"][] = "mov_last_reset_time";
$tdatapg_personaggi[".inlineAddFields"][] = "pf";
$tdatapg_personaggi[".inlineAddFields"][] = "pf_rimanenti";
$tdatapg_personaggi[".inlineAddFields"][] = "pf_last_reset_time";
$tdatapg_personaggi[".inlineAddFields"][] = "lev";
$tdatapg_personaggi[".inlineAddFields"][] = "xp";
$tdatapg_personaggi[".inlineAddFields"][] = "xp_next";
$tdatapg_personaggi[".inlineAddFields"][] = "id_gilda";

$tdatapg_personaggi[".editFields"] = array();
$tdatapg_personaggi[".editFields"][] = "id_utente";
$tdatapg_personaggi[".editFields"][] = "id_posto";
$tdatapg_personaggi[".editFields"][] = "nome";
$tdatapg_personaggi[".editFields"][] = "status";
$tdatapg_personaggi[".editFields"][] = "att";
$tdatapg_personaggi[".editFields"][] = "def";
$tdatapg_personaggi[".editFields"][] = "cha";
$tdatapg_personaggi[".editFields"][] = "mov";
$tdatapg_personaggi[".editFields"][] = "mov_rimanenti";
$tdatapg_personaggi[".editFields"][] = "mov_last_reset_time";
$tdatapg_personaggi[".editFields"][] = "pf";
$tdatapg_personaggi[".editFields"][] = "pf_rimanenti";
$tdatapg_personaggi[".editFields"][] = "pf_last_reset_time";
$tdatapg_personaggi[".editFields"][] = "lev";
$tdatapg_personaggi[".editFields"][] = "xp";
$tdatapg_personaggi[".editFields"][] = "xp_next";
$tdatapg_personaggi[".editFields"][] = "id_gilda";

$tdatapg_personaggi[".inlineEditFields"] = array();
$tdatapg_personaggi[".inlineEditFields"][] = "id_utente";
$tdatapg_personaggi[".inlineEditFields"][] = "id_posto";
$tdatapg_personaggi[".inlineEditFields"][] = "nome";
$tdatapg_personaggi[".inlineEditFields"][] = "status";
$tdatapg_personaggi[".inlineEditFields"][] = "att";
$tdatapg_personaggi[".inlineEditFields"][] = "def";
$tdatapg_personaggi[".inlineEditFields"][] = "cha";
$tdatapg_personaggi[".inlineEditFields"][] = "mov";
$tdatapg_personaggi[".inlineEditFields"][] = "mov_rimanenti";
$tdatapg_personaggi[".inlineEditFields"][] = "mov_last_reset_time";
$tdatapg_personaggi[".inlineEditFields"][] = "pf";
$tdatapg_personaggi[".inlineEditFields"][] = "pf_rimanenti";
$tdatapg_personaggi[".inlineEditFields"][] = "pf_last_reset_time";
$tdatapg_personaggi[".inlineEditFields"][] = "lev";
$tdatapg_personaggi[".inlineEditFields"][] = "xp";
$tdatapg_personaggi[".inlineEditFields"][] = "xp_next";
$tdatapg_personaggi[".inlineEditFields"][] = "id_gilda";

$tdatapg_personaggi[".exportFields"] = array();
$tdatapg_personaggi[".exportFields"][] = "id";
$tdatapg_personaggi[".exportFields"][] = "id_utente";
$tdatapg_personaggi[".exportFields"][] = "id_posto";
$tdatapg_personaggi[".exportFields"][] = "nome";
$tdatapg_personaggi[".exportFields"][] = "status";
$tdatapg_personaggi[".exportFields"][] = "att";
$tdatapg_personaggi[".exportFields"][] = "def";
$tdatapg_personaggi[".exportFields"][] = "cha";
$tdatapg_personaggi[".exportFields"][] = "mov";
$tdatapg_personaggi[".exportFields"][] = "mov_rimanenti";
$tdatapg_personaggi[".exportFields"][] = "mov_last_reset_time";
$tdatapg_personaggi[".exportFields"][] = "pf";
$tdatapg_personaggi[".exportFields"][] = "pf_rimanenti";
$tdatapg_personaggi[".exportFields"][] = "pf_last_reset_time";
$tdatapg_personaggi[".exportFields"][] = "lev";
$tdatapg_personaggi[".exportFields"][] = "xp";
$tdatapg_personaggi[".exportFields"][] = "xp_next";
$tdatapg_personaggi[".exportFields"][] = "id_gilda";

$tdatapg_personaggi[".printFields"] = array();
$tdatapg_personaggi[".printFields"][] = "id";
$tdatapg_personaggi[".printFields"][] = "id_utente";
$tdatapg_personaggi[".printFields"][] = "id_posto";
$tdatapg_personaggi[".printFields"][] = "nome";
$tdatapg_personaggi[".printFields"][] = "status";
$tdatapg_personaggi[".printFields"][] = "att";
$tdatapg_personaggi[".printFields"][] = "def";
$tdatapg_personaggi[".printFields"][] = "cha";
$tdatapg_personaggi[".printFields"][] = "mov";
$tdatapg_personaggi[".printFields"][] = "mov_rimanenti";
$tdatapg_personaggi[".printFields"][] = "mov_last_reset_time";
$tdatapg_personaggi[".printFields"][] = "pf";
$tdatapg_personaggi[".printFields"][] = "pf_rimanenti";
$tdatapg_personaggi[".printFields"][] = "pf_last_reset_time";
$tdatapg_personaggi[".printFields"][] = "lev";
$tdatapg_personaggi[".printFields"][] = "xp";
$tdatapg_personaggi[".printFields"][] = "xp_next";
$tdatapg_personaggi[".printFields"][] = "id_gilda";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["id"] = $fdata;
//	id_utente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_utente";
	$fdata["GoodName"] = "id_utente";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Id Utente"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_utente"; 
		$fdata["FullName"] = "id_utente";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "email";
	
		
	$edata["LookupTable"] = "ge_utenti";
	$edata["LookupOrderBy"] = "email";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["id_utente"] = $fdata;
//	id_posto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_posto";
	$fdata["GoodName"] = "id_posto";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Id Posto"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_posto"; 
		$fdata["FullName"] = "id_posto";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "posto";
	
		
	$edata["LookupTable"] = "pl_posti";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["id_posto"] = $fdata;
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Nome"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nome"; 
		$fdata["FullName"] = "nome";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["nome"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "status"; 
		$fdata["FullName"] = "status";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["status"] = $fdata;
//	att
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "att";
	$fdata["GoodName"] = "att";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Att"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "att"; 
		$fdata["FullName"] = "att";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["att"] = $fdata;
//	def
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "def";
	$fdata["GoodName"] = "def";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Def"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "def"; 
		$fdata["FullName"] = "def";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["def"] = $fdata;
//	cha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cha";
	$fdata["GoodName"] = "cha";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Cha"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cha"; 
		$fdata["FullName"] = "cha";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["cha"] = $fdata;
//	mov
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "mov";
	$fdata["GoodName"] = "mov";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Mov"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "mov"; 
		$fdata["FullName"] = "mov";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["mov"] = $fdata;
//	mov_rimanenti
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "mov_rimanenti";
	$fdata["GoodName"] = "mov_rimanenti";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Mov Rimanenti"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "mov_rimanenti"; 
		$fdata["FullName"] = "mov_rimanenti";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["mov_rimanenti"] = $fdata;
//	mov_last_reset_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "mov_last_reset_time";
	$fdata["GoodName"] = "mov_last_reset_time";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Mov Last Reset Time"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "mov_last_reset_time"; 
		$fdata["FullName"] = "mov_last_reset_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["mov_last_reset_time"] = $fdata;
//	pf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "pf";
	$fdata["GoodName"] = "pf";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Pf"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pf"; 
		$fdata["FullName"] = "pf";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["pf"] = $fdata;
//	pf_rimanenti
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "pf_rimanenti";
	$fdata["GoodName"] = "pf_rimanenti";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Pf Rimanenti"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pf_rimanenti"; 
		$fdata["FullName"] = "pf_rimanenti";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["pf_rimanenti"] = $fdata;
//	pf_last_reset_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pf_last_reset_time";
	$fdata["GoodName"] = "pf_last_reset_time";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Pf Last Reset Time"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pf_last_reset_time"; 
		$fdata["FullName"] = "pf_last_reset_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["pf_last_reset_time"] = $fdata;
//	lev
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "lev";
	$fdata["GoodName"] = "lev";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Lev"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "lev"; 
		$fdata["FullName"] = "lev";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["lev"] = $fdata;
//	xp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "xp";
	$fdata["GoodName"] = "xp";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Xp"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "xp"; 
		$fdata["FullName"] = "xp";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["xp"] = $fdata;
//	xp_next
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "xp_next";
	$fdata["GoodName"] = "xp_next";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Xp Next"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "xp_next"; 
		$fdata["FullName"] = "xp_next";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["xp_next"] = $fdata;
//	id_gilda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "id_gilda";
	$fdata["GoodName"] = "id_gilda";
	$fdata["ownerTable"] = "pg_personaggi";
	$fdata["Label"] = "Id Gilda"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_gilda"; 
		$fdata["FullName"] = "id_gilda";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nome";
	
		
	$edata["LookupTable"] = "pg_gilde";
	$edata["LookupOrderBy"] = "nome";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_personaggi["id_gilda"] = $fdata;

	
$tables_data["pg_personaggi"]=&$tdatapg_personaggi;
$field_labels["pg_personaggi"] = &$fieldLabelspg_personaggi;
$fieldToolTips["pg_personaggi"] = &$fieldToolTipspg_personaggi;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pg_personaggi"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="ge_messaggi";
	$detailsParam["dDataSourceTable"]="ge_messaggi";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="ge_messaggi";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["pg_personaggi"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pg_personaggi"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["pg_personaggi"][$dIndex]["detailKeys"][]="id_personaggio";

$dIndex = 2-1;
			$strOriginalDetailsTable="pg_mail";
	$detailsParam["dDataSourceTable"]="pg_mail";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="pg_mail";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["pg_personaggi"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pg_personaggi"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["pg_personaggi"][$dIndex]["detailKeys"][]="invia";

	
// tables which are master tables for current table (detail)
$masterTablesData["pg_personaggi"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="pg_gilde";
	$masterParams["mDataSourceTable"]="pg_gilde";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pg_gilde";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["pg_personaggi"][$mIndex] = $masterParams;	
		$masterTablesData["pg_personaggi"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["pg_personaggi"][$mIndex]["detailKeys"][]="id_gilda";

$mIndex = 2-1;
			$strOriginalDetailsTable="ge_utenti";
	$masterParams["mDataSourceTable"]="ge_utenti";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ge_utenti";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["pg_personaggi"][$mIndex] = $masterParams;	
		$masterTablesData["pg_personaggi"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["pg_personaggi"][$mIndex]["detailKeys"][]="id_utente";

$mIndex = 3-1;
			$strOriginalDetailsTable="pl_posti";
	$masterParams["mDataSourceTable"]="pl_posti";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pl_posti";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["pg_personaggi"][$mIndex] = $masterParams;	
		$masterTablesData["pg_personaggi"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["pg_personaggi"][$mIndex]["detailKeys"][]="id_posto";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pg_personaggi()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   id_utente,   id_posto,   nome,   status,   att,   def,   cha,   mov,   mov_rimanenti,   mov_last_reset_time,   pf,   pf_rimanenti,   pf_last_reset_time,   lev,   xp,   xp_next,   id_gilda";
$proto0["m_strFrom"] = "FROM pg_personaggi";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "pg_personaggi"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_utente",
	"m_strTable" => "pg_personaggi"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id_posto",
	"m_strTable" => "pg_personaggi"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "pg_personaggi"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "pg_personaggi"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "att",
	"m_strTable" => "pg_personaggi"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "def",
	"m_strTable" => "pg_personaggi"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "cha",
	"m_strTable" => "pg_personaggi"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "mov",
	"m_strTable" => "pg_personaggi"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "mov_rimanenti",
	"m_strTable" => "pg_personaggi"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "mov_last_reset_time",
	"m_strTable" => "pg_personaggi"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "pf",
	"m_strTable" => "pg_personaggi"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "pf_rimanenti",
	"m_strTable" => "pg_personaggi"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "pf_last_reset_time",
	"m_strTable" => "pg_personaggi"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "lev",
	"m_strTable" => "pg_personaggi"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "xp",
	"m_strTable" => "pg_personaggi"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "xp_next",
	"m_strTable" => "pg_personaggi"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "id_gilda",
	"m_strTable" => "pg_personaggi"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "pg_personaggi";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "id";
$proto42["m_columns"][] = "id_utente";
$proto42["m_columns"][] = "id_posto";
$proto42["m_columns"][] = "nome";
$proto42["m_columns"][] = "status";
$proto42["m_columns"][] = "att";
$proto42["m_columns"][] = "def";
$proto42["m_columns"][] = "cha";
$proto42["m_columns"][] = "mov";
$proto42["m_columns"][] = "mov_rimanenti";
$proto42["m_columns"][] = "mov_last_reset_time";
$proto42["m_columns"][] = "pf";
$proto42["m_columns"][] = "pf_rimanenti";
$proto42["m_columns"][] = "pf_last_reset_time";
$proto42["m_columns"][] = "lev";
$proto42["m_columns"][] = "xp";
$proto42["m_columns"][] = "xp_next";
$proto42["m_columns"][] = "id_gilda";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_alias"] = "";
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = "0";
$proto43["m_inBrackets"] = "0";
$proto43["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pg_personaggi = createSqlQuery_pg_personaggi();
																		$tdatapg_personaggi[".sqlquery"] = $queryData_pg_personaggi;

$tableEvents["pg_personaggi"] = new eventsBase;
$tdatapg_personaggi[".hasEvents"] = false;

$cipherer = new RunnerCipherer("pg_personaggi");

?>