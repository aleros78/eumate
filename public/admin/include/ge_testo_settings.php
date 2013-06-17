<?php
require_once(getabspath("classes/cipherer.php"));
$tdatage_testo = array();
	$tdatage_testo[".NumberOfChars"] = 80; 
	$tdatage_testo[".ShortName"] = "ge_testo";
	$tdatage_testo[".OwnerID"] = "";
	$tdatage_testo[".OriginalTable"] = "ge_testo";

//	field labels
$fieldLabelsge_testo = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsge_testo["English"] = array();
	$fieldToolTipsge_testo["English"] = array();
	$fieldLabelsge_testo["English"]["id"] = "Id";
	$fieldToolTipsge_testo["English"]["id"] = "";
	$fieldLabelsge_testo["English"]["chiave"] = "Chiave";
	$fieldToolTipsge_testo["English"]["chiave"] = "";
	$fieldLabelsge_testo["English"]["value_it"] = "Value It";
	$fieldToolTipsge_testo["English"]["value_it"] = "";
	$fieldLabelsge_testo["English"]["value_en"] = "Value En";
	$fieldToolTipsge_testo["English"]["value_en"] = "";
	if (count($fieldToolTipsge_testo["English"]))
		$tdatage_testo[".isUseToolTips"] = true;
}
	
	
	$tdatage_testo[".NCSearch"] = true;



$tdatage_testo[".shortTableName"] = "ge_testo";
$tdatage_testo[".nSecOptions"] = 0;
$tdatage_testo[".recsPerRowList"] = 1;
$tdatage_testo[".mainTableOwnerID"] = "";
$tdatage_testo[".moveNext"] = 1;
$tdatage_testo[".nType"] = 0;

$tdatage_testo[".strOriginalTableName"] = "ge_testo";




$tdatage_testo[".showAddInPopup"] = false;

$tdatage_testo[".showEditInPopup"] = false;

$tdatage_testo[".showViewInPopup"] = false;

$tdatage_testo[".fieldsForRegister"] = array();

$tdatage_testo[".listAjax"] = false;

	$tdatage_testo[".audit"] = false;

	$tdatage_testo[".locking"] = false;

$tdatage_testo[".listIcons"] = true;
$tdatage_testo[".edit"] = true;
$tdatage_testo[".copy"] = true;
$tdatage_testo[".view"] = true;



$tdatage_testo[".delete"] = true;

$tdatage_testo[".showSimpleSearchOptions"] = false;

$tdatage_testo[".showSearchPanel"] = true;

if (isMobile())
	$tdatage_testo[".isUseAjaxSuggest"] = false;
else 
	$tdatage_testo[".isUseAjaxSuggest"] = true;

$tdatage_testo[".rowHighlite"] = true;

// button handlers file names

$tdatage_testo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatage_testo[".isUseTimeForSearch"] = false;




$tdatage_testo[".allSearchFields"] = array();

$tdatage_testo[".allSearchFields"][] = "id";
$tdatage_testo[".allSearchFields"][] = "chiave";
$tdatage_testo[".allSearchFields"][] = "value_it";
$tdatage_testo[".allSearchFields"][] = "value_en";

$tdatage_testo[".googleLikeFields"][] = "id";
$tdatage_testo[".googleLikeFields"][] = "chiave";
$tdatage_testo[".googleLikeFields"][] = "value_it";
$tdatage_testo[".googleLikeFields"][] = "value_en";


$tdatage_testo[".advSearchFields"][] = "id";
$tdatage_testo[".advSearchFields"][] = "chiave";
$tdatage_testo[".advSearchFields"][] = "value_it";
$tdatage_testo[".advSearchFields"][] = "value_en";

$tdatage_testo[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatage_testo[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatage_testo[".strOrderBy"] = $tstrOrderBy;

$tdatage_testo[".orderindexes"] = array();

$tdatage_testo[".sqlHead"] = "SELECT id,   chiave,   value_it,   value_en";
$tdatage_testo[".sqlFrom"] = "FROM ge_testo";
$tdatage_testo[".sqlWhereExpr"] = "";
$tdatage_testo[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatage_testo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatage_testo[".arrGroupsPerPage"] = $arrGPP;

$tableKeysge_testo = array();
$tableKeysge_testo[] = "id";
$tdatage_testo[".Keys"] = $tableKeysge_testo;

$tdatage_testo[".listFields"] = array();
$tdatage_testo[".listFields"][] = "id";
$tdatage_testo[".listFields"][] = "chiave";
$tdatage_testo[".listFields"][] = "value_it";
$tdatage_testo[".listFields"][] = "value_en";

$tdatage_testo[".viewFields"] = array();
$tdatage_testo[".viewFields"][] = "id";
$tdatage_testo[".viewFields"][] = "chiave";
$tdatage_testo[".viewFields"][] = "value_it";
$tdatage_testo[".viewFields"][] = "value_en";

$tdatage_testo[".addFields"] = array();
$tdatage_testo[".addFields"][] = "chiave";
$tdatage_testo[".addFields"][] = "value_it";
$tdatage_testo[".addFields"][] = "value_en";

$tdatage_testo[".inlineAddFields"] = array();

$tdatage_testo[".editFields"] = array();
$tdatage_testo[".editFields"][] = "chiave";
$tdatage_testo[".editFields"][] = "value_it";
$tdatage_testo[".editFields"][] = "value_en";

$tdatage_testo[".inlineEditFields"] = array();

$tdatage_testo[".exportFields"] = array();

$tdatage_testo[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ge_testo";
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
	
		
		
	$tdatage_testo["id"] = $fdata;
//	chiave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "chiave";
	$fdata["GoodName"] = "chiave";
	$fdata["ownerTable"] = "ge_testo";
	$fdata["Label"] = "Chiave"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "chiave"; 
		$fdata["FullName"] = "chiave";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatage_testo["chiave"] = $fdata;
//	value_it
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "value_it";
	$fdata["GoodName"] = "value_it";
	$fdata["ownerTable"] = "ge_testo";
	$fdata["Label"] = "Value It"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "value_it"; 
		$fdata["FullName"] = "value_it";
	
		
		
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
	
		
		
	$tdatage_testo["value_it"] = $fdata;
//	value_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "value_en";
	$fdata["GoodName"] = "value_en";
	$fdata["ownerTable"] = "ge_testo";
	$fdata["Label"] = "Value En"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "value_en"; 
		$fdata["FullName"] = "value_en";
	
		
		
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
	
		
		
	$tdatage_testo["value_en"] = $fdata;

	
$tables_data["ge_testo"]=&$tdatage_testo;
$field_labels["ge_testo"] = &$fieldLabelsge_testo;
$fieldToolTips["ge_testo"] = &$fieldToolTipsge_testo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ge_testo"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["ge_testo"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ge_testo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   chiave,   value_it,   value_en";
$proto0["m_strFrom"] = "FROM ge_testo";
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
	"m_strTable" => "ge_testo"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "chiave",
	"m_strTable" => "ge_testo"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "value_it",
	"m_strTable" => "ge_testo"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "value_en",
	"m_strTable" => "ge_testo"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "ge_testo";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "chiave";
$proto14["m_columns"][] = "value_it";
$proto14["m_columns"][] = "value_en";
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
$queryData_ge_testo = createSqlQuery_ge_testo();
				$tdatage_testo[".sqlquery"] = $queryData_ge_testo;

$tableEvents["ge_testo"] = new eventsBase;
$tdatage_testo[".hasEvents"] = false;

$cipherer = new RunnerCipherer("ge_testo");

?>