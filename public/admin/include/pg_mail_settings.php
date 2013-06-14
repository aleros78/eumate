<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapg_mail = array();
	$tdatapg_mail[".NumberOfChars"] = 80; 
	$tdatapg_mail[".ShortName"] = "pg_mail";
	$tdatapg_mail[".OwnerID"] = "";
	$tdatapg_mail[".OriginalTable"] = "pg_mail";

//	field labels
$fieldLabelspg_mail = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspg_mail["English"] = array();
	$fieldToolTipspg_mail["English"] = array();
	$fieldLabelspg_mail["English"]["id"] = "Id";
	$fieldToolTipspg_mail["English"]["id"] = "";
	$fieldLabelspg_mail["English"]["invia"] = "Invia";
	$fieldToolTipspg_mail["English"]["invia"] = "";
	$fieldLabelspg_mail["English"]["ricevi"] = "Ricevi";
	$fieldToolTipspg_mail["English"]["ricevi"] = "";
	$fieldLabelspg_mail["English"]["messaggio"] = "Messaggio";
	$fieldToolTipspg_mail["English"]["messaggio"] = "";
	$fieldLabelspg_mail["English"]["soggetto"] = "Soggetto";
	$fieldToolTipspg_mail["English"]["soggetto"] = "";
	$fieldLabelspg_mail["English"]["data"] = "Data";
	$fieldToolTipspg_mail["English"]["data"] = "";
	$fieldLabelspg_mail["English"]["aperta"] = "Aperta";
	$fieldToolTipspg_mail["English"]["aperta"] = "";
	$fieldLabelspg_mail["English"]["vista_invia"] = "Vista Invia";
	$fieldToolTipspg_mail["English"]["vista_invia"] = "";
	$fieldLabelspg_mail["English"]["vista_ricevi"] = "Vista Ricevi";
	$fieldToolTipspg_mail["English"]["vista_ricevi"] = "";
	if (count($fieldToolTipspg_mail["English"]))
		$tdatapg_mail[".isUseToolTips"] = true;
}
	
	
	$tdatapg_mail[".NCSearch"] = true;



$tdatapg_mail[".shortTableName"] = "pg_mail";
$tdatapg_mail[".nSecOptions"] = 0;
$tdatapg_mail[".recsPerRowList"] = 1;
$tdatapg_mail[".mainTableOwnerID"] = "";
$tdatapg_mail[".moveNext"] = 1;
$tdatapg_mail[".nType"] = 0;

$tdatapg_mail[".strOriginalTableName"] = "pg_mail";




$tdatapg_mail[".showAddInPopup"] = false;

$tdatapg_mail[".showEditInPopup"] = false;

$tdatapg_mail[".showViewInPopup"] = false;

$tdatapg_mail[".fieldsForRegister"] = array();

$tdatapg_mail[".listAjax"] = false;

	$tdatapg_mail[".audit"] = false;

	$tdatapg_mail[".locking"] = false;

$tdatapg_mail[".listIcons"] = true;
$tdatapg_mail[".edit"] = true;
$tdatapg_mail[".inlineEdit"] = true;
$tdatapg_mail[".inlineAdd"] = true;
$tdatapg_mail[".view"] = true;

$tdatapg_mail[".exportTo"] = true;

$tdatapg_mail[".printFriendly"] = true;

$tdatapg_mail[".delete"] = true;

$tdatapg_mail[".showSimpleSearchOptions"] = false;

$tdatapg_mail[".showSearchPanel"] = true;

if (isMobile())
	$tdatapg_mail[".isUseAjaxSuggest"] = false;
else 
	$tdatapg_mail[".isUseAjaxSuggest"] = true;

$tdatapg_mail[".rowHighlite"] = true;

// button handlers file names

$tdatapg_mail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapg_mail[".isUseTimeForSearch"] = false;




$tdatapg_mail[".allSearchFields"] = array();

$tdatapg_mail[".allSearchFields"][] = "id";
$tdatapg_mail[".allSearchFields"][] = "invia";
$tdatapg_mail[".allSearchFields"][] = "ricevi";
$tdatapg_mail[".allSearchFields"][] = "messaggio";
$tdatapg_mail[".allSearchFields"][] = "soggetto";
$tdatapg_mail[".allSearchFields"][] = "data";
$tdatapg_mail[".allSearchFields"][] = "aperta";
$tdatapg_mail[".allSearchFields"][] = "vista_invia";
$tdatapg_mail[".allSearchFields"][] = "vista_ricevi";

$tdatapg_mail[".googleLikeFields"][] = "id";
$tdatapg_mail[".googleLikeFields"][] = "invia";
$tdatapg_mail[".googleLikeFields"][] = "ricevi";
$tdatapg_mail[".googleLikeFields"][] = "messaggio";
$tdatapg_mail[".googleLikeFields"][] = "soggetto";
$tdatapg_mail[".googleLikeFields"][] = "data";
$tdatapg_mail[".googleLikeFields"][] = "aperta";
$tdatapg_mail[".googleLikeFields"][] = "vista_invia";
$tdatapg_mail[".googleLikeFields"][] = "vista_ricevi";


$tdatapg_mail[".advSearchFields"][] = "id";
$tdatapg_mail[".advSearchFields"][] = "invia";
$tdatapg_mail[".advSearchFields"][] = "ricevi";
$tdatapg_mail[".advSearchFields"][] = "messaggio";
$tdatapg_mail[".advSearchFields"][] = "soggetto";
$tdatapg_mail[".advSearchFields"][] = "data";
$tdatapg_mail[".advSearchFields"][] = "aperta";
$tdatapg_mail[".advSearchFields"][] = "vista_invia";
$tdatapg_mail[".advSearchFields"][] = "vista_ricevi";

$tdatapg_mail[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatapg_mail[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapg_mail[".strOrderBy"] = $tstrOrderBy;

$tdatapg_mail[".orderindexes"] = array();

$tdatapg_mail[".sqlHead"] = "SELECT id,   invia,   ricevi,   messaggio,   soggetto,   `data`,   aperta,   vista_invia,   vista_ricevi";
$tdatapg_mail[".sqlFrom"] = "FROM pg_mail";
$tdatapg_mail[".sqlWhereExpr"] = "";
$tdatapg_mail[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapg_mail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapg_mail[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspg_mail = array();
$tableKeyspg_mail[] = "id";
$tdatapg_mail[".Keys"] = $tableKeyspg_mail;

$tdatapg_mail[".listFields"] = array();
$tdatapg_mail[".listFields"][] = "id";
$tdatapg_mail[".listFields"][] = "invia";
$tdatapg_mail[".listFields"][] = "ricevi";
$tdatapg_mail[".listFields"][] = "messaggio";
$tdatapg_mail[".listFields"][] = "soggetto";
$tdatapg_mail[".listFields"][] = "data";
$tdatapg_mail[".listFields"][] = "aperta";
$tdatapg_mail[".listFields"][] = "vista_invia";
$tdatapg_mail[".listFields"][] = "vista_ricevi";

$tdatapg_mail[".viewFields"] = array();
$tdatapg_mail[".viewFields"][] = "id";
$tdatapg_mail[".viewFields"][] = "invia";
$tdatapg_mail[".viewFields"][] = "ricevi";
$tdatapg_mail[".viewFields"][] = "messaggio";
$tdatapg_mail[".viewFields"][] = "soggetto";
$tdatapg_mail[".viewFields"][] = "data";
$tdatapg_mail[".viewFields"][] = "aperta";
$tdatapg_mail[".viewFields"][] = "vista_invia";
$tdatapg_mail[".viewFields"][] = "vista_ricevi";

$tdatapg_mail[".addFields"] = array();
$tdatapg_mail[".addFields"][] = "invia";
$tdatapg_mail[".addFields"][] = "ricevi";
$tdatapg_mail[".addFields"][] = "messaggio";
$tdatapg_mail[".addFields"][] = "soggetto";
$tdatapg_mail[".addFields"][] = "data";
$tdatapg_mail[".addFields"][] = "aperta";
$tdatapg_mail[".addFields"][] = "vista_invia";
$tdatapg_mail[".addFields"][] = "vista_ricevi";

$tdatapg_mail[".inlineAddFields"] = array();
$tdatapg_mail[".inlineAddFields"][] = "invia";
$tdatapg_mail[".inlineAddFields"][] = "ricevi";
$tdatapg_mail[".inlineAddFields"][] = "messaggio";
$tdatapg_mail[".inlineAddFields"][] = "soggetto";
$tdatapg_mail[".inlineAddFields"][] = "data";
$tdatapg_mail[".inlineAddFields"][] = "aperta";
$tdatapg_mail[".inlineAddFields"][] = "vista_invia";
$tdatapg_mail[".inlineAddFields"][] = "vista_ricevi";

$tdatapg_mail[".editFields"] = array();
$tdatapg_mail[".editFields"][] = "invia";
$tdatapg_mail[".editFields"][] = "ricevi";
$tdatapg_mail[".editFields"][] = "messaggio";
$tdatapg_mail[".editFields"][] = "soggetto";
$tdatapg_mail[".editFields"][] = "data";
$tdatapg_mail[".editFields"][] = "aperta";
$tdatapg_mail[".editFields"][] = "vista_invia";
$tdatapg_mail[".editFields"][] = "vista_ricevi";

$tdatapg_mail[".inlineEditFields"] = array();
$tdatapg_mail[".inlineEditFields"][] = "invia";
$tdatapg_mail[".inlineEditFields"][] = "ricevi";
$tdatapg_mail[".inlineEditFields"][] = "messaggio";
$tdatapg_mail[".inlineEditFields"][] = "soggetto";
$tdatapg_mail[".inlineEditFields"][] = "data";
$tdatapg_mail[".inlineEditFields"][] = "aperta";
$tdatapg_mail[".inlineEditFields"][] = "vista_invia";
$tdatapg_mail[".inlineEditFields"][] = "vista_ricevi";

$tdatapg_mail[".exportFields"] = array();
$tdatapg_mail[".exportFields"][] = "id";
$tdatapg_mail[".exportFields"][] = "invia";
$tdatapg_mail[".exportFields"][] = "ricevi";
$tdatapg_mail[".exportFields"][] = "messaggio";
$tdatapg_mail[".exportFields"][] = "soggetto";
$tdatapg_mail[".exportFields"][] = "data";
$tdatapg_mail[".exportFields"][] = "aperta";
$tdatapg_mail[".exportFields"][] = "vista_invia";
$tdatapg_mail[".exportFields"][] = "vista_ricevi";

$tdatapg_mail[".printFields"] = array();
$tdatapg_mail[".printFields"][] = "id";
$tdatapg_mail[".printFields"][] = "invia";
$tdatapg_mail[".printFields"][] = "ricevi";
$tdatapg_mail[".printFields"][] = "messaggio";
$tdatapg_mail[".printFields"][] = "soggetto";
$tdatapg_mail[".printFields"][] = "data";
$tdatapg_mail[".printFields"][] = "aperta";
$tdatapg_mail[".printFields"][] = "vista_invia";
$tdatapg_mail[".printFields"][] = "vista_ricevi";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pg_mail";
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
	
		
		
	$tdatapg_mail["id"] = $fdata;
//	invia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "invia";
	$fdata["GoodName"] = "invia";
	$fdata["ownerTable"] = "pg_mail";
	$fdata["Label"] = "Invia"; 
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
	
		$fdata["strField"] = "invia"; 
		$fdata["FullName"] = "invia";
	
		
		
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
	
		
		
	$tdatapg_mail["invia"] = $fdata;
//	ricevi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ricevi";
	$fdata["GoodName"] = "ricevi";
	$fdata["ownerTable"] = "pg_mail";
	$fdata["Label"] = "Ricevi"; 
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
	
		$fdata["strField"] = "ricevi"; 
		$fdata["FullName"] = "ricevi";
	
		
		
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
	
		
		
	$tdatapg_mail["ricevi"] = $fdata;
//	messaggio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "messaggio";
	$fdata["GoodName"] = "messaggio";
	$fdata["ownerTable"] = "pg_mail";
	$fdata["Label"] = "Messaggio"; 
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
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_mail["messaggio"] = $fdata;
//	soggetto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "soggetto";
	$fdata["GoodName"] = "soggetto";
	$fdata["ownerTable"] = "pg_mail";
	$fdata["Label"] = "Soggetto"; 
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
	
		$fdata["strField"] = "soggetto"; 
		$fdata["FullName"] = "soggetto";
	
		
		
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
	
		
		
	$tdatapg_mail["soggetto"] = $fdata;
//	data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "data";
	$fdata["GoodName"] = "data";
	$fdata["ownerTable"] = "pg_mail";
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
	
		
		
	$tdatapg_mail["data"] = $fdata;
//	aperta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "aperta";
	$fdata["GoodName"] = "aperta";
	$fdata["ownerTable"] = "pg_mail";
	$fdata["Label"] = "Aperta"; 
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
	
		$fdata["strField"] = "aperta"; 
		$fdata["FullName"] = "aperta";
	
		
		
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
	
		
		
	$tdatapg_mail["aperta"] = $fdata;
//	vista_invia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "vista_invia";
	$fdata["GoodName"] = "vista_invia";
	$fdata["ownerTable"] = "pg_mail";
	$fdata["Label"] = "Vista Invia"; 
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
	
		$fdata["strField"] = "vista_invia"; 
		$fdata["FullName"] = "vista_invia";
	
		
		
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
	
		
		
	$tdatapg_mail["vista_invia"] = $fdata;
//	vista_ricevi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "vista_ricevi";
	$fdata["GoodName"] = "vista_ricevi";
	$fdata["ownerTable"] = "pg_mail";
	$fdata["Label"] = "Vista Ricevi"; 
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
	
		$fdata["strField"] = "vista_ricevi"; 
		$fdata["FullName"] = "vista_ricevi";
	
		
		
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
	
		
		
	$tdatapg_mail["vista_ricevi"] = $fdata;

	
$tables_data["pg_mail"]=&$tdatapg_mail;
$field_labels["pg_mail"] = &$fieldLabelspg_mail;
$fieldToolTips["pg_mail"] = &$fieldToolTipspg_mail;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pg_mail"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["pg_mail"] = array();

$mIndex = 1-1;
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
	$masterTablesData["pg_mail"][$mIndex] = $masterParams;	
		$masterTablesData["pg_mail"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["pg_mail"][$mIndex]["detailKeys"][]="invia";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pg_mail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   invia,   ricevi,   messaggio,   soggetto,   `data`,   aperta,   vista_invia,   vista_ricevi";
$proto0["m_strFrom"] = "FROM pg_mail";
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
	"m_strTable" => "pg_mail"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "invia",
	"m_strTable" => "pg_mail"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ricevi",
	"m_strTable" => "pg_mail"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "messaggio",
	"m_strTable" => "pg_mail"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "soggetto",
	"m_strTable" => "pg_mail"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "pg_mail"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "aperta",
	"m_strTable" => "pg_mail"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "vista_invia",
	"m_strTable" => "pg_mail"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "vista_ricevi",
	"m_strTable" => "pg_mail"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "pg_mail";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "invia";
$proto24["m_columns"][] = "ricevi";
$proto24["m_columns"][] = "messaggio";
$proto24["m_columns"][] = "soggetto";
$proto24["m_columns"][] = "data";
$proto24["m_columns"][] = "aperta";
$proto24["m_columns"][] = "vista_invia";
$proto24["m_columns"][] = "vista_ricevi";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_alias"] = "";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = "0";
$proto25["m_inBrackets"] = "0";
$proto25["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pg_mail = createSqlQuery_pg_mail();
									$tdatapg_mail[".sqlquery"] = $queryData_pg_mail;

$tableEvents["pg_mail"] = new eventsBase;
$tdatapg_mail[".hasEvents"] = false;

$cipherer = new RunnerCipherer("pg_mail");

?>