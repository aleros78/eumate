<?php
require_once(getabspath("classes/cipherer.php"));
$tdatage_messaggi = array();
	$tdatage_messaggi[".NumberOfChars"] = 80; 
	$tdatage_messaggi[".ShortName"] = "ge_messaggi";
	$tdatage_messaggi[".OwnerID"] = "";
	$tdatage_messaggi[".OriginalTable"] = "ge_messaggi";

//	field labels
$fieldLabelsge_messaggi = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsge_messaggi["English"] = array();
	$fieldToolTipsge_messaggi["English"] = array();
	$fieldLabelsge_messaggi["English"]["id"] = "Id";
	$fieldToolTipsge_messaggi["English"]["id"] = "";
	$fieldLabelsge_messaggi["English"]["id_personaggio"] = "Id Personaggio";
	$fieldToolTipsge_messaggi["English"]["id_personaggio"] = "";
	$fieldLabelsge_messaggi["English"]["id_gilda"] = "Id Gilda";
	$fieldToolTipsge_messaggi["English"]["id_gilda"] = "";
	$fieldLabelsge_messaggi["English"]["id_posto"] = "Id Posto";
	$fieldToolTipsge_messaggi["English"]["id_posto"] = "";
	$fieldLabelsge_messaggi["English"]["messaggio"] = "Messaggio";
	$fieldToolTipsge_messaggi["English"]["messaggio"] = "";
	$fieldLabelsge_messaggi["English"]["data"] = "Data";
	$fieldToolTipsge_messaggi["English"]["data"] = "";
	if (count($fieldToolTipsge_messaggi["English"]))
		$tdatage_messaggi[".isUseToolTips"] = true;
}
	
	
	$tdatage_messaggi[".NCSearch"] = true;



$tdatage_messaggi[".shortTableName"] = "ge_messaggi";
$tdatage_messaggi[".nSecOptions"] = 0;
$tdatage_messaggi[".recsPerRowList"] = 1;
$tdatage_messaggi[".mainTableOwnerID"] = "";
$tdatage_messaggi[".moveNext"] = 1;
$tdatage_messaggi[".nType"] = 0;

$tdatage_messaggi[".strOriginalTableName"] = "ge_messaggi";




$tdatage_messaggi[".showAddInPopup"] = false;

$tdatage_messaggi[".showEditInPopup"] = false;

$tdatage_messaggi[".showViewInPopup"] = false;

$tdatage_messaggi[".fieldsForRegister"] = array();

$tdatage_messaggi[".listAjax"] = false;

	$tdatage_messaggi[".audit"] = false;

	$tdatage_messaggi[".locking"] = false;

$tdatage_messaggi[".listIcons"] = true;
$tdatage_messaggi[".edit"] = true;
$tdatage_messaggi[".inlineEdit"] = true;
$tdatage_messaggi[".inlineAdd"] = true;
$tdatage_messaggi[".view"] = true;

$tdatage_messaggi[".exportTo"] = true;

$tdatage_messaggi[".printFriendly"] = true;

$tdatage_messaggi[".delete"] = true;

$tdatage_messaggi[".showSimpleSearchOptions"] = false;

$tdatage_messaggi[".showSearchPanel"] = true;

if (isMobile())
	$tdatage_messaggi[".isUseAjaxSuggest"] = false;
else 
	$tdatage_messaggi[".isUseAjaxSuggest"] = true;

$tdatage_messaggi[".rowHighlite"] = true;

// button handlers file names

$tdatage_messaggi[".addPageEvents"] = false;

// use timepicker for search panel
$tdatage_messaggi[".isUseTimeForSearch"] = false;




$tdatage_messaggi[".allSearchFields"] = array();

$tdatage_messaggi[".allSearchFields"][] = "id";
$tdatage_messaggi[".allSearchFields"][] = "id_personaggio";
$tdatage_messaggi[".allSearchFields"][] = "id_gilda";
$tdatage_messaggi[".allSearchFields"][] = "id_posto";
$tdatage_messaggi[".allSearchFields"][] = "messaggio";
$tdatage_messaggi[".allSearchFields"][] = "data";

$tdatage_messaggi[".googleLikeFields"][] = "id";
$tdatage_messaggi[".googleLikeFields"][] = "id_personaggio";
$tdatage_messaggi[".googleLikeFields"][] = "id_gilda";
$tdatage_messaggi[".googleLikeFields"][] = "id_posto";
$tdatage_messaggi[".googleLikeFields"][] = "messaggio";
$tdatage_messaggi[".googleLikeFields"][] = "data";


$tdatage_messaggi[".advSearchFields"][] = "id";
$tdatage_messaggi[".advSearchFields"][] = "id_personaggio";
$tdatage_messaggi[".advSearchFields"][] = "id_gilda";
$tdatage_messaggi[".advSearchFields"][] = "id_posto";
$tdatage_messaggi[".advSearchFields"][] = "messaggio";
$tdatage_messaggi[".advSearchFields"][] = "data";

$tdatage_messaggi[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatage_messaggi[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatage_messaggi[".strOrderBy"] = $tstrOrderBy;

$tdatage_messaggi[".orderindexes"] = array();

$tdatage_messaggi[".sqlHead"] = "SELECT id,  id_personaggio,  id_gilda,  id_posto,  messaggio,  `data`";
$tdatage_messaggi[".sqlFrom"] = "FROM ge_messaggi";
$tdatage_messaggi[".sqlWhereExpr"] = "";
$tdatage_messaggi[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatage_messaggi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatage_messaggi[".arrGroupsPerPage"] = $arrGPP;

$tableKeysge_messaggi = array();
$tableKeysge_messaggi[] = "id";
$tdatage_messaggi[".Keys"] = $tableKeysge_messaggi;

$tdatage_messaggi[".listFields"] = array();
$tdatage_messaggi[".listFields"][] = "id";
$tdatage_messaggi[".listFields"][] = "id_personaggio";
$tdatage_messaggi[".listFields"][] = "id_gilda";
$tdatage_messaggi[".listFields"][] = "id_posto";
$tdatage_messaggi[".listFields"][] = "messaggio";
$tdatage_messaggi[".listFields"][] = "data";

$tdatage_messaggi[".viewFields"] = array();
$tdatage_messaggi[".viewFields"][] = "id";
$tdatage_messaggi[".viewFields"][] = "id_personaggio";
$tdatage_messaggi[".viewFields"][] = "id_gilda";
$tdatage_messaggi[".viewFields"][] = "id_posto";
$tdatage_messaggi[".viewFields"][] = "messaggio";
$tdatage_messaggi[".viewFields"][] = "data";

$tdatage_messaggi[".addFields"] = array();
$tdatage_messaggi[".addFields"][] = "id_personaggio";
$tdatage_messaggi[".addFields"][] = "id_gilda";
$tdatage_messaggi[".addFields"][] = "id_posto";
$tdatage_messaggi[".addFields"][] = "messaggio";
$tdatage_messaggi[".addFields"][] = "data";

$tdatage_messaggi[".inlineAddFields"] = array();
$tdatage_messaggi[".inlineAddFields"][] = "id_personaggio";
$tdatage_messaggi[".inlineAddFields"][] = "id_gilda";
$tdatage_messaggi[".inlineAddFields"][] = "id_posto";
$tdatage_messaggi[".inlineAddFields"][] = "messaggio";
$tdatage_messaggi[".inlineAddFields"][] = "data";

$tdatage_messaggi[".editFields"] = array();
$tdatage_messaggi[".editFields"][] = "id_personaggio";
$tdatage_messaggi[".editFields"][] = "id_gilda";
$tdatage_messaggi[".editFields"][] = "id_posto";
$tdatage_messaggi[".editFields"][] = "messaggio";
$tdatage_messaggi[".editFields"][] = "data";

$tdatage_messaggi[".inlineEditFields"] = array();
$tdatage_messaggi[".inlineEditFields"][] = "id_personaggio";
$tdatage_messaggi[".inlineEditFields"][] = "id_gilda";
$tdatage_messaggi[".inlineEditFields"][] = "id_posto";
$tdatage_messaggi[".inlineEditFields"][] = "messaggio";
$tdatage_messaggi[".inlineEditFields"][] = "data";

$tdatage_messaggi[".exportFields"] = array();
$tdatage_messaggi[".exportFields"][] = "id";
$tdatage_messaggi[".exportFields"][] = "id_personaggio";
$tdatage_messaggi[".exportFields"][] = "id_gilda";
$tdatage_messaggi[".exportFields"][] = "id_posto";
$tdatage_messaggi[".exportFields"][] = "messaggio";
$tdatage_messaggi[".exportFields"][] = "data";

$tdatage_messaggi[".printFields"] = array();
$tdatage_messaggi[".printFields"][] = "id";
$tdatage_messaggi[".printFields"][] = "id_personaggio";
$tdatage_messaggi[".printFields"][] = "id_gilda";
$tdatage_messaggi[".printFields"][] = "id_posto";
$tdatage_messaggi[".printFields"][] = "messaggio";
$tdatage_messaggi[".printFields"][] = "data";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ge_messaggi";
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
	
		
		
	$tdatage_messaggi["id"] = $fdata;
//	id_personaggio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_personaggio";
	$fdata["GoodName"] = "id_personaggio";
	$fdata["ownerTable"] = "ge_messaggi";
	$fdata["Label"] = "Id Personaggio"; 
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
	
		$fdata["strField"] = "id_personaggio"; 
		$fdata["FullName"] = "id_personaggio";
	
		
		
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
	
		
	$edata["LookupTable"] = "pg_personaggi";
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
	
		
		
	$tdatage_messaggi["id_personaggio"] = $fdata;
//	id_gilda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_gilda";
	$fdata["GoodName"] = "id_gilda";
	$fdata["ownerTable"] = "ge_messaggi";
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
	
		
		
	$tdatage_messaggi["id_gilda"] = $fdata;
//	id_posto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_posto";
	$fdata["GoodName"] = "id_posto";
	$fdata["ownerTable"] = "ge_messaggi";
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
	$edata["LookupOrderBy"] = "posto";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatage_messaggi["id_posto"] = $fdata;
//	messaggio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "messaggio";
	$fdata["GoodName"] = "messaggio";
	$fdata["ownerTable"] = "ge_messaggi";
	$fdata["Label"] = "Messaggio"; 
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
	
		$fdata["strField"] = "messaggio"; 
		$fdata["FullName"] = "messaggio";
	
		
		
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
			$edata["nCols"] = 500;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatage_messaggi["messaggio"] = $fdata;
//	data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "data";
	$fdata["GoodName"] = "data";
	$fdata["ownerTable"] = "ge_messaggi";
	$fdata["Label"] = "Data"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "data"; 
		$fdata["FullName"] = "`data`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatage_messaggi["data"] = $fdata;

	
$tables_data["ge_messaggi"]=&$tdatage_messaggi;
$field_labels["ge_messaggi"] = &$fieldLabelsge_messaggi;
$fieldToolTips["ge_messaggi"] = &$fieldToolTipsge_messaggi;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ge_messaggi"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["ge_messaggi"] = array();

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
	$masterTablesData["ge_messaggi"][$mIndex] = $masterParams;	
		$masterTablesData["ge_messaggi"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["ge_messaggi"][$mIndex]["detailKeys"][]="id_gilda";

$mIndex = 2-1;
			$strOriginalDetailsTable="pg_personaggi";
	$masterParams["mDataSourceTable"]="pg_personaggi";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pg_personaggi";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["ge_messaggi"][$mIndex] = $masterParams;	
		$masterTablesData["ge_messaggi"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["ge_messaggi"][$mIndex]["detailKeys"][]="id_personaggio";

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
	$masterTablesData["ge_messaggi"][$mIndex] = $masterParams;	
		$masterTablesData["ge_messaggi"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["ge_messaggi"][$mIndex]["detailKeys"][]="id_posto";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ge_messaggi()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  id_personaggio,  id_gilda,  id_posto,  messaggio,  `data`";
$proto0["m_strFrom"] = "FROM ge_messaggi";
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
	"m_strTable" => "ge_messaggi"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_personaggio",
	"m_strTable" => "ge_messaggi"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id_gilda",
	"m_strTable" => "ge_messaggi"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "id_posto",
	"m_strTable" => "ge_messaggi"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "messaggio",
	"m_strTable" => "ge_messaggi"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "ge_messaggi"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "ge_messaggi";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "id_personaggio";
$proto18["m_columns"][] = "id_gilda";
$proto18["m_columns"][] = "id_posto";
$proto18["m_columns"][] = "messaggio";
$proto18["m_columns"][] = "data";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ge_messaggi = createSqlQuery_ge_messaggi();
						$tdatage_messaggi[".sqlquery"] = $queryData_ge_messaggi;

$tableEvents["ge_messaggi"] = new eventsBase;
$tdatage_messaggi[".hasEvents"] = false;

$cipherer = new RunnerCipherer("ge_messaggi");

?>