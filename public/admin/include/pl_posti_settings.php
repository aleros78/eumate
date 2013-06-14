<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapl_posti = array();
	$tdatapl_posti[".NumberOfChars"] = 80; 
	$tdatapl_posti[".ShortName"] = "pl_posti";
	$tdatapl_posti[".OwnerID"] = "";
	$tdatapl_posti[".OriginalTable"] = "pl_posti";

//	field labels
$fieldLabelspl_posti = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspl_posti["English"] = array();
	$fieldToolTipspl_posti["English"] = array();
	$fieldLabelspl_posti["English"]["id"] = "Id";
	$fieldToolTipspl_posti["English"]["id"] = "";
	$fieldLabelspl_posti["English"]["id_location"] = "Id Location";
	$fieldToolTipspl_posti["English"]["id_location"] = "";
	$fieldLabelspl_posti["English"]["id_citta"] = "Id Citta";
	$fieldToolTipspl_posti["English"]["id_citta"] = "";
	$fieldLabelspl_posti["English"]["id_regione"] = "Id Regione";
	$fieldToolTipspl_posti["English"]["id_regione"] = "";
	$fieldLabelspl_posti["English"]["posto"] = "Posto";
	$fieldToolTipspl_posti["English"]["posto"] = "";
	$fieldLabelspl_posti["English"]["nome_it"] = "Nome It";
	$fieldToolTipspl_posti["English"]["nome_it"] = "";
	$fieldLabelspl_posti["English"]["nome_en"] = "Nome En";
	$fieldToolTipspl_posti["English"]["nome_en"] = "";
	$fieldLabelspl_posti["English"]["descrizione_it"] = "Descrizione It";
	$fieldToolTipspl_posti["English"]["descrizione_it"] = "";
	$fieldLabelspl_posti["English"]["descrizione_en"] = "Descrizione En";
	$fieldToolTipspl_posti["English"]["descrizione_en"] = "";
	$fieldLabelspl_posti["English"]["storia_it"] = "Storia It";
	$fieldToolTipspl_posti["English"]["storia_it"] = "";
	$fieldLabelspl_posti["English"]["storia_en"] = "Storia En";
	$fieldToolTipspl_posti["English"]["storia_en"] = "";
	$fieldLabelspl_posti["English"]["back_it"] = "Back It";
	$fieldToolTipspl_posti["English"]["back_it"] = "";
	$fieldLabelspl_posti["English"]["back_en"] = "Back En";
	$fieldToolTipspl_posti["English"]["back_en"] = "";
	$fieldLabelspl_posti["English"]["note_it"] = "Note It";
	$fieldToolTipspl_posti["English"]["note_it"] = "";
	$fieldLabelspl_posti["English"]["note_en"] = "Note En";
	$fieldToolTipspl_posti["English"]["note_en"] = "";
	$fieldLabelspl_posti["English"]["attivo"] = "Attivo";
	$fieldToolTipspl_posti["English"]["attivo"] = "";
	if (count($fieldToolTipspl_posti["English"]))
		$tdatapl_posti[".isUseToolTips"] = true;
}
	
	
	$tdatapl_posti[".NCSearch"] = true;



$tdatapl_posti[".shortTableName"] = "pl_posti";
$tdatapl_posti[".nSecOptions"] = 0;
$tdatapl_posti[".recsPerRowList"] = 1;
$tdatapl_posti[".mainTableOwnerID"] = "";
$tdatapl_posti[".moveNext"] = 1;
$tdatapl_posti[".nType"] = 0;

$tdatapl_posti[".strOriginalTableName"] = "pl_posti";




$tdatapl_posti[".showAddInPopup"] = false;

$tdatapl_posti[".showEditInPopup"] = false;

$tdatapl_posti[".showViewInPopup"] = false;

$tdatapl_posti[".fieldsForRegister"] = array();

$tdatapl_posti[".listAjax"] = false;

	$tdatapl_posti[".audit"] = false;

	$tdatapl_posti[".locking"] = false;

$tdatapl_posti[".listIcons"] = true;
$tdatapl_posti[".edit"] = true;
$tdatapl_posti[".inlineEdit"] = true;
$tdatapl_posti[".inlineAdd"] = true;
$tdatapl_posti[".view"] = true;

$tdatapl_posti[".exportTo"] = true;

$tdatapl_posti[".printFriendly"] = true;

$tdatapl_posti[".delete"] = true;

$tdatapl_posti[".showSimpleSearchOptions"] = false;

$tdatapl_posti[".showSearchPanel"] = true;

if (isMobile())
	$tdatapl_posti[".isUseAjaxSuggest"] = false;
else 
	$tdatapl_posti[".isUseAjaxSuggest"] = true;

$tdatapl_posti[".rowHighlite"] = true;

// button handlers file names

$tdatapl_posti[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapl_posti[".isUseTimeForSearch"] = false;



$tdatapl_posti[".useDetailsPreview"] = true;

$tdatapl_posti[".allSearchFields"] = array();

$tdatapl_posti[".allSearchFields"][] = "id";
$tdatapl_posti[".allSearchFields"][] = "id_location";
$tdatapl_posti[".allSearchFields"][] = "id_citta";
$tdatapl_posti[".allSearchFields"][] = "id_regione";
$tdatapl_posti[".allSearchFields"][] = "posto";
$tdatapl_posti[".allSearchFields"][] = "nome_it";
$tdatapl_posti[".allSearchFields"][] = "nome_en";
$tdatapl_posti[".allSearchFields"][] = "descrizione_it";
$tdatapl_posti[".allSearchFields"][] = "descrizione_en";
$tdatapl_posti[".allSearchFields"][] = "storia_it";
$tdatapl_posti[".allSearchFields"][] = "storia_en";
$tdatapl_posti[".allSearchFields"][] = "back_it";
$tdatapl_posti[".allSearchFields"][] = "back_en";
$tdatapl_posti[".allSearchFields"][] = "note_it";
$tdatapl_posti[".allSearchFields"][] = "note_en";
$tdatapl_posti[".allSearchFields"][] = "attivo";

$tdatapl_posti[".googleLikeFields"][] = "id";
$tdatapl_posti[".googleLikeFields"][] = "id_location";
$tdatapl_posti[".googleLikeFields"][] = "id_citta";
$tdatapl_posti[".googleLikeFields"][] = "id_regione";
$tdatapl_posti[".googleLikeFields"][] = "posto";
$tdatapl_posti[".googleLikeFields"][] = "nome_it";
$tdatapl_posti[".googleLikeFields"][] = "nome_en";
$tdatapl_posti[".googleLikeFields"][] = "descrizione_it";
$tdatapl_posti[".googleLikeFields"][] = "descrizione_en";
$tdatapl_posti[".googleLikeFields"][] = "storia_it";
$tdatapl_posti[".googleLikeFields"][] = "storia_en";
$tdatapl_posti[".googleLikeFields"][] = "back_it";
$tdatapl_posti[".googleLikeFields"][] = "back_en";
$tdatapl_posti[".googleLikeFields"][] = "note_it";
$tdatapl_posti[".googleLikeFields"][] = "note_en";
$tdatapl_posti[".googleLikeFields"][] = "attivo";


$tdatapl_posti[".advSearchFields"][] = "id";
$tdatapl_posti[".advSearchFields"][] = "id_location";
$tdatapl_posti[".advSearchFields"][] = "id_citta";
$tdatapl_posti[".advSearchFields"][] = "id_regione";
$tdatapl_posti[".advSearchFields"][] = "posto";
$tdatapl_posti[".advSearchFields"][] = "nome_it";
$tdatapl_posti[".advSearchFields"][] = "nome_en";
$tdatapl_posti[".advSearchFields"][] = "descrizione_it";
$tdatapl_posti[".advSearchFields"][] = "descrizione_en";
$tdatapl_posti[".advSearchFields"][] = "storia_it";
$tdatapl_posti[".advSearchFields"][] = "storia_en";
$tdatapl_posti[".advSearchFields"][] = "back_it";
$tdatapl_posti[".advSearchFields"][] = "back_en";
$tdatapl_posti[".advSearchFields"][] = "note_it";
$tdatapl_posti[".advSearchFields"][] = "note_en";
$tdatapl_posti[".advSearchFields"][] = "attivo";

$tdatapl_posti[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
			


$tdatapl_posti[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapl_posti[".strOrderBy"] = $tstrOrderBy;

$tdatapl_posti[".orderindexes"] = array();

$tdatapl_posti[".sqlHead"] = "SELECT id,   id_location,   id_citta,   id_regione,   posto,   nome_it,   nome_en,   descrizione_it,   descrizione_en,   storia_it,   storia_en,   back_it,   back_en,   note_it,   note_en,   attivo";
$tdatapl_posti[".sqlFrom"] = "FROM pl_posti";
$tdatapl_posti[".sqlWhereExpr"] = "";
$tdatapl_posti[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapl_posti[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapl_posti[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspl_posti = array();
$tableKeyspl_posti[] = "id";
$tdatapl_posti[".Keys"] = $tableKeyspl_posti;

$tdatapl_posti[".listFields"] = array();
$tdatapl_posti[".listFields"][] = "id";
$tdatapl_posti[".listFields"][] = "id_location";
$tdatapl_posti[".listFields"][] = "id_citta";
$tdatapl_posti[".listFields"][] = "id_regione";
$tdatapl_posti[".listFields"][] = "posto";
$tdatapl_posti[".listFields"][] = "nome_it";
$tdatapl_posti[".listFields"][] = "nome_en";
$tdatapl_posti[".listFields"][] = "descrizione_it";
$tdatapl_posti[".listFields"][] = "descrizione_en";
$tdatapl_posti[".listFields"][] = "storia_it";
$tdatapl_posti[".listFields"][] = "storia_en";
$tdatapl_posti[".listFields"][] = "back_it";
$tdatapl_posti[".listFields"][] = "back_en";
$tdatapl_posti[".listFields"][] = "note_it";
$tdatapl_posti[".listFields"][] = "note_en";
$tdatapl_posti[".listFields"][] = "attivo";

$tdatapl_posti[".viewFields"] = array();
$tdatapl_posti[".viewFields"][] = "id";
$tdatapl_posti[".viewFields"][] = "id_location";
$tdatapl_posti[".viewFields"][] = "id_citta";
$tdatapl_posti[".viewFields"][] = "id_regione";
$tdatapl_posti[".viewFields"][] = "posto";
$tdatapl_posti[".viewFields"][] = "nome_it";
$tdatapl_posti[".viewFields"][] = "nome_en";
$tdatapl_posti[".viewFields"][] = "descrizione_it";
$tdatapl_posti[".viewFields"][] = "descrizione_en";
$tdatapl_posti[".viewFields"][] = "storia_it";
$tdatapl_posti[".viewFields"][] = "storia_en";
$tdatapl_posti[".viewFields"][] = "back_it";
$tdatapl_posti[".viewFields"][] = "back_en";
$tdatapl_posti[".viewFields"][] = "note_it";
$tdatapl_posti[".viewFields"][] = "note_en";
$tdatapl_posti[".viewFields"][] = "attivo";

$tdatapl_posti[".addFields"] = array();
$tdatapl_posti[".addFields"][] = "id_location";
$tdatapl_posti[".addFields"][] = "id_citta";
$tdatapl_posti[".addFields"][] = "id_regione";
$tdatapl_posti[".addFields"][] = "posto";
$tdatapl_posti[".addFields"][] = "nome_it";
$tdatapl_posti[".addFields"][] = "nome_en";
$tdatapl_posti[".addFields"][] = "descrizione_it";
$tdatapl_posti[".addFields"][] = "descrizione_en";
$tdatapl_posti[".addFields"][] = "storia_it";
$tdatapl_posti[".addFields"][] = "storia_en";
$tdatapl_posti[".addFields"][] = "back_it";
$tdatapl_posti[".addFields"][] = "back_en";
$tdatapl_posti[".addFields"][] = "note_it";
$tdatapl_posti[".addFields"][] = "note_en";
$tdatapl_posti[".addFields"][] = "attivo";

$tdatapl_posti[".inlineAddFields"] = array();
$tdatapl_posti[".inlineAddFields"][] = "id_location";
$tdatapl_posti[".inlineAddFields"][] = "id_citta";
$tdatapl_posti[".inlineAddFields"][] = "id_regione";
$tdatapl_posti[".inlineAddFields"][] = "posto";
$tdatapl_posti[".inlineAddFields"][] = "nome_it";
$tdatapl_posti[".inlineAddFields"][] = "nome_en";
$tdatapl_posti[".inlineAddFields"][] = "descrizione_it";
$tdatapl_posti[".inlineAddFields"][] = "descrizione_en";
$tdatapl_posti[".inlineAddFields"][] = "storia_it";
$tdatapl_posti[".inlineAddFields"][] = "storia_en";
$tdatapl_posti[".inlineAddFields"][] = "back_it";
$tdatapl_posti[".inlineAddFields"][] = "back_en";
$tdatapl_posti[".inlineAddFields"][] = "note_it";
$tdatapl_posti[".inlineAddFields"][] = "note_en";
$tdatapl_posti[".inlineAddFields"][] = "attivo";

$tdatapl_posti[".editFields"] = array();
$tdatapl_posti[".editFields"][] = "id_location";
$tdatapl_posti[".editFields"][] = "id_citta";
$tdatapl_posti[".editFields"][] = "id_regione";
$tdatapl_posti[".editFields"][] = "posto";
$tdatapl_posti[".editFields"][] = "nome_it";
$tdatapl_posti[".editFields"][] = "nome_en";
$tdatapl_posti[".editFields"][] = "descrizione_it";
$tdatapl_posti[".editFields"][] = "descrizione_en";
$tdatapl_posti[".editFields"][] = "storia_it";
$tdatapl_posti[".editFields"][] = "storia_en";
$tdatapl_posti[".editFields"][] = "back_it";
$tdatapl_posti[".editFields"][] = "back_en";
$tdatapl_posti[".editFields"][] = "note_it";
$tdatapl_posti[".editFields"][] = "note_en";
$tdatapl_posti[".editFields"][] = "attivo";

$tdatapl_posti[".inlineEditFields"] = array();
$tdatapl_posti[".inlineEditFields"][] = "id_location";
$tdatapl_posti[".inlineEditFields"][] = "id_citta";
$tdatapl_posti[".inlineEditFields"][] = "id_regione";
$tdatapl_posti[".inlineEditFields"][] = "posto";
$tdatapl_posti[".inlineEditFields"][] = "nome_it";
$tdatapl_posti[".inlineEditFields"][] = "nome_en";
$tdatapl_posti[".inlineEditFields"][] = "descrizione_it";
$tdatapl_posti[".inlineEditFields"][] = "descrizione_en";
$tdatapl_posti[".inlineEditFields"][] = "storia_it";
$tdatapl_posti[".inlineEditFields"][] = "storia_en";
$tdatapl_posti[".inlineEditFields"][] = "back_it";
$tdatapl_posti[".inlineEditFields"][] = "back_en";
$tdatapl_posti[".inlineEditFields"][] = "note_it";
$tdatapl_posti[".inlineEditFields"][] = "note_en";
$tdatapl_posti[".inlineEditFields"][] = "attivo";

$tdatapl_posti[".exportFields"] = array();
$tdatapl_posti[".exportFields"][] = "id";
$tdatapl_posti[".exportFields"][] = "id_location";
$tdatapl_posti[".exportFields"][] = "id_citta";
$tdatapl_posti[".exportFields"][] = "id_regione";
$tdatapl_posti[".exportFields"][] = "posto";
$tdatapl_posti[".exportFields"][] = "nome_it";
$tdatapl_posti[".exportFields"][] = "nome_en";
$tdatapl_posti[".exportFields"][] = "descrizione_it";
$tdatapl_posti[".exportFields"][] = "descrizione_en";
$tdatapl_posti[".exportFields"][] = "storia_it";
$tdatapl_posti[".exportFields"][] = "storia_en";
$tdatapl_posti[".exportFields"][] = "back_it";
$tdatapl_posti[".exportFields"][] = "back_en";
$tdatapl_posti[".exportFields"][] = "note_it";
$tdatapl_posti[".exportFields"][] = "note_en";
$tdatapl_posti[".exportFields"][] = "attivo";

$tdatapl_posti[".printFields"] = array();
$tdatapl_posti[".printFields"][] = "id";
$tdatapl_posti[".printFields"][] = "id_location";
$tdatapl_posti[".printFields"][] = "id_citta";
$tdatapl_posti[".printFields"][] = "id_regione";
$tdatapl_posti[".printFields"][] = "posto";
$tdatapl_posti[".printFields"][] = "nome_it";
$tdatapl_posti[".printFields"][] = "nome_en";
$tdatapl_posti[".printFields"][] = "descrizione_it";
$tdatapl_posti[".printFields"][] = "descrizione_en";
$tdatapl_posti[".printFields"][] = "storia_it";
$tdatapl_posti[".printFields"][] = "storia_en";
$tdatapl_posti[".printFields"][] = "back_it";
$tdatapl_posti[".printFields"][] = "back_en";
$tdatapl_posti[".printFields"][] = "note_it";
$tdatapl_posti[".printFields"][] = "note_en";
$tdatapl_posti[".printFields"][] = "attivo";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pl_posti";
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
	
		
		
	$tdatapl_posti["id"] = $fdata;
//	id_location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_location";
	$fdata["GoodName"] = "id_location";
	$fdata["ownerTable"] = "pl_posti";
	$fdata["Label"] = "Id Location"; 
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
	
		$fdata["strField"] = "id_location"; 
		$fdata["FullName"] = "id_location";
	
		
		
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
	$edata["DisplayField"] = "location";
	
		
	$edata["LookupTable"] = "pl_locations";
	$edata["LookupOrderBy"] = "location";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapl_posti["id_location"] = $fdata;
//	id_citta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_citta";
	$fdata["GoodName"] = "id_citta";
	$fdata["ownerTable"] = "pl_posti";
	$fdata["Label"] = "Id Citta"; 
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
	
		$fdata["strField"] = "id_citta"; 
		$fdata["FullName"] = "id_citta";
	
		
		
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
	$edata["DisplayField"] = "citta";
	
		
	$edata["LookupTable"] = "pl_citta";
	$edata["LookupOrderBy"] = "citta";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapl_posti["id_citta"] = $fdata;
//	id_regione
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_regione";
	$fdata["GoodName"] = "id_regione";
	$fdata["ownerTable"] = "pl_posti";
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
	
		
		
	$tdatapl_posti["id_regione"] = $fdata;
//	posto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "posto";
	$fdata["GoodName"] = "posto";
	$fdata["ownerTable"] = "pl_posti";
	$fdata["Label"] = "Posto"; 
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
	
		$fdata["strField"] = "posto"; 
		$fdata["FullName"] = "posto";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapl_posti["posto"] = $fdata;
//	nome_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nome_it";
	$fdata["GoodName"] = "nome_it";
	$fdata["ownerTable"] = "pl_posti";
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
	
		
		
	$tdatapl_posti["nome_it"] = $fdata;
//	nome_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nome_en";
	$fdata["GoodName"] = "nome_en";
	$fdata["ownerTable"] = "pl_posti";
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
	
		
		
	$tdatapl_posti["nome_en"] = $fdata;
//	descrizione_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "descrizione_it";
	$fdata["GoodName"] = "descrizione_it";
	$fdata["ownerTable"] = "pl_posti";
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
	
		
		
	$tdatapl_posti["descrizione_it"] = $fdata;
//	descrizione_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "descrizione_en";
	$fdata["GoodName"] = "descrizione_en";
	$fdata["ownerTable"] = "pl_posti";
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
	
		
		
	$tdatapl_posti["descrizione_en"] = $fdata;
//	storia_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "storia_it";
	$fdata["GoodName"] = "storia_it";
	$fdata["ownerTable"] = "pl_posti";
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
	
		
		
	$tdatapl_posti["storia_it"] = $fdata;
//	storia_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "storia_en";
	$fdata["GoodName"] = "storia_en";
	$fdata["ownerTable"] = "pl_posti";
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
	
		
		
	$tdatapl_posti["storia_en"] = $fdata;
//	back_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "back_it";
	$fdata["GoodName"] = "back_it";
	$fdata["ownerTable"] = "pl_posti";
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
	
		
		
	$tdatapl_posti["back_it"] = $fdata;
//	back_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "back_en";
	$fdata["GoodName"] = "back_en";
	$fdata["ownerTable"] = "pl_posti";
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
	
		
		
	$tdatapl_posti["back_en"] = $fdata;
//	note_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "note_it";
	$fdata["GoodName"] = "note_it";
	$fdata["ownerTable"] = "pl_posti";
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
	
		
		
	$tdatapl_posti["note_it"] = $fdata;
//	note_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "note_en";
	$fdata["GoodName"] = "note_en";
	$fdata["ownerTable"] = "pl_posti";
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
	
		
		
	$tdatapl_posti["note_en"] = $fdata;
//	attivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "attivo";
	$fdata["GoodName"] = "attivo";
	$fdata["ownerTable"] = "pl_posti";
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
	
		
		
	$tdatapl_posti["attivo"] = $fdata;

	
$tables_data["pl_posti"]=&$tdatapl_posti;
$field_labels["pl_posti"] = &$fieldLabelspl_posti;
$fieldToolTips["pl_posti"] = &$fieldToolTipspl_posti;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pl_posti"] = array();
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
		
	$detailsTablesData["pl_posti"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pl_posti"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["pl_posti"][$dIndex]["detailKeys"][]="id_posto";

$dIndex = 2-1;
			$strOriginalDetailsTable="pg_personaggi";
	$detailsParam["dDataSourceTable"]="pg_personaggi";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="pg_personaggi";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["pl_posti"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pl_posti"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["pl_posti"][$dIndex]["detailKeys"][]="id_posto";

$dIndex = 3-1;
			$strOriginalDetailsTable="pl_riferimenti_posti";
	$detailsParam["dDataSourceTable"]="pl_riferimenti_posti";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="pl_riferimenti_posti";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["pl_posti"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pl_posti"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["pl_posti"][$dIndex]["detailKeys"][]="id_posto_riferimento";

	
// tables which are master tables for current table (detail)
$masterTablesData["pl_posti"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="pl_citta";
	$masterParams["mDataSourceTable"]="pl_citta";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pl_citta";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["pl_posti"][$mIndex] = $masterParams;	
		$masterTablesData["pl_posti"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["pl_posti"][$mIndex]["detailKeys"][]="id_citta";

$mIndex = 2-1;
			$strOriginalDetailsTable="pl_locations";
	$masterParams["mDataSourceTable"]="pl_locations";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pl_locations";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["pl_posti"][$mIndex] = $masterParams;	
		$masterTablesData["pl_posti"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["pl_posti"][$mIndex]["detailKeys"][]="id_location";

$mIndex = 3-1;
			$strOriginalDetailsTable="pl_regioni";
	$masterParams["mDataSourceTable"]="pl_regioni";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pl_regioni";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["pl_posti"][$mIndex] = $masterParams;	
		$masterTablesData["pl_posti"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["pl_posti"][$mIndex]["detailKeys"][]="id_regione";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pl_posti()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   id_location,   id_citta,   id_regione,   posto,   nome_it,   nome_en,   descrizione_it,   descrizione_en,   storia_it,   storia_en,   back_it,   back_en,   note_it,   note_en,   attivo";
$proto0["m_strFrom"] = "FROM pl_posti";
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
	"m_strTable" => "pl_posti"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_location",
	"m_strTable" => "pl_posti"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id_citta",
	"m_strTable" => "pl_posti"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "id_regione",
	"m_strTable" => "pl_posti"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "posto",
	"m_strTable" => "pl_posti"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_it",
	"m_strTable" => "pl_posti"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_en",
	"m_strTable" => "pl_posti"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "descrizione_it",
	"m_strTable" => "pl_posti"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "descrizione_en",
	"m_strTable" => "pl_posti"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "storia_it",
	"m_strTable" => "pl_posti"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "storia_en",
	"m_strTable" => "pl_posti"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "back_it",
	"m_strTable" => "pl_posti"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "back_en",
	"m_strTable" => "pl_posti"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "note_it",
	"m_strTable" => "pl_posti"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "note_en",
	"m_strTable" => "pl_posti"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "attivo",
	"m_strTable" => "pl_posti"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "pl_posti";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "id";
$proto38["m_columns"][] = "id_location";
$proto38["m_columns"][] = "id_citta";
$proto38["m_columns"][] = "id_regione";
$proto38["m_columns"][] = "posto";
$proto38["m_columns"][] = "nome_it";
$proto38["m_columns"][] = "nome_en";
$proto38["m_columns"][] = "descrizione_it";
$proto38["m_columns"][] = "descrizione_en";
$proto38["m_columns"][] = "storia_it";
$proto38["m_columns"][] = "storia_en";
$proto38["m_columns"][] = "back_it";
$proto38["m_columns"][] = "back_en";
$proto38["m_columns"][] = "note_it";
$proto38["m_columns"][] = "note_en";
$proto38["m_columns"][] = "attivo";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_alias"] = "";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = "0";
$proto39["m_inBrackets"] = "0";
$proto39["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pl_posti = createSqlQuery_pl_posti();
																$tdatapl_posti[".sqlquery"] = $queryData_pl_posti;

$tableEvents["pl_posti"] = new eventsBase;
$tdatapl_posti[".hasEvents"] = false;

$cipherer = new RunnerCipherer("pl_posti");

?>