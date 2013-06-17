<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapl_citta = array();
	$tdatapl_citta[".NumberOfChars"] = 80; 
	$tdatapl_citta[".ShortName"] = "pl_citta";
	$tdatapl_citta[".OwnerID"] = "";
	$tdatapl_citta[".OriginalTable"] = "pl_citta";

//	field labels
$fieldLabelspl_citta = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspl_citta["English"] = array();
	$fieldToolTipspl_citta["English"] = array();
	$fieldLabelspl_citta["English"]["id"] = "Id";
	$fieldToolTipspl_citta["English"]["id"] = "";
	$fieldLabelspl_citta["English"]["id_regione"] = "Id Regione";
	$fieldToolTipspl_citta["English"]["id_regione"] = "";
	$fieldLabelspl_citta["English"]["citta"] = "Citta";
	$fieldToolTipspl_citta["English"]["citta"] = "";
	$fieldLabelspl_citta["English"]["nome_it"] = "Nome It";
	$fieldToolTipspl_citta["English"]["nome_it"] = "";
	$fieldLabelspl_citta["English"]["nome_en"] = "Nome En";
	$fieldToolTipspl_citta["English"]["nome_en"] = "";
	$fieldLabelspl_citta["English"]["descrizione_it"] = "Descrizione It";
	$fieldToolTipspl_citta["English"]["descrizione_it"] = "";
	$fieldLabelspl_citta["English"]["descrizione_en"] = "Descrizione En";
	$fieldToolTipspl_citta["English"]["descrizione_en"] = "";
	$fieldLabelspl_citta["English"]["storia_it"] = "Storia It";
	$fieldToolTipspl_citta["English"]["storia_it"] = "";
	$fieldLabelspl_citta["English"]["storia_en"] = "Storia En";
	$fieldToolTipspl_citta["English"]["storia_en"] = "";
	$fieldLabelspl_citta["English"]["back_it"] = "Back It";
	$fieldToolTipspl_citta["English"]["back_it"] = "";
	$fieldLabelspl_citta["English"]["back_en"] = "Back En";
	$fieldToolTipspl_citta["English"]["back_en"] = "";
	$fieldLabelspl_citta["English"]["note_it"] = "Note It";
	$fieldToolTipspl_citta["English"]["note_it"] = "";
	$fieldLabelspl_citta["English"]["note_en"] = "Note En";
	$fieldToolTipspl_citta["English"]["note_en"] = "";
	$fieldLabelspl_citta["English"]["attivo"] = "Attivo";
	$fieldToolTipspl_citta["English"]["attivo"] = "";
	if (count($fieldToolTipspl_citta["English"]))
		$tdatapl_citta[".isUseToolTips"] = true;
}
	
	
	$tdatapl_citta[".NCSearch"] = true;



$tdatapl_citta[".shortTableName"] = "pl_citta";
$tdatapl_citta[".nSecOptions"] = 0;
$tdatapl_citta[".recsPerRowList"] = 1;
$tdatapl_citta[".mainTableOwnerID"] = "";
$tdatapl_citta[".moveNext"] = 1;
$tdatapl_citta[".nType"] = 0;

$tdatapl_citta[".strOriginalTableName"] = "pl_citta";




$tdatapl_citta[".showAddInPopup"] = false;

$tdatapl_citta[".showEditInPopup"] = false;

$tdatapl_citta[".showViewInPopup"] = false;

$tdatapl_citta[".fieldsForRegister"] = array();

$tdatapl_citta[".listAjax"] = false;

	$tdatapl_citta[".audit"] = false;

	$tdatapl_citta[".locking"] = false;

$tdatapl_citta[".listIcons"] = true;
$tdatapl_citta[".edit"] = true;
$tdatapl_citta[".copy"] = true;
$tdatapl_citta[".view"] = true;



$tdatapl_citta[".delete"] = true;

$tdatapl_citta[".showSimpleSearchOptions"] = false;

$tdatapl_citta[".showSearchPanel"] = true;

if (isMobile())
	$tdatapl_citta[".isUseAjaxSuggest"] = false;
else 
	$tdatapl_citta[".isUseAjaxSuggest"] = true;

$tdatapl_citta[".rowHighlite"] = true;

// button handlers file names

$tdatapl_citta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapl_citta[".isUseTimeForSearch"] = false;




$tdatapl_citta[".allSearchFields"] = array();

$tdatapl_citta[".allSearchFields"][] = "id";
$tdatapl_citta[".allSearchFields"][] = "id_regione";
$tdatapl_citta[".allSearchFields"][] = "citta";
$tdatapl_citta[".allSearchFields"][] = "nome_it";
$tdatapl_citta[".allSearchFields"][] = "nome_en";
$tdatapl_citta[".allSearchFields"][] = "descrizione_it";
$tdatapl_citta[".allSearchFields"][] = "descrizione_en";
$tdatapl_citta[".allSearchFields"][] = "storia_it";
$tdatapl_citta[".allSearchFields"][] = "storia_en";
$tdatapl_citta[".allSearchFields"][] = "back_it";
$tdatapl_citta[".allSearchFields"][] = "back_en";
$tdatapl_citta[".allSearchFields"][] = "note_it";
$tdatapl_citta[".allSearchFields"][] = "note_en";
$tdatapl_citta[".allSearchFields"][] = "attivo";

$tdatapl_citta[".googleLikeFields"][] = "id";
$tdatapl_citta[".googleLikeFields"][] = "id_regione";
$tdatapl_citta[".googleLikeFields"][] = "citta";
$tdatapl_citta[".googleLikeFields"][] = "nome_it";
$tdatapl_citta[".googleLikeFields"][] = "nome_en";
$tdatapl_citta[".googleLikeFields"][] = "descrizione_it";
$tdatapl_citta[".googleLikeFields"][] = "descrizione_en";
$tdatapl_citta[".googleLikeFields"][] = "storia_it";
$tdatapl_citta[".googleLikeFields"][] = "storia_en";
$tdatapl_citta[".googleLikeFields"][] = "back_it";
$tdatapl_citta[".googleLikeFields"][] = "back_en";
$tdatapl_citta[".googleLikeFields"][] = "note_it";
$tdatapl_citta[".googleLikeFields"][] = "note_en";
$tdatapl_citta[".googleLikeFields"][] = "attivo";


$tdatapl_citta[".advSearchFields"][] = "id";
$tdatapl_citta[".advSearchFields"][] = "id_regione";
$tdatapl_citta[".advSearchFields"][] = "citta";
$tdatapl_citta[".advSearchFields"][] = "nome_it";
$tdatapl_citta[".advSearchFields"][] = "nome_en";
$tdatapl_citta[".advSearchFields"][] = "descrizione_it";
$tdatapl_citta[".advSearchFields"][] = "descrizione_en";
$tdatapl_citta[".advSearchFields"][] = "storia_it";
$tdatapl_citta[".advSearchFields"][] = "storia_en";
$tdatapl_citta[".advSearchFields"][] = "back_it";
$tdatapl_citta[".advSearchFields"][] = "back_en";
$tdatapl_citta[".advSearchFields"][] = "note_it";
$tdatapl_citta[".advSearchFields"][] = "note_en";
$tdatapl_citta[".advSearchFields"][] = "attivo";

$tdatapl_citta[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatapl_citta[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapl_citta[".strOrderBy"] = $tstrOrderBy;

$tdatapl_citta[".orderindexes"] = array();

$tdatapl_citta[".sqlHead"] = "SELECT id,   id_regione,   citta,   nome_it,   nome_en,   descrizione_it,   descrizione_en,   storia_it,   storia_en,   back_it,   back_en,   note_it,   note_en,   attivo";
$tdatapl_citta[".sqlFrom"] = "FROM pl_citta";
$tdatapl_citta[".sqlWhereExpr"] = "";
$tdatapl_citta[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapl_citta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapl_citta[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspl_citta = array();
$tableKeyspl_citta[] = "id";
$tdatapl_citta[".Keys"] = $tableKeyspl_citta;

$tdatapl_citta[".listFields"] = array();
$tdatapl_citta[".listFields"][] = "id";
$tdatapl_citta[".listFields"][] = "id_regione";
$tdatapl_citta[".listFields"][] = "citta";
$tdatapl_citta[".listFields"][] = "nome_it";
$tdatapl_citta[".listFields"][] = "nome_en";
$tdatapl_citta[".listFields"][] = "descrizione_it";
$tdatapl_citta[".listFields"][] = "descrizione_en";
$tdatapl_citta[".listFields"][] = "storia_it";
$tdatapl_citta[".listFields"][] = "storia_en";
$tdatapl_citta[".listFields"][] = "back_it";
$tdatapl_citta[".listFields"][] = "back_en";
$tdatapl_citta[".listFields"][] = "note_it";
$tdatapl_citta[".listFields"][] = "note_en";
$tdatapl_citta[".listFields"][] = "attivo";

$tdatapl_citta[".viewFields"] = array();
$tdatapl_citta[".viewFields"][] = "id";
$tdatapl_citta[".viewFields"][] = "id_regione";
$tdatapl_citta[".viewFields"][] = "citta";
$tdatapl_citta[".viewFields"][] = "nome_it";
$tdatapl_citta[".viewFields"][] = "nome_en";
$tdatapl_citta[".viewFields"][] = "descrizione_it";
$tdatapl_citta[".viewFields"][] = "descrizione_en";
$tdatapl_citta[".viewFields"][] = "storia_it";
$tdatapl_citta[".viewFields"][] = "storia_en";
$tdatapl_citta[".viewFields"][] = "back_it";
$tdatapl_citta[".viewFields"][] = "back_en";
$tdatapl_citta[".viewFields"][] = "note_it";
$tdatapl_citta[".viewFields"][] = "note_en";
$tdatapl_citta[".viewFields"][] = "attivo";

$tdatapl_citta[".addFields"] = array();
$tdatapl_citta[".addFields"][] = "id_regione";
$tdatapl_citta[".addFields"][] = "citta";
$tdatapl_citta[".addFields"][] = "nome_it";
$tdatapl_citta[".addFields"][] = "nome_en";
$tdatapl_citta[".addFields"][] = "descrizione_it";
$tdatapl_citta[".addFields"][] = "descrizione_en";
$tdatapl_citta[".addFields"][] = "storia_it";
$tdatapl_citta[".addFields"][] = "storia_en";
$tdatapl_citta[".addFields"][] = "back_it";
$tdatapl_citta[".addFields"][] = "back_en";
$tdatapl_citta[".addFields"][] = "note_it";
$tdatapl_citta[".addFields"][] = "note_en";
$tdatapl_citta[".addFields"][] = "attivo";

$tdatapl_citta[".inlineAddFields"] = array();
$tdatapl_citta[".inlineAddFields"][] = "id_regione";
$tdatapl_citta[".inlineAddFields"][] = "citta";
$tdatapl_citta[".inlineAddFields"][] = "nome_it";
$tdatapl_citta[".inlineAddFields"][] = "nome_en";
$tdatapl_citta[".inlineAddFields"][] = "descrizione_it";
$tdatapl_citta[".inlineAddFields"][] = "descrizione_en";
$tdatapl_citta[".inlineAddFields"][] = "storia_it";
$tdatapl_citta[".inlineAddFields"][] = "storia_en";
$tdatapl_citta[".inlineAddFields"][] = "back_it";
$tdatapl_citta[".inlineAddFields"][] = "back_en";
$tdatapl_citta[".inlineAddFields"][] = "note_it";
$tdatapl_citta[".inlineAddFields"][] = "note_en";
$tdatapl_citta[".inlineAddFields"][] = "attivo";

$tdatapl_citta[".editFields"] = array();
$tdatapl_citta[".editFields"][] = "id_regione";
$tdatapl_citta[".editFields"][] = "citta";
$tdatapl_citta[".editFields"][] = "nome_it";
$tdatapl_citta[".editFields"][] = "nome_en";
$tdatapl_citta[".editFields"][] = "descrizione_it";
$tdatapl_citta[".editFields"][] = "descrizione_en";
$tdatapl_citta[".editFields"][] = "storia_it";
$tdatapl_citta[".editFields"][] = "storia_en";
$tdatapl_citta[".editFields"][] = "back_it";
$tdatapl_citta[".editFields"][] = "back_en";
$tdatapl_citta[".editFields"][] = "note_it";
$tdatapl_citta[".editFields"][] = "note_en";
$tdatapl_citta[".editFields"][] = "attivo";

$tdatapl_citta[".inlineEditFields"] = array();
$tdatapl_citta[".inlineEditFields"][] = "id_regione";
$tdatapl_citta[".inlineEditFields"][] = "citta";
$tdatapl_citta[".inlineEditFields"][] = "nome_it";
$tdatapl_citta[".inlineEditFields"][] = "nome_en";
$tdatapl_citta[".inlineEditFields"][] = "descrizione_it";
$tdatapl_citta[".inlineEditFields"][] = "descrizione_en";
$tdatapl_citta[".inlineEditFields"][] = "storia_it";
$tdatapl_citta[".inlineEditFields"][] = "storia_en";
$tdatapl_citta[".inlineEditFields"][] = "back_it";
$tdatapl_citta[".inlineEditFields"][] = "back_en";
$tdatapl_citta[".inlineEditFields"][] = "note_it";
$tdatapl_citta[".inlineEditFields"][] = "note_en";
$tdatapl_citta[".inlineEditFields"][] = "attivo";

$tdatapl_citta[".exportFields"] = array();
$tdatapl_citta[".exportFields"][] = "id";
$tdatapl_citta[".exportFields"][] = "id_regione";
$tdatapl_citta[".exportFields"][] = "citta";
$tdatapl_citta[".exportFields"][] = "nome_it";
$tdatapl_citta[".exportFields"][] = "nome_en";
$tdatapl_citta[".exportFields"][] = "descrizione_it";
$tdatapl_citta[".exportFields"][] = "descrizione_en";
$tdatapl_citta[".exportFields"][] = "storia_it";
$tdatapl_citta[".exportFields"][] = "storia_en";
$tdatapl_citta[".exportFields"][] = "back_it";
$tdatapl_citta[".exportFields"][] = "back_en";
$tdatapl_citta[".exportFields"][] = "note_it";
$tdatapl_citta[".exportFields"][] = "note_en";
$tdatapl_citta[".exportFields"][] = "attivo";

$tdatapl_citta[".printFields"] = array();
$tdatapl_citta[".printFields"][] = "id";
$tdatapl_citta[".printFields"][] = "id_regione";
$tdatapl_citta[".printFields"][] = "citta";
$tdatapl_citta[".printFields"][] = "nome_it";
$tdatapl_citta[".printFields"][] = "nome_en";
$tdatapl_citta[".printFields"][] = "descrizione_it";
$tdatapl_citta[".printFields"][] = "descrizione_en";
$tdatapl_citta[".printFields"][] = "storia_it";
$tdatapl_citta[".printFields"][] = "storia_en";
$tdatapl_citta[".printFields"][] = "back_it";
$tdatapl_citta[".printFields"][] = "back_en";
$tdatapl_citta[".printFields"][] = "note_it";
$tdatapl_citta[".printFields"][] = "note_en";
$tdatapl_citta[".printFields"][] = "attivo";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pl_citta";
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
	
		
		
	$tdatapl_citta["id"] = $fdata;
//	id_regione
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_regione";
	$fdata["GoodName"] = "id_regione";
	$fdata["ownerTable"] = "pl_citta";
	$fdata["Label"] = "Id Regione"; 
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
	
		$fdata["strField"] = "id_regione"; 
		$fdata["FullName"] = "id_regione";
	
		
		
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
	$edata["DisplayField"] = "regione";
	
		
	$edata["LookupTable"] = "pl_regioni";
	$edata["LookupOrderBy"] = "regione";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapl_citta["id_regione"] = $fdata;
//	citta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "citta";
	$fdata["GoodName"] = "citta";
	$fdata["ownerTable"] = "pl_citta";
	$fdata["Label"] = "Citta"; 
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
	
		$fdata["strField"] = "citta"; 
		$fdata["FullName"] = "citta";
	
		
		
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
	
		
		
	$tdatapl_citta["citta"] = $fdata;
//	nome_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nome_it";
	$fdata["GoodName"] = "nome_it";
	$fdata["ownerTable"] = "pl_citta";
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
	
		
		
	$tdatapl_citta["nome_it"] = $fdata;
//	nome_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nome_en";
	$fdata["GoodName"] = "nome_en";
	$fdata["ownerTable"] = "pl_citta";
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
	
		
		
	$tdatapl_citta["nome_en"] = $fdata;
//	descrizione_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "descrizione_it";
	$fdata["GoodName"] = "descrizione_it";
	$fdata["ownerTable"] = "pl_citta";
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
	
		
		
	$tdatapl_citta["descrizione_it"] = $fdata;
//	descrizione_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "descrizione_en";
	$fdata["GoodName"] = "descrizione_en";
	$fdata["ownerTable"] = "pl_citta";
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
	
		
		
	$tdatapl_citta["descrizione_en"] = $fdata;
//	storia_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "storia_it";
	$fdata["GoodName"] = "storia_it";
	$fdata["ownerTable"] = "pl_citta";
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
	
		
		
	$tdatapl_citta["storia_it"] = $fdata;
//	storia_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "storia_en";
	$fdata["GoodName"] = "storia_en";
	$fdata["ownerTable"] = "pl_citta";
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
	
		
		
	$tdatapl_citta["storia_en"] = $fdata;
//	back_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "back_it";
	$fdata["GoodName"] = "back_it";
	$fdata["ownerTable"] = "pl_citta";
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
	
		
		
	$tdatapl_citta["back_it"] = $fdata;
//	back_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "back_en";
	$fdata["GoodName"] = "back_en";
	$fdata["ownerTable"] = "pl_citta";
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
	
		
		
	$tdatapl_citta["back_en"] = $fdata;
//	note_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "note_it";
	$fdata["GoodName"] = "note_it";
	$fdata["ownerTable"] = "pl_citta";
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
	
		
		
	$tdatapl_citta["note_it"] = $fdata;
//	note_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "note_en";
	$fdata["GoodName"] = "note_en";
	$fdata["ownerTable"] = "pl_citta";
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
	
		
		
	$tdatapl_citta["note_en"] = $fdata;
//	attivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "attivo";
	$fdata["GoodName"] = "attivo";
	$fdata["ownerTable"] = "pl_citta";
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
	
		
		
	$tdatapl_citta["attivo"] = $fdata;

	
$tables_data["pl_citta"]=&$tdatapl_citta;
$field_labels["pl_citta"] = &$fieldLabelspl_citta;
$fieldToolTips["pl_citta"] = &$fieldToolTipspl_citta;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pl_citta"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="pl_posti";
	$detailsParam["dDataSourceTable"]="pl_posti";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="pl_posti";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 0;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["pl_citta"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pl_citta"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["pl_citta"][$dIndex]["detailKeys"][]="id_citta";

	
// tables which are master tables for current table (detail)
$masterTablesData["pl_citta"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="pl_regioni";
	$masterParams["mDataSourceTable"]="pl_regioni";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pl_regioni";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 0;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["pl_citta"][$mIndex] = $masterParams;	
		$masterTablesData["pl_citta"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["pl_citta"][$mIndex]["detailKeys"][]="id_regione";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pl_citta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   id_regione,   citta,   nome_it,   nome_en,   descrizione_it,   descrizione_en,   storia_it,   storia_en,   back_it,   back_en,   note_it,   note_en,   attivo";
$proto0["m_strFrom"] = "FROM pl_citta";
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
	"m_strTable" => "pl_citta"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_regione",
	"m_strTable" => "pl_citta"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "citta",
	"m_strTable" => "pl_citta"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_it",
	"m_strTable" => "pl_citta"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_en",
	"m_strTable" => "pl_citta"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "descrizione_it",
	"m_strTable" => "pl_citta"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "descrizione_en",
	"m_strTable" => "pl_citta"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "storia_it",
	"m_strTable" => "pl_citta"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "storia_en",
	"m_strTable" => "pl_citta"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "back_it",
	"m_strTable" => "pl_citta"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "back_en",
	"m_strTable" => "pl_citta"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "note_it",
	"m_strTable" => "pl_citta"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "note_en",
	"m_strTable" => "pl_citta"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "attivo",
	"m_strTable" => "pl_citta"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "pl_citta";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "id";
$proto34["m_columns"][] = "id_regione";
$proto34["m_columns"][] = "citta";
$proto34["m_columns"][] = "nome_it";
$proto34["m_columns"][] = "nome_en";
$proto34["m_columns"][] = "descrizione_it";
$proto34["m_columns"][] = "descrizione_en";
$proto34["m_columns"][] = "storia_it";
$proto34["m_columns"][] = "storia_en";
$proto34["m_columns"][] = "back_it";
$proto34["m_columns"][] = "back_en";
$proto34["m_columns"][] = "note_it";
$proto34["m_columns"][] = "note_en";
$proto34["m_columns"][] = "attivo";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_alias"] = "";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = "0";
$proto35["m_inBrackets"] = "0";
$proto35["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pl_citta = createSqlQuery_pl_citta();
														$tdatapl_citta[".sqlquery"] = $queryData_pl_citta;

$tableEvents["pl_citta"] = new eventsBase;
$tdatapl_citta[".hasEvents"] = false;

$cipherer = new RunnerCipherer("pl_citta");

?>