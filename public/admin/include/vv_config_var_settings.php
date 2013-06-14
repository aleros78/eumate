<?php
require_once(getabspath("classes/cipherer.php"));
$tdatavv_config_var = array();
	$tdatavv_config_var[".NumberOfChars"] = 80; 
	$tdatavv_config_var[".ShortName"] = "vv_config_var";
	$tdatavv_config_var[".OwnerID"] = "";
	$tdatavv_config_var[".OriginalTable"] = "vv_config_var";

//	field labels
$fieldLabelsvv_config_var = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvv_config_var["English"] = array();
	$fieldToolTipsvv_config_var["English"] = array();
	$fieldLabelsvv_config_var["English"]["id"] = "Id";
	$fieldToolTipsvv_config_var["English"]["id"] = "";
	$fieldLabelsvv_config_var["English"]["key"] = "Key";
	$fieldToolTipsvv_config_var["English"]["key"] = "";
	$fieldLabelsvv_config_var["English"]["value"] = "Value";
	$fieldToolTipsvv_config_var["English"]["value"] = "";
	$fieldLabelsvv_config_var["English"]["note"] = "Note";
	$fieldToolTipsvv_config_var["English"]["note"] = "";
	if (count($fieldToolTipsvv_config_var["English"]))
		$tdatavv_config_var[".isUseToolTips"] = true;
}
	
	
	$tdatavv_config_var[".NCSearch"] = true;



$tdatavv_config_var[".shortTableName"] = "vv_config_var";
$tdatavv_config_var[".nSecOptions"] = 0;
$tdatavv_config_var[".recsPerRowList"] = 1;
$tdatavv_config_var[".mainTableOwnerID"] = "";
$tdatavv_config_var[".moveNext"] = 1;
$tdatavv_config_var[".nType"] = 0;

$tdatavv_config_var[".strOriginalTableName"] = "vv_config_var";




$tdatavv_config_var[".showAddInPopup"] = false;

$tdatavv_config_var[".showEditInPopup"] = false;

$tdatavv_config_var[".showViewInPopup"] = false;

$tdatavv_config_var[".fieldsForRegister"] = array();

$tdatavv_config_var[".listAjax"] = false;

	$tdatavv_config_var[".audit"] = false;

	$tdatavv_config_var[".locking"] = false;

$tdatavv_config_var[".listIcons"] = true;
$tdatavv_config_var[".edit"] = true;
$tdatavv_config_var[".inlineEdit"] = true;
$tdatavv_config_var[".inlineAdd"] = true;
$tdatavv_config_var[".view"] = true;

$tdatavv_config_var[".exportTo"] = true;

$tdatavv_config_var[".printFriendly"] = true;

$tdatavv_config_var[".delete"] = true;

$tdatavv_config_var[".showSimpleSearchOptions"] = false;

$tdatavv_config_var[".showSearchPanel"] = true;

if (isMobile())
	$tdatavv_config_var[".isUseAjaxSuggest"] = false;
else 
	$tdatavv_config_var[".isUseAjaxSuggest"] = true;

$tdatavv_config_var[".rowHighlite"] = true;

// button handlers file names

$tdatavv_config_var[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavv_config_var[".isUseTimeForSearch"] = false;




$tdatavv_config_var[".allSearchFields"] = array();

$tdatavv_config_var[".allSearchFields"][] = "id";
$tdatavv_config_var[".allSearchFields"][] = "key";
$tdatavv_config_var[".allSearchFields"][] = "value";
$tdatavv_config_var[".allSearchFields"][] = "note";

$tdatavv_config_var[".googleLikeFields"][] = "id";
$tdatavv_config_var[".googleLikeFields"][] = "key";
$tdatavv_config_var[".googleLikeFields"][] = "value";
$tdatavv_config_var[".googleLikeFields"][] = "note";


$tdatavv_config_var[".advSearchFields"][] = "id";
$tdatavv_config_var[".advSearchFields"][] = "key";
$tdatavv_config_var[".advSearchFields"][] = "value";
$tdatavv_config_var[".advSearchFields"][] = "note";

$tdatavv_config_var[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatavv_config_var[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavv_config_var[".strOrderBy"] = $tstrOrderBy;

$tdatavv_config_var[".orderindexes"] = array();

$tdatavv_config_var[".sqlHead"] = "SELECT id,   `key`,   `value`,   note";
$tdatavv_config_var[".sqlFrom"] = "FROM vv_config_var";
$tdatavv_config_var[".sqlWhereExpr"] = "";
$tdatavv_config_var[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavv_config_var[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavv_config_var[".arrGroupsPerPage"] = $arrGPP;

$tableKeysvv_config_var = array();
$tableKeysvv_config_var[] = "id";
$tdatavv_config_var[".Keys"] = $tableKeysvv_config_var;

$tdatavv_config_var[".listFields"] = array();
$tdatavv_config_var[".listFields"][] = "id";
$tdatavv_config_var[".listFields"][] = "key";
$tdatavv_config_var[".listFields"][] = "value";
$tdatavv_config_var[".listFields"][] = "note";

$tdatavv_config_var[".viewFields"] = array();
$tdatavv_config_var[".viewFields"][] = "id";
$tdatavv_config_var[".viewFields"][] = "key";
$tdatavv_config_var[".viewFields"][] = "value";
$tdatavv_config_var[".viewFields"][] = "note";

$tdatavv_config_var[".addFields"] = array();
$tdatavv_config_var[".addFields"][] = "key";
$tdatavv_config_var[".addFields"][] = "value";
$tdatavv_config_var[".addFields"][] = "note";

$tdatavv_config_var[".inlineAddFields"] = array();
$tdatavv_config_var[".inlineAddFields"][] = "key";
$tdatavv_config_var[".inlineAddFields"][] = "value";
$tdatavv_config_var[".inlineAddFields"][] = "note";

$tdatavv_config_var[".editFields"] = array();
$tdatavv_config_var[".editFields"][] = "key";
$tdatavv_config_var[".editFields"][] = "value";
$tdatavv_config_var[".editFields"][] = "note";

$tdatavv_config_var[".inlineEditFields"] = array();
$tdatavv_config_var[".inlineEditFields"][] = "key";
$tdatavv_config_var[".inlineEditFields"][] = "value";
$tdatavv_config_var[".inlineEditFields"][] = "note";

$tdatavv_config_var[".exportFields"] = array();
$tdatavv_config_var[".exportFields"][] = "id";
$tdatavv_config_var[".exportFields"][] = "key";
$tdatavv_config_var[".exportFields"][] = "value";
$tdatavv_config_var[".exportFields"][] = "note";

$tdatavv_config_var[".printFields"] = array();
$tdatavv_config_var[".printFields"][] = "id";
$tdatavv_config_var[".printFields"][] = "key";
$tdatavv_config_var[".printFields"][] = "value";
$tdatavv_config_var[".printFields"][] = "note";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "vv_config_var";
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
	
		
		
	$tdatavv_config_var["id"] = $fdata;
//	key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "key";
	$fdata["GoodName"] = "key";
	$fdata["ownerTable"] = "vv_config_var";
	$fdata["Label"] = "Key"; 
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
	
		$fdata["strField"] = "key"; 
		$fdata["FullName"] = "`key`";
	
		
		
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
	
		
		
	$tdatavv_config_var["key"] = $fdata;
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "vv_config_var";
	$fdata["Label"] = "Value"; 
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
	
		$fdata["strField"] = "value"; 
		$fdata["FullName"] = "`value`";
	
		
		
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
	
		
		
	$tdatavv_config_var["value"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "vv_config_var";
	$fdata["Label"] = "Note"; 
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
	
		$fdata["strField"] = "note"; 
		$fdata["FullName"] = "note";
	
		
		
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
	
		
		
	$tdatavv_config_var["note"] = $fdata;

	
$tables_data["vv_config_var"]=&$tdatavv_config_var;
$field_labels["vv_config_var"] = &$fieldLabelsvv_config_var;
$fieldToolTips["vv_config_var"] = &$fieldToolTipsvv_config_var;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vv_config_var"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["vv_config_var"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vv_config_var()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   `key`,   `value`,   note";
$proto0["m_strFrom"] = "FROM vv_config_var";
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
	"m_strTable" => "vv_config_var"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "key",
	"m_strTable" => "vv_config_var"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "vv_config_var"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "vv_config_var"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "vv_config_var";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "key";
$proto14["m_columns"][] = "value";
$proto14["m_columns"][] = "note";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = "0";
$proto15["m_inBrackets"] = "0";
$proto15["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vv_config_var = createSqlQuery_vv_config_var();
				$tdatavv_config_var[".sqlquery"] = $queryData_vv_config_var;

$tableEvents["vv_config_var"] = new eventsBase;
$tdatavv_config_var[".hasEvents"] = false;

$cipherer = new RunnerCipherer("vv_config_var");

?>