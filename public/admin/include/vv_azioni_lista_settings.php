<?php
require_once(getabspath("classes/cipherer.php"));
$tdatavv_azioni_lista = array();
	$tdatavv_azioni_lista[".NumberOfChars"] = 80; 
	$tdatavv_azioni_lista[".ShortName"] = "vv_azioni_lista";
	$tdatavv_azioni_lista[".OwnerID"] = "";
	$tdatavv_azioni_lista[".OriginalTable"] = "vv_azioni_lista";

//	field labels
$fieldLabelsvv_azioni_lista = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvv_azioni_lista["English"] = array();
	$fieldToolTipsvv_azioni_lista["English"] = array();
	$fieldLabelsvv_azioni_lista["English"]["id"] = "Id";
	$fieldToolTipsvv_azioni_lista["English"]["id"] = "";
	$fieldLabelsvv_azioni_lista["English"]["azione"] = "Azione";
	$fieldToolTipsvv_azioni_lista["English"]["azione"] = "";
	$fieldLabelsvv_azioni_lista["English"]["descrizione"] = "Descrizione";
	$fieldToolTipsvv_azioni_lista["English"]["descrizione"] = "";
	if (count($fieldToolTipsvv_azioni_lista["English"]))
		$tdatavv_azioni_lista[".isUseToolTips"] = true;
}
	
	
	$tdatavv_azioni_lista[".NCSearch"] = true;



$tdatavv_azioni_lista[".shortTableName"] = "vv_azioni_lista";
$tdatavv_azioni_lista[".nSecOptions"] = 0;
$tdatavv_azioni_lista[".recsPerRowList"] = 1;
$tdatavv_azioni_lista[".mainTableOwnerID"] = "";
$tdatavv_azioni_lista[".moveNext"] = 1;
$tdatavv_azioni_lista[".nType"] = 0;

$tdatavv_azioni_lista[".strOriginalTableName"] = "vv_azioni_lista";




$tdatavv_azioni_lista[".showAddInPopup"] = false;

$tdatavv_azioni_lista[".showEditInPopup"] = false;

$tdatavv_azioni_lista[".showViewInPopup"] = false;

$tdatavv_azioni_lista[".fieldsForRegister"] = array();

$tdatavv_azioni_lista[".listAjax"] = false;

	$tdatavv_azioni_lista[".audit"] = false;

	$tdatavv_azioni_lista[".locking"] = false;

$tdatavv_azioni_lista[".listIcons"] = true;
$tdatavv_azioni_lista[".edit"] = true;
$tdatavv_azioni_lista[".inlineEdit"] = true;
$tdatavv_azioni_lista[".inlineAdd"] = true;
$tdatavv_azioni_lista[".view"] = true;

$tdatavv_azioni_lista[".exportTo"] = true;

$tdatavv_azioni_lista[".printFriendly"] = true;

$tdatavv_azioni_lista[".delete"] = true;

$tdatavv_azioni_lista[".showSimpleSearchOptions"] = false;

$tdatavv_azioni_lista[".showSearchPanel"] = true;

if (isMobile())
	$tdatavv_azioni_lista[".isUseAjaxSuggest"] = false;
else 
	$tdatavv_azioni_lista[".isUseAjaxSuggest"] = true;

$tdatavv_azioni_lista[".rowHighlite"] = true;

// button handlers file names

$tdatavv_azioni_lista[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavv_azioni_lista[".isUseTimeForSearch"] = false;




$tdatavv_azioni_lista[".allSearchFields"] = array();

$tdatavv_azioni_lista[".allSearchFields"][] = "id";
$tdatavv_azioni_lista[".allSearchFields"][] = "azione";
$tdatavv_azioni_lista[".allSearchFields"][] = "descrizione";

$tdatavv_azioni_lista[".googleLikeFields"][] = "id";
$tdatavv_azioni_lista[".googleLikeFields"][] = "azione";
$tdatavv_azioni_lista[".googleLikeFields"][] = "descrizione";


$tdatavv_azioni_lista[".advSearchFields"][] = "id";
$tdatavv_azioni_lista[".advSearchFields"][] = "azione";
$tdatavv_azioni_lista[".advSearchFields"][] = "descrizione";

$tdatavv_azioni_lista[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatavv_azioni_lista[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavv_azioni_lista[".strOrderBy"] = $tstrOrderBy;

$tdatavv_azioni_lista[".orderindexes"] = array();

$tdatavv_azioni_lista[".sqlHead"] = "SELECT id,   azione,   descrizione";
$tdatavv_azioni_lista[".sqlFrom"] = "FROM vv_azioni_lista";
$tdatavv_azioni_lista[".sqlWhereExpr"] = "";
$tdatavv_azioni_lista[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavv_azioni_lista[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavv_azioni_lista[".arrGroupsPerPage"] = $arrGPP;

$tableKeysvv_azioni_lista = array();
$tableKeysvv_azioni_lista[] = "id";
$tdatavv_azioni_lista[".Keys"] = $tableKeysvv_azioni_lista;

$tdatavv_azioni_lista[".listFields"] = array();
$tdatavv_azioni_lista[".listFields"][] = "id";
$tdatavv_azioni_lista[".listFields"][] = "azione";
$tdatavv_azioni_lista[".listFields"][] = "descrizione";

$tdatavv_azioni_lista[".viewFields"] = array();
$tdatavv_azioni_lista[".viewFields"][] = "id";
$tdatavv_azioni_lista[".viewFields"][] = "azione";
$tdatavv_azioni_lista[".viewFields"][] = "descrizione";

$tdatavv_azioni_lista[".addFields"] = array();
$tdatavv_azioni_lista[".addFields"][] = "azione";
$tdatavv_azioni_lista[".addFields"][] = "descrizione";

$tdatavv_azioni_lista[".inlineAddFields"] = array();
$tdatavv_azioni_lista[".inlineAddFields"][] = "azione";
$tdatavv_azioni_lista[".inlineAddFields"][] = "descrizione";

$tdatavv_azioni_lista[".editFields"] = array();
$tdatavv_azioni_lista[".editFields"][] = "azione";
$tdatavv_azioni_lista[".editFields"][] = "descrizione";

$tdatavv_azioni_lista[".inlineEditFields"] = array();
$tdatavv_azioni_lista[".inlineEditFields"][] = "azione";
$tdatavv_azioni_lista[".inlineEditFields"][] = "descrizione";

$tdatavv_azioni_lista[".exportFields"] = array();
$tdatavv_azioni_lista[".exportFields"][] = "id";
$tdatavv_azioni_lista[".exportFields"][] = "azione";
$tdatavv_azioni_lista[".exportFields"][] = "descrizione";

$tdatavv_azioni_lista[".printFields"] = array();
$tdatavv_azioni_lista[".printFields"][] = "id";
$tdatavv_azioni_lista[".printFields"][] = "azione";
$tdatavv_azioni_lista[".printFields"][] = "descrizione";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "vv_azioni_lista";
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
	
		
		
	$tdatavv_azioni_lista["id"] = $fdata;
//	azione
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "azione";
	$fdata["GoodName"] = "azione";
	$fdata["ownerTable"] = "vv_azioni_lista";
	$fdata["Label"] = "Azione"; 
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
	
		$fdata["strField"] = "azione"; 
		$fdata["FullName"] = "azione";
	
		
		
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
	
		
		
	$tdatavv_azioni_lista["azione"] = $fdata;
//	descrizione
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descrizione";
	$fdata["GoodName"] = "descrizione";
	$fdata["ownerTable"] = "vv_azioni_lista";
	$fdata["Label"] = "Descrizione"; 
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
	
		$fdata["strField"] = "descrizione"; 
		$fdata["FullName"] = "descrizione";
	
		
		
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
	
		
		
	$tdatavv_azioni_lista["descrizione"] = $fdata;

	
$tables_data["vv_azioni_lista"]=&$tdatavv_azioni_lista;
$field_labels["vv_azioni_lista"] = &$fieldLabelsvv_azioni_lista;
$fieldToolTips["vv_azioni_lista"] = &$fieldToolTipsvv_azioni_lista;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vv_azioni_lista"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["vv_azioni_lista"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vv_azioni_lista()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   azione,   descrizione";
$proto0["m_strFrom"] = "FROM vv_azioni_lista";
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
	"m_strTable" => "vv_azioni_lista"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "azione",
	"m_strTable" => "vv_azioni_lista"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "descrizione",
	"m_strTable" => "vv_azioni_lista"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "vv_azioni_lista";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "azione";
$proto12["m_columns"][] = "descrizione";
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
$queryData_vv_azioni_lista = createSqlQuery_vv_azioni_lista();
			$tdatavv_azioni_lista[".sqlquery"] = $queryData_vv_azioni_lista;

$tableEvents["vv_azioni_lista"] = new eventsBase;
$tdatavv_azioni_lista[".hasEvents"] = false;

$cipherer = new RunnerCipherer("vv_azioni_lista");

?>