<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapg_gilde = array();
	$tdatapg_gilde[".NumberOfChars"] = 80; 
	$tdatapg_gilde[".ShortName"] = "pg_gilde";
	$tdatapg_gilde[".OwnerID"] = "";
	$tdatapg_gilde[".OriginalTable"] = "pg_gilde";

//	field labels
$fieldLabelspg_gilde = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspg_gilde["English"] = array();
	$fieldToolTipspg_gilde["English"] = array();
	$fieldLabelspg_gilde["English"]["id"] = "Id";
	$fieldToolTipspg_gilde["English"]["id"] = "";
	$fieldLabelspg_gilde["English"]["nome"] = "Nome";
	$fieldToolTipspg_gilde["English"]["nome"] = "";
	$fieldLabelspg_gilde["English"]["descrizione"] = "Descrizione";
	$fieldToolTipspg_gilde["English"]["descrizione"] = "";
	$fieldLabelspg_gilde["English"]["attivo"] = "Attivo";
	$fieldToolTipspg_gilde["English"]["attivo"] = "";
	if (count($fieldToolTipspg_gilde["English"]))
		$tdatapg_gilde[".isUseToolTips"] = true;
}
	
	
	$tdatapg_gilde[".NCSearch"] = true;



$tdatapg_gilde[".shortTableName"] = "pg_gilde";
$tdatapg_gilde[".nSecOptions"] = 0;
$tdatapg_gilde[".recsPerRowList"] = 1;
$tdatapg_gilde[".mainTableOwnerID"] = "";
$tdatapg_gilde[".moveNext"] = 1;
$tdatapg_gilde[".nType"] = 0;

$tdatapg_gilde[".strOriginalTableName"] = "pg_gilde";




$tdatapg_gilde[".showAddInPopup"] = false;

$tdatapg_gilde[".showEditInPopup"] = false;

$tdatapg_gilde[".showViewInPopup"] = false;

$tdatapg_gilde[".fieldsForRegister"] = array();

$tdatapg_gilde[".listAjax"] = false;

	$tdatapg_gilde[".audit"] = false;

	$tdatapg_gilde[".locking"] = false;

$tdatapg_gilde[".listIcons"] = true;
$tdatapg_gilde[".edit"] = true;
$tdatapg_gilde[".inlineEdit"] = true;
$tdatapg_gilde[".inlineAdd"] = true;
$tdatapg_gilde[".view"] = true;

$tdatapg_gilde[".exportTo"] = true;

$tdatapg_gilde[".printFriendly"] = true;

$tdatapg_gilde[".delete"] = true;

$tdatapg_gilde[".showSimpleSearchOptions"] = false;

$tdatapg_gilde[".showSearchPanel"] = true;

if (isMobile())
	$tdatapg_gilde[".isUseAjaxSuggest"] = false;
else 
	$tdatapg_gilde[".isUseAjaxSuggest"] = true;

$tdatapg_gilde[".rowHighlite"] = true;

// button handlers file names

$tdatapg_gilde[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapg_gilde[".isUseTimeForSearch"] = false;



$tdatapg_gilde[".useDetailsPreview"] = true;

$tdatapg_gilde[".allSearchFields"] = array();

$tdatapg_gilde[".allSearchFields"][] = "id";
$tdatapg_gilde[".allSearchFields"][] = "nome";
$tdatapg_gilde[".allSearchFields"][] = "descrizione";
$tdatapg_gilde[".allSearchFields"][] = "attivo";

$tdatapg_gilde[".googleLikeFields"][] = "id";
$tdatapg_gilde[".googleLikeFields"][] = "nome";
$tdatapg_gilde[".googleLikeFields"][] = "descrizione";
$tdatapg_gilde[".googleLikeFields"][] = "attivo";


$tdatapg_gilde[".advSearchFields"][] = "id";
$tdatapg_gilde[".advSearchFields"][] = "nome";
$tdatapg_gilde[".advSearchFields"][] = "descrizione";
$tdatapg_gilde[".advSearchFields"][] = "attivo";

$tdatapg_gilde[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
		


$tdatapg_gilde[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapg_gilde[".strOrderBy"] = $tstrOrderBy;

$tdatapg_gilde[".orderindexes"] = array();

$tdatapg_gilde[".sqlHead"] = "SELECT id,   nome,   descrizione,   attivo";
$tdatapg_gilde[".sqlFrom"] = "FROM pg_gilde";
$tdatapg_gilde[".sqlWhereExpr"] = "";
$tdatapg_gilde[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapg_gilde[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapg_gilde[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspg_gilde = array();
$tableKeyspg_gilde[] = "id";
$tdatapg_gilde[".Keys"] = $tableKeyspg_gilde;

$tdatapg_gilde[".listFields"] = array();
$tdatapg_gilde[".listFields"][] = "id";
$tdatapg_gilde[".listFields"][] = "nome";
$tdatapg_gilde[".listFields"][] = "descrizione";
$tdatapg_gilde[".listFields"][] = "attivo";

$tdatapg_gilde[".viewFields"] = array();
$tdatapg_gilde[".viewFields"][] = "id";
$tdatapg_gilde[".viewFields"][] = "nome";
$tdatapg_gilde[".viewFields"][] = "descrizione";
$tdatapg_gilde[".viewFields"][] = "attivo";

$tdatapg_gilde[".addFields"] = array();
$tdatapg_gilde[".addFields"][] = "nome";
$tdatapg_gilde[".addFields"][] = "descrizione";
$tdatapg_gilde[".addFields"][] = "attivo";

$tdatapg_gilde[".inlineAddFields"] = array();
$tdatapg_gilde[".inlineAddFields"][] = "nome";
$tdatapg_gilde[".inlineAddFields"][] = "descrizione";
$tdatapg_gilde[".inlineAddFields"][] = "attivo";

$tdatapg_gilde[".editFields"] = array();
$tdatapg_gilde[".editFields"][] = "nome";
$tdatapg_gilde[".editFields"][] = "descrizione";
$tdatapg_gilde[".editFields"][] = "attivo";

$tdatapg_gilde[".inlineEditFields"] = array();
$tdatapg_gilde[".inlineEditFields"][] = "nome";
$tdatapg_gilde[".inlineEditFields"][] = "descrizione";
$tdatapg_gilde[".inlineEditFields"][] = "attivo";

$tdatapg_gilde[".exportFields"] = array();
$tdatapg_gilde[".exportFields"][] = "id";
$tdatapg_gilde[".exportFields"][] = "nome";
$tdatapg_gilde[".exportFields"][] = "descrizione";
$tdatapg_gilde[".exportFields"][] = "attivo";

$tdatapg_gilde[".printFields"] = array();
$tdatapg_gilde[".printFields"][] = "id";
$tdatapg_gilde[".printFields"][] = "nome";
$tdatapg_gilde[".printFields"][] = "descrizione";
$tdatapg_gilde[".printFields"][] = "attivo";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pg_gilde";
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
	
		
		
	$tdatapg_gilde["id"] = $fdata;
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "pg_gilde";
	$fdata["Label"] = "Nome"; 
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
	
		$fdata["strField"] = "nome"; 
		$fdata["FullName"] = "nome";
	
		
		
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
	
		
		
	$tdatapg_gilde["nome"] = $fdata;
//	descrizione
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descrizione";
	$fdata["GoodName"] = "descrizione";
	$fdata["ownerTable"] = "pg_gilde";
	$fdata["Label"] = "Descrizione"; 
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
	
		
		
	$tdatapg_gilde["descrizione"] = $fdata;
//	attivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "attivo";
	$fdata["GoodName"] = "attivo";
	$fdata["ownerTable"] = "pg_gilde";
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
	
		
		
	$tdatapg_gilde["attivo"] = $fdata;

	
$tables_data["pg_gilde"]=&$tdatapg_gilde;
$field_labels["pg_gilde"] = &$fieldLabelspg_gilde;
$fieldToolTips["pg_gilde"] = &$fieldToolTipspg_gilde;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pg_gilde"] = array();
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
		
	$detailsTablesData["pg_gilde"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pg_gilde"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["pg_gilde"][$dIndex]["detailKeys"][]="id_gilda";

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
		
	$detailsTablesData["pg_gilde"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["pg_gilde"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["pg_gilde"][$dIndex]["detailKeys"][]="id_gilda";

	
// tables which are master tables for current table (detail)
$masterTablesData["pg_gilde"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pg_gilde()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nome,   descrizione,   attivo";
$proto0["m_strFrom"] = "FROM pg_gilde";
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
	"m_strTable" => "pg_gilde"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "pg_gilde"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "descrizione",
	"m_strTable" => "pg_gilde"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "attivo",
	"m_strTable" => "pg_gilde"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "pg_gilde";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "nome";
$proto14["m_columns"][] = "descrizione";
$proto14["m_columns"][] = "attivo";
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
$queryData_pg_gilde = createSqlQuery_pg_gilde();
				$tdatapg_gilde[".sqlquery"] = $queryData_pg_gilde;

$tableEvents["pg_gilde"] = new eventsBase;
$tdatapg_gilde[".hasEvents"] = false;

$cipherer = new RunnerCipherer("pg_gilde");

?>