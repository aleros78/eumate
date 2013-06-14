<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapl_regioni = array();
	$tdatapl_regioni[".NumberOfChars"] = 80; 
	$tdatapl_regioni[".ShortName"] = "pl_regioni";
	$tdatapl_regioni[".OwnerID"] = "";
	$tdatapl_regioni[".OriginalTable"] = "pl_regioni";

//	field labels
$fieldLabelspl_regioni = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspl_regioni["English"] = array();
	$fieldToolTipspl_regioni["English"] = array();
	$fieldLabelspl_regioni["English"]["id"] = "Id";
	$fieldToolTipspl_regioni["English"]["id"] = "";
	$fieldLabelspl_regioni["English"]["regione"] = "Regione";
	$fieldToolTipspl_regioni["English"]["regione"] = "";
	$fieldLabelspl_regioni["English"]["nome_it"] = "Nome It";
	$fieldToolTipspl_regioni["English"]["nome_it"] = "";
	$fieldLabelspl_regioni["English"]["nome_en"] = "Nome En";
	$fieldToolTipspl_regioni["English"]["nome_en"] = "";
	$fieldLabelspl_regioni["English"]["descrizione_it"] = "Descrizione It";
	$fieldToolTipspl_regioni["English"]["descrizione_it"] = "";
	$fieldLabelspl_regioni["English"]["descrizione_en"] = "Descrizione En";
	$fieldToolTipspl_regioni["English"]["descrizione_en"] = "";
	$fieldLabelspl_regioni["English"]["storia_it"] = "Storia It";
	$fieldToolTipspl_regioni["English"]["storia_it"] = "";
	$fieldLabelspl_regioni["English"]["storia_en"] = "Storia En";
	$fieldToolTipspl_regioni["English"]["storia_en"] = "";
	$fieldLabelspl_regioni["English"]["back_it"] = "Back It";
	$fieldToolTipspl_regioni["English"]["back_it"] = "";
	$fieldLabelspl_regioni["English"]["back_en"] = "Back En";
	$fieldToolTipspl_regioni["English"]["back_en"] = "";
	$fieldLabelspl_regioni["English"]["note_it"] = "Note It";
	$fieldToolTipspl_regioni["English"]["note_it"] = "";
	$fieldLabelspl_regioni["English"]["note_en"] = "Note En";
	$fieldToolTipspl_regioni["English"]["note_en"] = "";
	$fieldLabelspl_regioni["English"]["attivo"] = "Attivo";
	$fieldToolTipspl_regioni["English"]["attivo"] = "";
	if (count($fieldToolTipspl_regioni["English"]))
		$tdatapl_regioni[".isUseToolTips"] = true;
}
	
	
	$tdatapl_regioni[".NCSearch"] = true;



$tdatapl_regioni[".shortTableName"] = "pl_regioni";
$tdatapl_regioni[".nSecOptions"] = 0;
$tdatapl_regioni[".recsPerRowList"] = 1;
$tdatapl_regioni[".mainTableOwnerID"] = "";
$tdatapl_regioni[".moveNext"] = 1;
$tdatapl_regioni[".nType"] = 0;

$tdatapl_regioni[".strOriginalTableName"] = "pl_regioni";




$tdatapl_regioni[".showAddInPopup"] = false;

$tdatapl_regioni[".showEditInPopup"] = false;

$tdatapl_regioni[".showViewInPopup"] = false;

$tdatapl_regioni[".fieldsForRegister"] = array();

$tdatapl_regioni[".listAjax"] = false;

	$tdatapl_regioni[".audit"] = false;

	$tdatapl_regioni[".locking"] = false;

$tdatapl_regioni[".listIcons"] = true;
$tdatapl_regioni[".edit"] = true;
$tdatapl_regioni[".inlineEdit"] = true;
$tdatapl_regioni[".inlineAdd"] = true;
$tdatapl_regioni[".view"] = true;

$tdatapl_regioni[".exportTo"] = true;

$tdatapl_regioni[".printFriendly"] = true;

$tdatapl_regioni[".delete"] = true;

$tdatapl_regioni[".showSimpleSearchOptions"] = false;

$tdatapl_regioni[".showSearchPanel"] = true;

if (isMobile())
	$tdatapl_regioni[".isUseAjaxSuggest"] = false;
else 
	$tdatapl_regioni[".isUseAjaxSuggest"] = true;

$tdatapl_regioni[".rowHighlite"] = true;

// button handlers file names

$tdatapl_regioni[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapl_regioni[".isUseTimeForSearch"] = false;



$tdatapl_regioni[".useDetailsPreview"] = true;

$tdatapl_regioni[".allSearchFields"] = array();

$tdatapl_regioni[".allSearchFields"][] = "id";
$tdatapl_regioni[".allSearchFields"][] = "regione";
$tdatapl_regioni[".allSearchFields"][] = "nome_it";
$tdatapl_regioni[".allSearchFields"][] = "nome_en";
$tdatapl_regioni[".allSearchFields"][] = "descrizione_it";
$tdatapl_regioni[".allSearchFields"][] = "descrizione_en";
$tdatapl_regioni[".allSearchFields"][] = "storia_it";
$tdatapl_regioni[".allSearchFields"][] = "storia_en";
$tdatapl_regioni[".allSearchFields"][] = "back_it";
$tdatapl_regioni[".allSearchFields"][] = "back_en";
$tdatapl_regioni[".allSearchFields"][] = "note_it";
$tdatapl_regioni[".allSearchFields"][] = "note_en";
$tdatapl_regioni[".allSearchFields"][] = "attivo";

$tdatapl_regioni[".googleLikeFields"][] = "id";
$tdatapl_regioni[".googleLikeFields"][] = "regione";
$tdatapl_regioni[".googleLikeFields"][] = "nome_it";
$tdatapl_regioni[".googleLikeFields"][] = "nome_en";
$tdatapl_regioni[".googleLikeFields"][] = "descrizione_it";
$tdatapl_regioni[".googleLikeFields"][] = "descrizione_en";
$tdatapl_regioni[".googleLikeFields"][] = "storia_it";
$tdatapl_regioni[".googleLikeFields"][] = "storia_en";
$tdatapl_regioni[".googleLikeFields"][] = "back_it";
$tdatapl_regioni[".googleLikeFields"][] = "back_en";
$tdatapl_regioni[".googleLikeFields"][] = "note_it";
$tdatapl_regioni[".googleLikeFields"][] = "note_en";
$tdatapl_regioni[".googleLikeFields"][] = "attivo";


$tdatapl_regioni[".advSearchFields"][] = "id";
$tdatapl_regioni[".advSearchFields"][] = "regione";
$tdatapl_regioni[".advSearchFields"][] = "nome_it";
$tdatapl_regioni[".advSearchFields"][] = "nome_en";
$tdatapl_regioni[".advSearchFields"][] = "descrizione_it";
$tdatapl_regioni[".advSearchFields"][] = "descrizione_en";
$tdatapl_regioni[".advSearchFields"][] = "storia_it";
$tdatapl_regioni[".advSearchFields"][] = "storia_en";
$tdatapl_regioni[".advSearchFields"][] = "back_it";
$tdatapl_regioni[".advSearchFields"][] = "back_en";
$tdatapl_regioni[".advSearchFields"][] = "note_it";
$tdatapl_regioni[".advSearchFields"][] = "note_en";
$tdatapl_regioni[".advSearchFields"][] = "attivo";

$tdatapl_regioni[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
		


$tdatapl_regioni[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapl_regioni[".strOrderBy"] = $tstrOrderBy;

$tdatapl_regioni[".orderindexes"] = array();

$tdatapl_regioni[".sqlHead"] = "SELECT id,   regione,   nome_it,   nome_en,   descrizione_it,   descrizione_en,   storia_it,   storia_en,   back_it,   back_en,   note_it,   note_en,   attivo";
$tdatapl_regioni[".sqlFrom"] = "FROM pl_regioni";
$tdatapl_regioni[".sqlWhereExpr"] = "";
$tdatapl_regioni[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapl_regioni[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapl_regioni[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspl_regioni = array();
$tableKeyspl_regioni[] = "id";
$tdatapl_regioni[".Keys"] = $tableKeyspl_regioni;

$tdatapl_regioni[".listFields"] = array();
$tdatapl_regioni[".listFields"][] = "id";
$tdatapl_regioni[".listFields"][] = "regione";
$tdatapl_regioni[".listFields"][] = "nome_it";
$tdatapl_regioni[".listFields"][] = "nome_en";
$tdatapl_regioni[".listFields"][] = "descrizione_it";
$tdatapl_regioni[".listFields"][] = "descrizione_en";
$tdatapl_regioni[".listFields"][] = "storia_it";
$tdatapl_regioni[".listFields"][] = "storia_en";
$tdatapl_regioni[".listFields"][] = "back_it";
$tdatapl_regioni[".listFields"][] = "back_en";
$tdatapl_regioni[".listFields"][] = "note_it";
$tdatapl_regioni[".listFields"][] = "note_en";
$tdatapl_regioni[".listFields"][] = "attivo";

$tdatapl_regioni[".viewFields"] = array();
$tdatapl_regioni[".viewFields"][] = "id";
$tdatapl_regioni[".viewFields"][] = "regione";
$tdatapl_regioni[".viewFields"][] = "nome_it";
$tdatapl_regioni[".viewFields"][] = "nome_en";
$tdatapl_regioni[".viewFields"][] = "descrizione_it";
$tdatapl_regioni[".viewFields"][] = "descrizione_en";
$tdatapl_regioni[".viewFields"][] = "storia_it";
$tdatapl_regioni[".viewFields"][] = "storia_en";
$tdatapl_regioni[".viewFields"][] = "back_it";
$tdatapl_regioni[".viewFields"][] = "back_en";
$tdatapl_regioni[".viewFields"][] = "note_it";
$tdatapl_regioni[".viewFields"][] = "note_en";
$tdatapl_regioni[".viewFields"][] = "attivo";

$tdatapl_regioni[".addFields"] = array();
$tdatapl_regioni[".addFields"][] = "regione";
$tdatapl_regioni[".addFields"][] = "nome_it";
$tdatapl_regioni[".addFields"][] = "nome_en";
$tdatapl_regioni[".addFields"][] = "descrizione_it";
$tdatapl_regioni[".addFields"][] = "descrizione_en";
$tdatapl_regioni[".addFields"][] = "storia_it";
$tdatapl_regioni[".addFields"][] = "storia_en";
$tdatapl_regioni[".addFields"][] = "back_it";
$tdatapl_regioni[".addFields"][] = "back_en";
$tdatapl_regioni[".addFields"][] = "note_it";
$tdatapl_regioni[".addFields"][] = "note_en";
$tdatapl_regioni[".addFields"][] = "attivo";

$tdatapl_regioni[".inlineAddFields"] = array();
$tdatapl_regioni[".inlineAddFields"][] = "regione";
$tdatapl_regioni[".inlineAddFields"][] = "nome_it";
$tdatapl_regioni[".inlineAddFields"][] = "nome_en";
$tdatapl_regioni[".inlineAddFields"][] = "descrizione_it";
$tdatapl_regioni[".inlineAddFields"][] = "descrizione_en";
$tdatapl_regioni[".inlineAddFields"][] = "storia_it";
$tdatapl_regioni[".inlineAddFields"][] = "storia_en";
$tdatapl_regioni[".inlineAddFields"][] = "back_it";
$tdatapl_regioni[".inlineAddFields"][] = "back_en";
$tdatapl_regioni[".inlineAddFields"][] = "note_it";
$tdatapl_regioni[".inlineAddFields"][] = "note_en";
$tdatapl_regioni[".inlineAddFields"][] = "attivo";

$tdatapl_regioni[".editFields"] = array();
$tdatapl_regioni[".editFields"][] = "regione";
$tdatapl_regioni[".editFields"][] = "nome_it";
$tdatapl_regioni[".editFields"][] = "nome_en";
$tdatapl_regioni[".editFields"][] = "descrizione_it";
$tdatapl_regioni[".editFields"][] = "descrizione_en";
$tdatapl_regioni[".editFields"][] = "storia_it";
$tdatapl_regioni[".editFields"][] = "storia_en";
$tdatapl_regioni[".editFields"][] = "back_it";
$tdatapl_regioni[".editFields"][] = "back_en";
$tdatapl_regioni[".editFields"][] = "note_it";
$tdatapl_regioni[".editFields"][] = "note_en";
$tdatapl_regioni[".editFields"][] = "attivo";

$tdatapl_regioni[".inlineEditFields"] = array();
$tdatapl_regioni[".inlineEditFields"][] = "regione";
$tdatapl_regioni[".inlineEditFields"][] = "nome_it";
$tdatapl_regioni[".inlineEditFields"][] = "nome_en";
$tdatapl_regioni[".inlineEditFields"][] = "descrizione_it";
$tdatapl_regioni[".inlineEditFields"][] = "descrizione_en";
$tdatapl_regioni[".inlineEditFields"][] = "storia_it";
$tdatapl_regioni[".inlineEditFields"][] = "storia_en";
$tdatapl_regioni[".inlineEditFields"][] = "back_it";
$tdatapl_regioni[".inlineEditFields"][] = "back_en";
$tdatapl_regioni[".inlineEditFields"][] = "note_it";
$tdatapl_regioni[".inlineEditFields"][] = "note_en";
$tdatapl_regioni[".inlineEditFields"][] = "attivo";

$tdatapl_regioni[".exportFields"] = array();
$tdatapl_regioni[".exportFields"][] = "id";
$tdatapl_regioni[".exportFields"][] = "regione";
$tdatapl_regioni[".exportFields"][] = "nome_it";
$tdatapl_regioni[".exportFields"][] = "nome_en";
$tdatapl_regioni[".exportFields"][] = "descrizione_it";
$tdatapl_regioni[".exportFields"][] = "descrizione_en";
$tdatapl_regioni[".exportFields"][] = "storia_it";
$tdatapl_regioni[".exportFields"][] = "storia_en";
$tdatapl_regioni[".exportFields"][] = "back_it";
$tdatapl_regioni[".exportFields"][] = "back_en";
$tdatapl_regioni[".exportFields"][] = "note_it";
$tdatapl_regioni[".exportFields"][] = "note_en";
$tdatapl_regioni[".exportFields"][] = "attivo";

$tdatapl_regioni[".printFields"] = array();
$tdatapl_regioni[".printFields"][] = "id";
$tdatapl_regioni[".printFields"][] = "regione";
$tdatapl_regioni[".printFields"][] = "nome_it";
$tdatapl_regioni[".printFields"][] = "nome_en";
$tdatapl_regioni[".printFields"][] = "descrizione_it";
$tdatapl_regioni[".printFields"][] = "descrizione_en";
$tdatapl_regioni[".printFields"][] = "storia_it";
$tdatapl_regioni[".printFields"][] = "storia_en";
$tdatapl_regioni[".printFields"][] = "back_it";
$tdatapl_regioni[".printFields"][] = "back_en";
$tdatapl_regioni[".printFields"][] = "note_it";
$tdatapl_regioni[".printFields"][] = "note_en";
$tdatapl_regioni[".printFields"][] = "attivo";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pl_regioni";
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
	
		
		
	$tdatapl_regioni["id"] = $fdata;
//	regione
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "regione";
	$fdata["GoodName"] = "regione";
	$fdata["ownerTable"] = "pl_regioni";
	$fdata["Label"] = "Regione"; 
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
	
		$fdata["strField"] = "regione"; 
		$fdata["FullName"] = "regione";
	
		
		
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
	
		
		
	$tdatapl_regioni["regione"] = $fdata;
//	nome_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nome_it";
	$fdata["GoodName"] = "nome_it";
	$fdata["ownerTable"] = "pl_regioni";
	$fdata["Label"] = "Nome It"; 
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
	
		$fdata["strField"] = "nome_it"; 
		$fdata["FullName"] = "nome_it";
	
		
		
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
	
		
		
	$tdatapl_regioni["nome_it"] = $fdata;
//	nome_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nome_en";
	$fdata["GoodName"] = "nome_en";
	$fdata["ownerTable"] = "pl_regioni";
	$fdata["Label"] = "Nome En"; 
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
	
		$fdata["strField"] = "nome_en"; 
		$fdata["FullName"] = "nome_en";
	
		
		
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
	
		
		
	$tdatapl_regioni["nome_en"] = $fdata;
//	descrizione_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descrizione_it";
	$fdata["GoodName"] = "descrizione_it";
	$fdata["ownerTable"] = "pl_regioni";
	$fdata["Label"] = "Descrizione It"; 
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
	
		$fdata["strField"] = "descrizione_it"; 
		$fdata["FullName"] = "descrizione_it";
	
		
		
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
	
		
		
	$tdatapl_regioni["descrizione_it"] = $fdata;
//	descrizione_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "descrizione_en";
	$fdata["GoodName"] = "descrizione_en";
	$fdata["ownerTable"] = "pl_regioni";
	$fdata["Label"] = "Descrizione En"; 
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
	
		$fdata["strField"] = "descrizione_en"; 
		$fdata["FullName"] = "descrizione_en";
	
		
		
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
	
		
		
	$tdatapl_regioni["descrizione_en"] = $fdata;
//	storia_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "storia_it";
	$fdata["GoodName"] = "storia_it";
	$fdata["ownerTable"] = "pl_regioni";
	$fdata["Label"] = "Storia It"; 
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
	
		$fdata["strField"] = "storia_it"; 
		$fdata["FullName"] = "storia_it";
	
		
		
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
	
		
		
	$tdatapl_regioni["storia_it"] = $fdata;
//	storia_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "storia_en";
	$fdata["GoodName"] = "storia_en";
	$fdata["ownerTable"] = "pl_regioni";
	$fdata["Label"] = "Storia En"; 
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
	
		$fdata["strField"] = "storia_en"; 
		$fdata["FullName"] = "storia_en";
	
		
		
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
	
		
		
	$tdatapl_regioni["storia_en"] = $fdata;
//	back_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "back_it";
	$fdata["GoodName"] = "back_it";
	$fdata["ownerTable"] = "pl_regioni";
	$fdata["Label"] = "Back It"; 
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
	
		$fdata["strField"] = "back_it"; 
		$fdata["FullName"] = "back_it";
	
		
		
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
	
		
		
	$tdatapl_regioni["back_it"] = $fdata;
//	back_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "back_en";
	$fdata["GoodName"] = "back_en";
	$fdata["ownerTable"] = "pl_regioni";
	$fdata["Label"] = "Back En"; 
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
	
		$fdata["strField"] = "back_en"; 
		$fdata["FullName"] = "back_en";
	
		
		
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
	
		
		
	$tdatapl_regioni["back_en"] = $fdata;
//	note_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "note_it";
	$fdata["GoodName"] = "note_it";
	$fdata["ownerTable"] = "pl_regioni";
	$fdata["Label"] = "Note It"; 
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
	
		$fdata["strField"] = "note_it"; 
		$fdata["FullName"] = "note_it";
	
		
		
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
	
		
		
	$tdatapl_regioni["note_it"] = $fdata;
//	note_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "note_en";
	$fdata["GoodName"] = "note_en";
	$fdata["ownerTable"] = "pl_regioni";
	$fdata["Label"] = "Note En"; 
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
	
		$fdata["strField"] = "note_en"; 
		$fdata["FullName"] = "note_en";
	
		
		
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
	
		
		
	$tdatapl_regioni["note_en"] = $fdata;
//	attivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "attivo";
	$fdata["GoodName"] = "attivo";
	$fdata["ownerTable"] = "pl_regioni";
	$fdata["Label"] = "Attivo"; 
	$fdata["FieldType"] = 16;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "attivo"; 
		$fdata["FullName"] = "attivo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapl_regioni["attivo"] = $fdata;

	
$tables_data["pl_regioni"]=&$tdatapl_regioni;
$field_labels["pl_regioni"] = &$fieldLabelspl_regioni;
$fieldToolTips["pl_regioni"] = &$fieldToolTipspl_regioni;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pl_regioni"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="pl_citta";
	$detailsParam["dDataSourceTable"]="pl_citta";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="pl_citta";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["pl_regioni"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pl_regioni"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["pl_regioni"][$dIndex]["detailKeys"][]="id_regione";

$dIndex = 2-1;
			$strOriginalDetailsTable="pl_posti";
	$detailsParam["dDataSourceTable"]="pl_posti";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="pl_posti";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["pl_regioni"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pl_regioni"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["pl_regioni"][$dIndex]["detailKeys"][]="id_regione";

	
// tables which are master tables for current table (detail)
$masterTablesData["pl_regioni"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pl_regioni()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   regione,   nome_it,   nome_en,   descrizione_it,   descrizione_en,   storia_it,   storia_en,   back_it,   back_en,   note_it,   note_en,   attivo";
$proto0["m_strFrom"] = "FROM pl_regioni";
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
	"m_strTable" => "pl_regioni"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "regione",
	"m_strTable" => "pl_regioni"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_it",
	"m_strTable" => "pl_regioni"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_en",
	"m_strTable" => "pl_regioni"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "descrizione_it",
	"m_strTable" => "pl_regioni"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "descrizione_en",
	"m_strTable" => "pl_regioni"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "storia_it",
	"m_strTable" => "pl_regioni"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "storia_en",
	"m_strTable" => "pl_regioni"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "back_it",
	"m_strTable" => "pl_regioni"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "back_en",
	"m_strTable" => "pl_regioni"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "note_it",
	"m_strTable" => "pl_regioni"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "note_en",
	"m_strTable" => "pl_regioni"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "attivo",
	"m_strTable" => "pl_regioni"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "pl_regioni";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "id";
$proto32["m_columns"][] = "regione";
$proto32["m_columns"][] = "nome_it";
$proto32["m_columns"][] = "nome_en";
$proto32["m_columns"][] = "descrizione_it";
$proto32["m_columns"][] = "descrizione_en";
$proto32["m_columns"][] = "storia_it";
$proto32["m_columns"][] = "storia_en";
$proto32["m_columns"][] = "back_it";
$proto32["m_columns"][] = "back_en";
$proto32["m_columns"][] = "note_it";
$proto32["m_columns"][] = "note_en";
$proto32["m_columns"][] = "attivo";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_alias"] = "";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = "0";
$proto33["m_inBrackets"] = "0";
$proto33["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pl_regioni = createSqlQuery_pl_regioni();
													$tdatapl_regioni[".sqlquery"] = $queryData_pl_regioni;

$tableEvents["pl_regioni"] = new eventsBase;
$tdatapl_regioni[".hasEvents"] = false;

$cipherer = new RunnerCipherer("pl_regioni");

?>