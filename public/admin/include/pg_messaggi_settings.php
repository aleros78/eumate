<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapg_messaggi = array();
	$tdatapg_messaggi[".NumberOfChars"] = 80; 
	$tdatapg_messaggi[".ShortName"] = "pg_messaggi";
	$tdatapg_messaggi[".OwnerID"] = "";
	$tdatapg_messaggi[".OriginalTable"] = "pg_messaggi";

//	field labels
$fieldLabelspg_messaggi = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspg_messaggi["English"] = array();
	$fieldToolTipspg_messaggi["English"] = array();
	$fieldLabelspg_messaggi["English"]["id"] = "Id";
	$fieldToolTipspg_messaggi["English"]["id"] = "";
	$fieldLabelspg_messaggi["English"]["id_personaggio"] = "Id Personaggio";
	$fieldToolTipspg_messaggi["English"]["id_personaggio"] = "";
	$fieldLabelspg_messaggi["English"]["id_gilda"] = "Id Gilda";
	$fieldToolTipspg_messaggi["English"]["id_gilda"] = "";
	$fieldLabelspg_messaggi["English"]["id_posto"] = "Id Posto";
	$fieldToolTipspg_messaggi["English"]["id_posto"] = "";
	$fieldLabelspg_messaggi["English"]["messaggio"] = "Messaggio";
	$fieldToolTipspg_messaggi["English"]["messaggio"] = "";
	$fieldLabelspg_messaggi["English"]["data"] = "Data";
	$fieldToolTipspg_messaggi["English"]["data"] = "";
	if (count($fieldToolTipspg_messaggi["English"]))
		$tdatapg_messaggi[".isUseToolTips"] = true;
}
	
	
	$tdatapg_messaggi[".NCSearch"] = true;



$tdatapg_messaggi[".shortTableName"] = "pg_messaggi";
$tdatapg_messaggi[".nSecOptions"] = 0;
$tdatapg_messaggi[".recsPerRowList"] = 1;
$tdatapg_messaggi[".mainTableOwnerID"] = "";
$tdatapg_messaggi[".moveNext"] = 1;
$tdatapg_messaggi[".nType"] = 0;

$tdatapg_messaggi[".strOriginalTableName"] = "pg_messaggi";




$tdatapg_messaggi[".showAddInPopup"] = false;

$tdatapg_messaggi[".showEditInPopup"] = false;

$tdatapg_messaggi[".showViewInPopup"] = false;

$tdatapg_messaggi[".fieldsForRegister"] = array();

$tdatapg_messaggi[".listAjax"] = false;

	$tdatapg_messaggi[".audit"] = false;

	$tdatapg_messaggi[".locking"] = false;

$tdatapg_messaggi[".listIcons"] = true;
$tdatapg_messaggi[".edit"] = true;
$tdatapg_messaggi[".copy"] = true;
$tdatapg_messaggi[".view"] = true;



$tdatapg_messaggi[".delete"] = true;

$tdatapg_messaggi[".showSimpleSearchOptions"] = false;

$tdatapg_messaggi[".showSearchPanel"] = true;

if (isMobile())
	$tdatapg_messaggi[".isUseAjaxSuggest"] = false;
else 
	$tdatapg_messaggi[".isUseAjaxSuggest"] = true;

$tdatapg_messaggi[".rowHighlite"] = true;

// button handlers file names

$tdatapg_messaggi[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapg_messaggi[".isUseTimeForSearch"] = false;




$tdatapg_messaggi[".allSearchFields"] = array();

$tdatapg_messaggi[".allSearchFields"][] = "id";
$tdatapg_messaggi[".allSearchFields"][] = "id_personaggio";
$tdatapg_messaggi[".allSearchFields"][] = "id_gilda";
$tdatapg_messaggi[".allSearchFields"][] = "id_posto";
$tdatapg_messaggi[".allSearchFields"][] = "messaggio";
$tdatapg_messaggi[".allSearchFields"][] = "data";

$tdatapg_messaggi[".googleLikeFields"][] = "id";
$tdatapg_messaggi[".googleLikeFields"][] = "id_personaggio";
$tdatapg_messaggi[".googleLikeFields"][] = "id_gilda";
$tdatapg_messaggi[".googleLikeFields"][] = "id_posto";
$tdatapg_messaggi[".googleLikeFields"][] = "messaggio";
$tdatapg_messaggi[".googleLikeFields"][] = "data";


$tdatapg_messaggi[".advSearchFields"][] = "id";
$tdatapg_messaggi[".advSearchFields"][] = "id_personaggio";
$tdatapg_messaggi[".advSearchFields"][] = "id_gilda";
$tdatapg_messaggi[".advSearchFields"][] = "id_posto";
$tdatapg_messaggi[".advSearchFields"][] = "messaggio";
$tdatapg_messaggi[".advSearchFields"][] = "data";

$tdatapg_messaggi[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatapg_messaggi[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapg_messaggi[".strOrderBy"] = $tstrOrderBy;

$tdatapg_messaggi[".orderindexes"] = array();

$tdatapg_messaggi[".sqlHead"] = "SELECT id,   id_personaggio,   id_gilda,   id_posto,   messaggio,   `data`";
$tdatapg_messaggi[".sqlFrom"] = "FROM pg_messaggi";
$tdatapg_messaggi[".sqlWhereExpr"] = "";
$tdatapg_messaggi[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapg_messaggi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapg_messaggi[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspg_messaggi = array();
$tableKeyspg_messaggi[] = "id";
$tdatapg_messaggi[".Keys"] = $tableKeyspg_messaggi;

$tdatapg_messaggi[".listFields"] = array();
$tdatapg_messaggi[".listFields"][] = "id";
$tdatapg_messaggi[".listFields"][] = "id_personaggio";
$tdatapg_messaggi[".listFields"][] = "id_gilda";
$tdatapg_messaggi[".listFields"][] = "id_posto";
$tdatapg_messaggi[".listFields"][] = "messaggio";
$tdatapg_messaggi[".listFields"][] = "data";

$tdatapg_messaggi[".viewFields"] = array();
$tdatapg_messaggi[".viewFields"][] = "id";
$tdatapg_messaggi[".viewFields"][] = "id_personaggio";
$tdatapg_messaggi[".viewFields"][] = "id_gilda";
$tdatapg_messaggi[".viewFields"][] = "id_posto";
$tdatapg_messaggi[".viewFields"][] = "messaggio";
$tdatapg_messaggi[".viewFields"][] = "data";

$tdatapg_messaggi[".addFields"] = array();
$tdatapg_messaggi[".addFields"][] = "id_personaggio";
$tdatapg_messaggi[".addFields"][] = "id_gilda";
$tdatapg_messaggi[".addFields"][] = "id_posto";
$tdatapg_messaggi[".addFields"][] = "messaggio";
$tdatapg_messaggi[".addFields"][] = "data";

$tdatapg_messaggi[".inlineAddFields"] = array();

$tdatapg_messaggi[".editFields"] = array();
$tdatapg_messaggi[".editFields"][] = "id_personaggio";
$tdatapg_messaggi[".editFields"][] = "id_gilda";
$tdatapg_messaggi[".editFields"][] = "id_posto";
$tdatapg_messaggi[".editFields"][] = "messaggio";
$tdatapg_messaggi[".editFields"][] = "data";

$tdatapg_messaggi[".inlineEditFields"] = array();

$tdatapg_messaggi[".exportFields"] = array();

$tdatapg_messaggi[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pg_messaggi";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatapg_messaggi["id"] = $fdata;
//	id_personaggio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_personaggio";
	$fdata["GoodName"] = "id_personaggio";
	$fdata["ownerTable"] = "pg_messaggi";
	$fdata["Label"] = "Id Personaggio"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatapg_messaggi["id_personaggio"] = $fdata;
//	id_gilda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_gilda";
	$fdata["GoodName"] = "id_gilda";
	$fdata["ownerTable"] = "pg_messaggi";
	$fdata["Label"] = "Id Gilda"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatapg_messaggi["id_gilda"] = $fdata;
//	id_posto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_posto";
	$fdata["GoodName"] = "id_posto";
	$fdata["ownerTable"] = "pg_messaggi";
	$fdata["Label"] = "Id Posto"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatapg_messaggi["id_posto"] = $fdata;
//	messaggio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "messaggio";
	$fdata["GoodName"] = "messaggio";
	$fdata["ownerTable"] = "pg_messaggi";
	$fdata["Label"] = "Messaggio"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapg_messaggi["messaggio"] = $fdata;
//	data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "data";
	$fdata["GoodName"] = "data";
	$fdata["ownerTable"] = "pg_messaggi";
	$fdata["Label"] = "Data"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatapg_messaggi["data"] = $fdata;

	
$tables_data["pg_messaggi"]=&$tdatapg_messaggi;
$field_labels["pg_messaggi"] = &$fieldLabelspg_messaggi;
$fieldToolTips["pg_messaggi"] = &$fieldToolTipspg_messaggi;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pg_messaggi"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["pg_messaggi"] = array();

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
	$masterParams["previewOnList"]= 0;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["pg_messaggi"][$mIndex] = $masterParams;	
		$masterTablesData["pg_messaggi"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["pg_messaggi"][$mIndex]["detailKeys"][]="id_personaggio";

$mIndex = 2-1;
			$strOriginalDetailsTable="pg_gilde";
	$masterParams["mDataSourceTable"]="pg_gilde";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pg_gilde";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 0;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["pg_messaggi"][$mIndex] = $masterParams;	
		$masterTablesData["pg_messaggi"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["pg_messaggi"][$mIndex]["detailKeys"][]="id_gilda";

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
	$masterParams["previewOnList"]= 0;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["pg_messaggi"][$mIndex] = $masterParams;	
		$masterTablesData["pg_messaggi"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["pg_messaggi"][$mIndex]["detailKeys"][]="id_posto";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pg_messaggi()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   id_personaggio,   id_gilda,   id_posto,   messaggio,   `data`";
$proto0["m_strFrom"] = "FROM pg_messaggi";
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
	"m_strTable" => "pg_messaggi"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_personaggio",
	"m_strTable" => "pg_messaggi"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id_gilda",
	"m_strTable" => "pg_messaggi"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "id_posto",
	"m_strTable" => "pg_messaggi"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "messaggio",
	"m_strTable" => "pg_messaggi"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "pg_messaggi"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "pg_messaggi";
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
$queryData_pg_messaggi = createSqlQuery_pg_messaggi();
						$tdatapg_messaggi[".sqlquery"] = $queryData_pg_messaggi;

$tableEvents["pg_messaggi"] = new eventsBase;
$tdatapg_messaggi[".hasEvents"] = false;

$cipherer = new RunnerCipherer("pg_messaggi");

?>