<?php
require_once(getabspath("classes/cipherer.php"));
$tdatavv_tipologia_utenti = array();
	$tdatavv_tipologia_utenti[".NumberOfChars"] = 80; 
	$tdatavv_tipologia_utenti[".ShortName"] = "vv_tipologia_utenti";
	$tdatavv_tipologia_utenti[".OwnerID"] = "";
	$tdatavv_tipologia_utenti[".OriginalTable"] = "vv_tipologia_utenti";

//	field labels
$fieldLabelsvv_tipologia_utenti = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvv_tipologia_utenti["English"] = array();
	$fieldToolTipsvv_tipologia_utenti["English"] = array();
	$fieldLabelsvv_tipologia_utenti["English"]["id"] = "Id";
	$fieldToolTipsvv_tipologia_utenti["English"]["id"] = "";
	$fieldLabelsvv_tipologia_utenti["English"]["tipologia"] = "Tipologia";
	$fieldToolTipsvv_tipologia_utenti["English"]["tipologia"] = "";
	if (count($fieldToolTipsvv_tipologia_utenti["English"]))
		$tdatavv_tipologia_utenti[".isUseToolTips"] = true;
}
	
	
	$tdatavv_tipologia_utenti[".NCSearch"] = true;



$tdatavv_tipologia_utenti[".shortTableName"] = "vv_tipologia_utenti";
$tdatavv_tipologia_utenti[".nSecOptions"] = 0;
$tdatavv_tipologia_utenti[".recsPerRowList"] = 1;
$tdatavv_tipologia_utenti[".mainTableOwnerID"] = "";
$tdatavv_tipologia_utenti[".moveNext"] = 1;
$tdatavv_tipologia_utenti[".nType"] = 0;

$tdatavv_tipologia_utenti[".strOriginalTableName"] = "vv_tipologia_utenti";




$tdatavv_tipologia_utenti[".showAddInPopup"] = false;

$tdatavv_tipologia_utenti[".showEditInPopup"] = false;

$tdatavv_tipologia_utenti[".showViewInPopup"] = false;

$tdatavv_tipologia_utenti[".fieldsForRegister"] = array();

$tdatavv_tipologia_utenti[".listAjax"] = false;

	$tdatavv_tipologia_utenti[".audit"] = false;

	$tdatavv_tipologia_utenti[".locking"] = false;

$tdatavv_tipologia_utenti[".listIcons"] = true;
$tdatavv_tipologia_utenti[".edit"] = true;
$tdatavv_tipologia_utenti[".inlineEdit"] = true;
$tdatavv_tipologia_utenti[".inlineAdd"] = true;
$tdatavv_tipologia_utenti[".view"] = true;

$tdatavv_tipologia_utenti[".exportTo"] = true;

$tdatavv_tipologia_utenti[".printFriendly"] = true;

$tdatavv_tipologia_utenti[".delete"] = true;

$tdatavv_tipologia_utenti[".showSimpleSearchOptions"] = false;

$tdatavv_tipologia_utenti[".showSearchPanel"] = true;

if (isMobile())
	$tdatavv_tipologia_utenti[".isUseAjaxSuggest"] = false;
else 
	$tdatavv_tipologia_utenti[".isUseAjaxSuggest"] = true;

$tdatavv_tipologia_utenti[".rowHighlite"] = true;

// button handlers file names

$tdatavv_tipologia_utenti[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavv_tipologia_utenti[".isUseTimeForSearch"] = false;



$tdatavv_tipologia_utenti[".useDetailsPreview"] = true;

$tdatavv_tipologia_utenti[".allSearchFields"] = array();

$tdatavv_tipologia_utenti[".allSearchFields"][] = "id";
$tdatavv_tipologia_utenti[".allSearchFields"][] = "tipologia";

$tdatavv_tipologia_utenti[".googleLikeFields"][] = "id";
$tdatavv_tipologia_utenti[".googleLikeFields"][] = "tipologia";


$tdatavv_tipologia_utenti[".advSearchFields"][] = "id";
$tdatavv_tipologia_utenti[".advSearchFields"][] = "tipologia";

$tdatavv_tipologia_utenti[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatavv_tipologia_utenti[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavv_tipologia_utenti[".strOrderBy"] = $tstrOrderBy;

$tdatavv_tipologia_utenti[".orderindexes"] = array();

$tdatavv_tipologia_utenti[".sqlHead"] = "SELECT id,   tipologia";
$tdatavv_tipologia_utenti[".sqlFrom"] = "FROM vv_tipologia_utenti";
$tdatavv_tipologia_utenti[".sqlWhereExpr"] = "";
$tdatavv_tipologia_utenti[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavv_tipologia_utenti[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavv_tipologia_utenti[".arrGroupsPerPage"] = $arrGPP;

$tableKeysvv_tipologia_utenti = array();
$tableKeysvv_tipologia_utenti[] = "id";
$tdatavv_tipologia_utenti[".Keys"] = $tableKeysvv_tipologia_utenti;

$tdatavv_tipologia_utenti[".listFields"] = array();
$tdatavv_tipologia_utenti[".listFields"][] = "id";
$tdatavv_tipologia_utenti[".listFields"][] = "tipologia";

$tdatavv_tipologia_utenti[".viewFields"] = array();
$tdatavv_tipologia_utenti[".viewFields"][] = "id";
$tdatavv_tipologia_utenti[".viewFields"][] = "tipologia";

$tdatavv_tipologia_utenti[".addFields"] = array();
$tdatavv_tipologia_utenti[".addFields"][] = "tipologia";

$tdatavv_tipologia_utenti[".inlineAddFields"] = array();
$tdatavv_tipologia_utenti[".inlineAddFields"][] = "tipologia";

$tdatavv_tipologia_utenti[".editFields"] = array();
$tdatavv_tipologia_utenti[".editFields"][] = "tipologia";

$tdatavv_tipologia_utenti[".inlineEditFields"] = array();
$tdatavv_tipologia_utenti[".inlineEditFields"][] = "tipologia";

$tdatavv_tipologia_utenti[".exportFields"] = array();
$tdatavv_tipologia_utenti[".exportFields"][] = "id";
$tdatavv_tipologia_utenti[".exportFields"][] = "tipologia";

$tdatavv_tipologia_utenti[".printFields"] = array();
$tdatavv_tipologia_utenti[".printFields"][] = "id";
$tdatavv_tipologia_utenti[".printFields"][] = "tipologia";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "vv_tipologia_utenti";
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
	
		
		
	$tdatavv_tipologia_utenti["id"] = $fdata;
//	tipologia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipologia";
	$fdata["GoodName"] = "tipologia";
	$fdata["ownerTable"] = "vv_tipologia_utenti";
	$fdata["Label"] = "Tipologia"; 
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
	
		$fdata["strField"] = "tipologia"; 
		$fdata["FullName"] = "tipologia";
	
		
		
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
	
		
		
	$tdatavv_tipologia_utenti["tipologia"] = $fdata;

	
$tables_data["vv_tipologia_utenti"]=&$tdatavv_tipologia_utenti;
$field_labels["vv_tipologia_utenti"] = &$fieldLabelsvv_tipologia_utenti;
$fieldToolTips["vv_tipologia_utenti"] = &$fieldToolTipsvv_tipologia_utenti;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vv_tipologia_utenti"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="ge_utenti";
	$detailsParam["dDataSourceTable"]="ge_utenti";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="ge_utenti";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["vv_tipologia_utenti"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["vv_tipologia_utenti"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["vv_tipologia_utenti"][$dIndex]["detailKeys"][]="id_tipologia";

	
// tables which are master tables for current table (detail)
$masterTablesData["vv_tipologia_utenti"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vv_tipologia_utenti()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   tipologia";
$proto0["m_strFrom"] = "FROM vv_tipologia_utenti";
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
	"m_strTable" => "vv_tipologia_utenti"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tipologia",
	"m_strTable" => "vv_tipologia_utenti"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "vv_tipologia_utenti";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "tipologia";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_alias"] = "";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = "0";
$proto11["m_inBrackets"] = "0";
$proto11["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vv_tipologia_utenti = createSqlQuery_vv_tipologia_utenti();
		$tdatavv_tipologia_utenti[".sqlquery"] = $queryData_vv_tipologia_utenti;

$tableEvents["vv_tipologia_utenti"] = new eventsBase;
$tdatavv_tipologia_utenti[".hasEvents"] = false;

$cipherer = new RunnerCipherer("vv_tipologia_utenti");

?>