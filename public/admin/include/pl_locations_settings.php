<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapl_locations = array();
	$tdatapl_locations[".NumberOfChars"] = 80; 
	$tdatapl_locations[".ShortName"] = "pl_locations";
	$tdatapl_locations[".OwnerID"] = "";
	$tdatapl_locations[".OriginalTable"] = "pl_locations";

//	field labels
$fieldLabelspl_locations = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspl_locations["English"] = array();
	$fieldToolTipspl_locations["English"] = array();
	$fieldLabelspl_locations["English"]["id"] = "Id";
	$fieldToolTipspl_locations["English"]["id"] = "";
	$fieldLabelspl_locations["English"]["location"] = "Location";
	$fieldToolTipspl_locations["English"]["location"] = "";
	$fieldLabelspl_locations["English"]["nome_it"] = "Nome It";
	$fieldToolTipspl_locations["English"]["nome_it"] = "";
	$fieldLabelspl_locations["English"]["nome_en"] = "Nome En";
	$fieldToolTipspl_locations["English"]["nome_en"] = "";
	$fieldLabelspl_locations["English"]["descrizione_it"] = "Descrizione It";
	$fieldToolTipspl_locations["English"]["descrizione_it"] = "";
	$fieldLabelspl_locations["English"]["descrizione_en"] = "Descrizione En";
	$fieldToolTipspl_locations["English"]["descrizione_en"] = "";
	$fieldLabelspl_locations["English"]["attivo"] = "Attivo";
	$fieldToolTipspl_locations["English"]["attivo"] = "";
	if (count($fieldToolTipspl_locations["English"]))
		$tdatapl_locations[".isUseToolTips"] = true;
}
	
	
	$tdatapl_locations[".NCSearch"] = true;



$tdatapl_locations[".shortTableName"] = "pl_locations";
$tdatapl_locations[".nSecOptions"] = 0;
$tdatapl_locations[".recsPerRowList"] = 1;
$tdatapl_locations[".mainTableOwnerID"] = "";
$tdatapl_locations[".moveNext"] = 1;
$tdatapl_locations[".nType"] = 0;

$tdatapl_locations[".strOriginalTableName"] = "pl_locations";




$tdatapl_locations[".showAddInPopup"] = false;

$tdatapl_locations[".showEditInPopup"] = false;

$tdatapl_locations[".showViewInPopup"] = false;

$tdatapl_locations[".fieldsForRegister"] = array();

$tdatapl_locations[".listAjax"] = false;

	$tdatapl_locations[".audit"] = false;

	$tdatapl_locations[".locking"] = false;

$tdatapl_locations[".listIcons"] = true;
$tdatapl_locations[".edit"] = true;
$tdatapl_locations[".inlineEdit"] = true;
$tdatapl_locations[".inlineAdd"] = true;
$tdatapl_locations[".view"] = true;

$tdatapl_locations[".exportTo"] = true;

$tdatapl_locations[".printFriendly"] = true;

$tdatapl_locations[".delete"] = true;

$tdatapl_locations[".showSimpleSearchOptions"] = false;

$tdatapl_locations[".showSearchPanel"] = true;

if (isMobile())
	$tdatapl_locations[".isUseAjaxSuggest"] = false;
else 
	$tdatapl_locations[".isUseAjaxSuggest"] = true;

$tdatapl_locations[".rowHighlite"] = true;

// button handlers file names

$tdatapl_locations[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapl_locations[".isUseTimeForSearch"] = false;



$tdatapl_locations[".useDetailsPreview"] = true;

$tdatapl_locations[".allSearchFields"] = array();

$tdatapl_locations[".allSearchFields"][] = "id";
$tdatapl_locations[".allSearchFields"][] = "location";
$tdatapl_locations[".allSearchFields"][] = "nome_it";
$tdatapl_locations[".allSearchFields"][] = "nome_en";
$tdatapl_locations[".allSearchFields"][] = "descrizione_it";
$tdatapl_locations[".allSearchFields"][] = "descrizione_en";
$tdatapl_locations[".allSearchFields"][] = "attivo";

$tdatapl_locations[".googleLikeFields"][] = "id";
$tdatapl_locations[".googleLikeFields"][] = "location";
$tdatapl_locations[".googleLikeFields"][] = "nome_it";
$tdatapl_locations[".googleLikeFields"][] = "nome_en";
$tdatapl_locations[".googleLikeFields"][] = "descrizione_it";
$tdatapl_locations[".googleLikeFields"][] = "descrizione_en";
$tdatapl_locations[".googleLikeFields"][] = "attivo";


$tdatapl_locations[".advSearchFields"][] = "id";
$tdatapl_locations[".advSearchFields"][] = "location";
$tdatapl_locations[".advSearchFields"][] = "nome_it";
$tdatapl_locations[".advSearchFields"][] = "nome_en";
$tdatapl_locations[".advSearchFields"][] = "descrizione_it";
$tdatapl_locations[".advSearchFields"][] = "descrizione_en";
$tdatapl_locations[".advSearchFields"][] = "attivo";

$tdatapl_locations[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatapl_locations[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapl_locations[".strOrderBy"] = $tstrOrderBy;

$tdatapl_locations[".orderindexes"] = array();

$tdatapl_locations[".sqlHead"] = "SELECT id,   location,   nome_it,   nome_en,   descrizione_it,   descrizione_en,   attivo";
$tdatapl_locations[".sqlFrom"] = "FROM pl_locations";
$tdatapl_locations[".sqlWhereExpr"] = "";
$tdatapl_locations[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapl_locations[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapl_locations[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspl_locations = array();
$tableKeyspl_locations[] = "id";
$tdatapl_locations[".Keys"] = $tableKeyspl_locations;

$tdatapl_locations[".listFields"] = array();
$tdatapl_locations[".listFields"][] = "id";
$tdatapl_locations[".listFields"][] = "location";
$tdatapl_locations[".listFields"][] = "nome_it";
$tdatapl_locations[".listFields"][] = "nome_en";
$tdatapl_locations[".listFields"][] = "descrizione_it";
$tdatapl_locations[".listFields"][] = "descrizione_en";
$tdatapl_locations[".listFields"][] = "attivo";

$tdatapl_locations[".viewFields"] = array();
$tdatapl_locations[".viewFields"][] = "id";
$tdatapl_locations[".viewFields"][] = "location";
$tdatapl_locations[".viewFields"][] = "nome_it";
$tdatapl_locations[".viewFields"][] = "nome_en";
$tdatapl_locations[".viewFields"][] = "descrizione_it";
$tdatapl_locations[".viewFields"][] = "descrizione_en";
$tdatapl_locations[".viewFields"][] = "attivo";

$tdatapl_locations[".addFields"] = array();
$tdatapl_locations[".addFields"][] = "location";
$tdatapl_locations[".addFields"][] = "nome_it";
$tdatapl_locations[".addFields"][] = "nome_en";
$tdatapl_locations[".addFields"][] = "descrizione_it";
$tdatapl_locations[".addFields"][] = "descrizione_en";
$tdatapl_locations[".addFields"][] = "attivo";

$tdatapl_locations[".inlineAddFields"] = array();
$tdatapl_locations[".inlineAddFields"][] = "location";
$tdatapl_locations[".inlineAddFields"][] = "nome_it";
$tdatapl_locations[".inlineAddFields"][] = "nome_en";
$tdatapl_locations[".inlineAddFields"][] = "descrizione_it";
$tdatapl_locations[".inlineAddFields"][] = "descrizione_en";
$tdatapl_locations[".inlineAddFields"][] = "attivo";

$tdatapl_locations[".editFields"] = array();
$tdatapl_locations[".editFields"][] = "location";
$tdatapl_locations[".editFields"][] = "nome_it";
$tdatapl_locations[".editFields"][] = "nome_en";
$tdatapl_locations[".editFields"][] = "descrizione_it";
$tdatapl_locations[".editFields"][] = "descrizione_en";
$tdatapl_locations[".editFields"][] = "attivo";

$tdatapl_locations[".inlineEditFields"] = array();
$tdatapl_locations[".inlineEditFields"][] = "location";
$tdatapl_locations[".inlineEditFields"][] = "nome_it";
$tdatapl_locations[".inlineEditFields"][] = "nome_en";
$tdatapl_locations[".inlineEditFields"][] = "descrizione_it";
$tdatapl_locations[".inlineEditFields"][] = "descrizione_en";
$tdatapl_locations[".inlineEditFields"][] = "attivo";

$tdatapl_locations[".exportFields"] = array();
$tdatapl_locations[".exportFields"][] = "id";
$tdatapl_locations[".exportFields"][] = "location";
$tdatapl_locations[".exportFields"][] = "nome_it";
$tdatapl_locations[".exportFields"][] = "nome_en";
$tdatapl_locations[".exportFields"][] = "descrizione_it";
$tdatapl_locations[".exportFields"][] = "descrizione_en";
$tdatapl_locations[".exportFields"][] = "attivo";

$tdatapl_locations[".printFields"] = array();
$tdatapl_locations[".printFields"][] = "id";
$tdatapl_locations[".printFields"][] = "location";
$tdatapl_locations[".printFields"][] = "nome_it";
$tdatapl_locations[".printFields"][] = "nome_en";
$tdatapl_locations[".printFields"][] = "descrizione_it";
$tdatapl_locations[".printFields"][] = "descrizione_en";
$tdatapl_locations[".printFields"][] = "attivo";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pl_locations";
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
	
		
		
	$tdatapl_locations["id"] = $fdata;
//	location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "location";
	$fdata["GoodName"] = "location";
	$fdata["ownerTable"] = "pl_locations";
	$fdata["Label"] = "Location"; 
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
	
		$fdata["strField"] = "location"; 
		$fdata["FullName"] = "location";
	
		
		
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
	
		
		
	$tdatapl_locations["location"] = $fdata;
//	nome_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nome_it";
	$fdata["GoodName"] = "nome_it";
	$fdata["ownerTable"] = "pl_locations";
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
	
		
		
	$tdatapl_locations["nome_it"] = $fdata;
//	nome_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nome_en";
	$fdata["GoodName"] = "nome_en";
	$fdata["ownerTable"] = "pl_locations";
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
	
		
		
	$tdatapl_locations["nome_en"] = $fdata;
//	descrizione_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descrizione_it";
	$fdata["GoodName"] = "descrizione_it";
	$fdata["ownerTable"] = "pl_locations";
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
	
		
		
	$tdatapl_locations["descrizione_it"] = $fdata;
//	descrizione_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "descrizione_en";
	$fdata["GoodName"] = "descrizione_en";
	$fdata["ownerTable"] = "pl_locations";
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
	
		
		
	$tdatapl_locations["descrizione_en"] = $fdata;
//	attivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "attivo";
	$fdata["GoodName"] = "attivo";
	$fdata["ownerTable"] = "pl_locations";
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
	
		
		
	$tdatapl_locations["attivo"] = $fdata;

	
$tables_data["pl_locations"]=&$tdatapl_locations;
$field_labels["pl_locations"] = &$fieldLabelspl_locations;
$fieldToolTips["pl_locations"] = &$fieldToolTipspl_locations;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pl_locations"] = array();
$dIndex = 1-1;
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
		
	$detailsTablesData["pl_locations"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pl_locations"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["pl_locations"][$dIndex]["detailKeys"][]="id_location";

	
// tables which are master tables for current table (detail)
$masterTablesData["pl_locations"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pl_locations()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   location,   nome_it,   nome_en,   descrizione_it,   descrizione_en,   attivo";
$proto0["m_strFrom"] = "FROM pl_locations";
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
	"m_strTable" => "pl_locations"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "location",
	"m_strTable" => "pl_locations"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_it",
	"m_strTable" => "pl_locations"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_en",
	"m_strTable" => "pl_locations"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "descrizione_it",
	"m_strTable" => "pl_locations"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "descrizione_en",
	"m_strTable" => "pl_locations"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "attivo",
	"m_strTable" => "pl_locations"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "pl_locations";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "location";
$proto20["m_columns"][] = "nome_it";
$proto20["m_columns"][] = "nome_en";
$proto20["m_columns"][] = "descrizione_it";
$proto20["m_columns"][] = "descrizione_en";
$proto20["m_columns"][] = "attivo";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pl_locations = createSqlQuery_pl_locations();
							$tdatapl_locations[".sqlquery"] = $queryData_pl_locations;

$tableEvents["pl_locations"] = new eventsBase;
$tdatapl_locations[".hasEvents"] = false;

$cipherer = new RunnerCipherer("pl_locations");

?>