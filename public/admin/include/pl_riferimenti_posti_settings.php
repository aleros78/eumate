<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapl_riferimenti_posti = array();
	$tdatapl_riferimenti_posti[".NumberOfChars"] = 80; 
	$tdatapl_riferimenti_posti[".ShortName"] = "pl_riferimenti_posti";
	$tdatapl_riferimenti_posti[".OwnerID"] = "";
	$tdatapl_riferimenti_posti[".OriginalTable"] = "pl_riferimenti_posti";

//	field labels
$fieldLabelspl_riferimenti_posti = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspl_riferimenti_posti["English"] = array();
	$fieldToolTipspl_riferimenti_posti["English"] = array();
	$fieldLabelspl_riferimenti_posti["English"]["id"] = "Id";
	$fieldToolTipspl_riferimenti_posti["English"]["id"] = "";
	$fieldLabelspl_riferimenti_posti["English"]["id_posto"] = "Id Posto";
	$fieldToolTipspl_riferimenti_posti["English"]["id_posto"] = "";
	$fieldLabelspl_riferimenti_posti["English"]["id_posto_riferimento"] = "Id Posto Riferimento";
	$fieldToolTipspl_riferimenti_posti["English"]["id_posto_riferimento"] = "";
	if (count($fieldToolTipspl_riferimenti_posti["English"]))
		$tdatapl_riferimenti_posti[".isUseToolTips"] = true;
}
	
	
	$tdatapl_riferimenti_posti[".NCSearch"] = true;



$tdatapl_riferimenti_posti[".shortTableName"] = "pl_riferimenti_posti";
$tdatapl_riferimenti_posti[".nSecOptions"] = 0;
$tdatapl_riferimenti_posti[".recsPerRowList"] = 1;
$tdatapl_riferimenti_posti[".mainTableOwnerID"] = "";
$tdatapl_riferimenti_posti[".moveNext"] = 1;
$tdatapl_riferimenti_posti[".nType"] = 0;

$tdatapl_riferimenti_posti[".strOriginalTableName"] = "pl_riferimenti_posti";




$tdatapl_riferimenti_posti[".showAddInPopup"] = false;

$tdatapl_riferimenti_posti[".showEditInPopup"] = false;

$tdatapl_riferimenti_posti[".showViewInPopup"] = false;

$tdatapl_riferimenti_posti[".fieldsForRegister"] = array();

$tdatapl_riferimenti_posti[".listAjax"] = false;

	$tdatapl_riferimenti_posti[".audit"] = false;

	$tdatapl_riferimenti_posti[".locking"] = false;

$tdatapl_riferimenti_posti[".listIcons"] = true;
$tdatapl_riferimenti_posti[".edit"] = true;
$tdatapl_riferimenti_posti[".inlineEdit"] = true;
$tdatapl_riferimenti_posti[".inlineAdd"] = true;
$tdatapl_riferimenti_posti[".view"] = true;

$tdatapl_riferimenti_posti[".exportTo"] = true;

$tdatapl_riferimenti_posti[".printFriendly"] = true;

$tdatapl_riferimenti_posti[".delete"] = true;

$tdatapl_riferimenti_posti[".showSimpleSearchOptions"] = false;

$tdatapl_riferimenti_posti[".showSearchPanel"] = true;

if (isMobile())
	$tdatapl_riferimenti_posti[".isUseAjaxSuggest"] = false;
else 
	$tdatapl_riferimenti_posti[".isUseAjaxSuggest"] = true;

$tdatapl_riferimenti_posti[".rowHighlite"] = true;

// button handlers file names

$tdatapl_riferimenti_posti[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapl_riferimenti_posti[".isUseTimeForSearch"] = false;




$tdatapl_riferimenti_posti[".allSearchFields"] = array();

$tdatapl_riferimenti_posti[".allSearchFields"][] = "id";
$tdatapl_riferimenti_posti[".allSearchFields"][] = "id_posto";
$tdatapl_riferimenti_posti[".allSearchFields"][] = "id_posto_riferimento";

$tdatapl_riferimenti_posti[".googleLikeFields"][] = "id";
$tdatapl_riferimenti_posti[".googleLikeFields"][] = "id_posto";
$tdatapl_riferimenti_posti[".googleLikeFields"][] = "id_posto_riferimento";


$tdatapl_riferimenti_posti[".advSearchFields"][] = "id";
$tdatapl_riferimenti_posti[".advSearchFields"][] = "id_posto";
$tdatapl_riferimenti_posti[".advSearchFields"][] = "id_posto_riferimento";

$tdatapl_riferimenti_posti[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatapl_riferimenti_posti[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapl_riferimenti_posti[".strOrderBy"] = $tstrOrderBy;

$tdatapl_riferimenti_posti[".orderindexes"] = array();

$tdatapl_riferimenti_posti[".sqlHead"] = "SELECT id,   id_posto,   id_posto_riferimento";
$tdatapl_riferimenti_posti[".sqlFrom"] = "FROM pl_riferimenti_posti";
$tdatapl_riferimenti_posti[".sqlWhereExpr"] = "";
$tdatapl_riferimenti_posti[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapl_riferimenti_posti[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapl_riferimenti_posti[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspl_riferimenti_posti = array();
$tableKeyspl_riferimenti_posti[] = "id";
$tdatapl_riferimenti_posti[".Keys"] = $tableKeyspl_riferimenti_posti;

$tdatapl_riferimenti_posti[".listFields"] = array();
$tdatapl_riferimenti_posti[".listFields"][] = "id";
$tdatapl_riferimenti_posti[".listFields"][] = "id_posto";
$tdatapl_riferimenti_posti[".listFields"][] = "id_posto_riferimento";

$tdatapl_riferimenti_posti[".viewFields"] = array();
$tdatapl_riferimenti_posti[".viewFields"][] = "id";
$tdatapl_riferimenti_posti[".viewFields"][] = "id_posto";
$tdatapl_riferimenti_posti[".viewFields"][] = "id_posto_riferimento";

$tdatapl_riferimenti_posti[".addFields"] = array();
$tdatapl_riferimenti_posti[".addFields"][] = "id_posto";
$tdatapl_riferimenti_posti[".addFields"][] = "id_posto_riferimento";

$tdatapl_riferimenti_posti[".inlineAddFields"] = array();
$tdatapl_riferimenti_posti[".inlineAddFields"][] = "id_posto";
$tdatapl_riferimenti_posti[".inlineAddFields"][] = "id_posto_riferimento";

$tdatapl_riferimenti_posti[".editFields"] = array();
$tdatapl_riferimenti_posti[".editFields"][] = "id_posto";
$tdatapl_riferimenti_posti[".editFields"][] = "id_posto_riferimento";

$tdatapl_riferimenti_posti[".inlineEditFields"] = array();
$tdatapl_riferimenti_posti[".inlineEditFields"][] = "id_posto";
$tdatapl_riferimenti_posti[".inlineEditFields"][] = "id_posto_riferimento";

$tdatapl_riferimenti_posti[".exportFields"] = array();
$tdatapl_riferimenti_posti[".exportFields"][] = "id";
$tdatapl_riferimenti_posti[".exportFields"][] = "id_posto";
$tdatapl_riferimenti_posti[".exportFields"][] = "id_posto_riferimento";

$tdatapl_riferimenti_posti[".printFields"] = array();
$tdatapl_riferimenti_posti[".printFields"][] = "id";
$tdatapl_riferimenti_posti[".printFields"][] = "id_posto";
$tdatapl_riferimenti_posti[".printFields"][] = "id_posto_riferimento";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pl_riferimenti_posti";
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
	
		
		
	$tdatapl_riferimenti_posti["id"] = $fdata;
//	id_posto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_posto";
	$fdata["GoodName"] = "id_posto";
	$fdata["ownerTable"] = "pl_riferimenti_posti";
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
	
		
		
	$tdatapl_riferimenti_posti["id_posto"] = $fdata;
//	id_posto_riferimento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_posto_riferimento";
	$fdata["GoodName"] = "id_posto_riferimento";
	$fdata["ownerTable"] = "pl_riferimenti_posti";
	$fdata["Label"] = "Id Posto Riferimento"; 
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
	
		$fdata["strField"] = "id_posto_riferimento"; 
		$fdata["FullName"] = "id_posto_riferimento";
	
		
		
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
	
		
		
	$tdatapl_riferimenti_posti["id_posto_riferimento"] = $fdata;

	
$tables_data["pl_riferimenti_posti"]=&$tdatapl_riferimenti_posti;
$field_labels["pl_riferimenti_posti"] = &$fieldLabelspl_riferimenti_posti;
$fieldToolTips["pl_riferimenti_posti"] = &$fieldToolTipspl_riferimenti_posti;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pl_riferimenti_posti"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["pl_riferimenti_posti"] = array();

$mIndex = 1-1;
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
	$masterTablesData["pl_riferimenti_posti"][$mIndex] = $masterParams;	
		$masterTablesData["pl_riferimenti_posti"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["pl_riferimenti_posti"][$mIndex]["detailKeys"][]="id_posto_riferimento";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pl_riferimenti_posti()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   id_posto,   id_posto_riferimento";
$proto0["m_strFrom"] = "FROM pl_riferimenti_posti";
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
	"m_strTable" => "pl_riferimenti_posti"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_posto",
	"m_strTable" => "pl_riferimenti_posti"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id_posto_riferimento",
	"m_strTable" => "pl_riferimenti_posti"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "pl_riferimenti_posti";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "id_posto";
$proto12["m_columns"][] = "id_posto_riferimento";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pl_riferimenti_posti = createSqlQuery_pl_riferimenti_posti();
			$tdatapl_riferimenti_posti[".sqlquery"] = $queryData_pl_riferimenti_posti;

$tableEvents["pl_riferimenti_posti"] = new eventsBase;
$tdatapl_riferimenti_posti[".hasEvents"] = false;

$cipherer = new RunnerCipherer("pl_riferimenti_posti");

?>