<?php
require_once(getabspath("classes/cipherer.php"));
$tdatage_utenti = array();
	$tdatage_utenti[".NumberOfChars"] = 80; 
	$tdatage_utenti[".ShortName"] = "ge_utenti";
	$tdatage_utenti[".OwnerID"] = "";
	$tdatage_utenti[".OriginalTable"] = "ge_utenti";

//	field labels
$fieldLabelsge_utenti = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsge_utenti["English"] = array();
	$fieldToolTipsge_utenti["English"] = array();
	$fieldLabelsge_utenti["English"]["id"] = "Id";
	$fieldToolTipsge_utenti["English"]["id"] = "";
	$fieldLabelsge_utenti["English"]["id_tipologia"] = "Id Tipologia";
	$fieldToolTipsge_utenti["English"]["id_tipologia"] = "";
	$fieldLabelsge_utenti["English"]["nome"] = "Nome";
	$fieldToolTipsge_utenti["English"]["nome"] = "";
	$fieldLabelsge_utenti["English"]["cognome"] = "Cognome";
	$fieldToolTipsge_utenti["English"]["cognome"] = "";
	$fieldLabelsge_utenti["English"]["email"] = "Email";
	$fieldToolTipsge_utenti["English"]["email"] = "";
	$fieldLabelsge_utenti["English"]["password"] = "Password";
	$fieldToolTipsge_utenti["English"]["password"] = "";
	$fieldLabelsge_utenti["English"]["data_registrazione"] = "Data Registrazione";
	$fieldToolTipsge_utenti["English"]["data_registrazione"] = "";
	$fieldLabelsge_utenti["English"]["ip_registrazione"] = "Ip Registrazione";
	$fieldToolTipsge_utenti["English"]["ip_registrazione"] = "";
	$fieldLabelsge_utenti["English"]["numero_login"] = "Numero Login";
	$fieldToolTipsge_utenti["English"]["numero_login"] = "";
	$fieldLabelsge_utenti["English"]["ip_ultimo_login"] = "Ip Ultimo Login";
	$fieldToolTipsge_utenti["English"]["ip_ultimo_login"] = "";
	$fieldLabelsge_utenti["English"]["attivo"] = "Attivo";
	$fieldToolTipsge_utenti["English"]["attivo"] = "";
	if (count($fieldToolTipsge_utenti["English"]))
		$tdatage_utenti[".isUseToolTips"] = true;
}
	
	
	$tdatage_utenti[".NCSearch"] = true;



$tdatage_utenti[".shortTableName"] = "ge_utenti";
$tdatage_utenti[".nSecOptions"] = 0;
$tdatage_utenti[".recsPerRowList"] = 1;
$tdatage_utenti[".mainTableOwnerID"] = "";
$tdatage_utenti[".moveNext"] = 1;
$tdatage_utenti[".nType"] = 0;

$tdatage_utenti[".strOriginalTableName"] = "ge_utenti";




$tdatage_utenti[".showAddInPopup"] = false;

$tdatage_utenti[".showEditInPopup"] = false;

$tdatage_utenti[".showViewInPopup"] = false;

$tdatage_utenti[".fieldsForRegister"] = array();

$tdatage_utenti[".listAjax"] = false;

	$tdatage_utenti[".audit"] = false;

	$tdatage_utenti[".locking"] = false;

$tdatage_utenti[".listIcons"] = true;
$tdatage_utenti[".edit"] = true;
$tdatage_utenti[".copy"] = true;
$tdatage_utenti[".view"] = true;



$tdatage_utenti[".delete"] = true;

$tdatage_utenti[".showSimpleSearchOptions"] = false;

$tdatage_utenti[".showSearchPanel"] = true;

if (isMobile())
	$tdatage_utenti[".isUseAjaxSuggest"] = false;
else 
	$tdatage_utenti[".isUseAjaxSuggest"] = true;

$tdatage_utenti[".rowHighlite"] = true;

// button handlers file names

$tdatage_utenti[".addPageEvents"] = false;

// use timepicker for search panel
$tdatage_utenti[".isUseTimeForSearch"] = false;




$tdatage_utenti[".allSearchFields"] = array();

$tdatage_utenti[".allSearchFields"][] = "id";
$tdatage_utenti[".allSearchFields"][] = "id_tipologia";
$tdatage_utenti[".allSearchFields"][] = "nome";
$tdatage_utenti[".allSearchFields"][] = "cognome";
$tdatage_utenti[".allSearchFields"][] = "email";
$tdatage_utenti[".allSearchFields"][] = "password";
$tdatage_utenti[".allSearchFields"][] = "data_registrazione";
$tdatage_utenti[".allSearchFields"][] = "ip_registrazione";
$tdatage_utenti[".allSearchFields"][] = "numero_login";
$tdatage_utenti[".allSearchFields"][] = "ip_ultimo_login";
$tdatage_utenti[".allSearchFields"][] = "attivo";

$tdatage_utenti[".googleLikeFields"][] = "id";
$tdatage_utenti[".googleLikeFields"][] = "id_tipologia";
$tdatage_utenti[".googleLikeFields"][] = "nome";
$tdatage_utenti[".googleLikeFields"][] = "cognome";
$tdatage_utenti[".googleLikeFields"][] = "email";
$tdatage_utenti[".googleLikeFields"][] = "password";
$tdatage_utenti[".googleLikeFields"][] = "data_registrazione";
$tdatage_utenti[".googleLikeFields"][] = "ip_registrazione";
$tdatage_utenti[".googleLikeFields"][] = "numero_login";
$tdatage_utenti[".googleLikeFields"][] = "ip_ultimo_login";
$tdatage_utenti[".googleLikeFields"][] = "attivo";


$tdatage_utenti[".advSearchFields"][] = "id";
$tdatage_utenti[".advSearchFields"][] = "id_tipologia";
$tdatage_utenti[".advSearchFields"][] = "nome";
$tdatage_utenti[".advSearchFields"][] = "cognome";
$tdatage_utenti[".advSearchFields"][] = "email";
$tdatage_utenti[".advSearchFields"][] = "password";
$tdatage_utenti[".advSearchFields"][] = "data_registrazione";
$tdatage_utenti[".advSearchFields"][] = "ip_registrazione";
$tdatage_utenti[".advSearchFields"][] = "numero_login";
$tdatage_utenti[".advSearchFields"][] = "ip_ultimo_login";
$tdatage_utenti[".advSearchFields"][] = "attivo";

$tdatage_utenti[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatage_utenti[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatage_utenti[".strOrderBy"] = $tstrOrderBy;

$tdatage_utenti[".orderindexes"] = array();

$tdatage_utenti[".sqlHead"] = "SELECT id,   id_tipologia,   nome,   cognome,   email,   password,   data_registrazione,   ip_registrazione,   numero_login,   ip_ultimo_login,   attivo";
$tdatage_utenti[".sqlFrom"] = "FROM ge_utenti";
$tdatage_utenti[".sqlWhereExpr"] = "";
$tdatage_utenti[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatage_utenti[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatage_utenti[".arrGroupsPerPage"] = $arrGPP;

$tableKeysge_utenti = array();
$tableKeysge_utenti[] = "id";
$tdatage_utenti[".Keys"] = $tableKeysge_utenti;

$tdatage_utenti[".listFields"] = array();
$tdatage_utenti[".listFields"][] = "id";
$tdatage_utenti[".listFields"][] = "id_tipologia";
$tdatage_utenti[".listFields"][] = "nome";
$tdatage_utenti[".listFields"][] = "cognome";
$tdatage_utenti[".listFields"][] = "email";
$tdatage_utenti[".listFields"][] = "password";
$tdatage_utenti[".listFields"][] = "data_registrazione";
$tdatage_utenti[".listFields"][] = "ip_registrazione";
$tdatage_utenti[".listFields"][] = "numero_login";
$tdatage_utenti[".listFields"][] = "ip_ultimo_login";
$tdatage_utenti[".listFields"][] = "attivo";

$tdatage_utenti[".viewFields"] = array();
$tdatage_utenti[".viewFields"][] = "id";
$tdatage_utenti[".viewFields"][] = "id_tipologia";
$tdatage_utenti[".viewFields"][] = "nome";
$tdatage_utenti[".viewFields"][] = "cognome";
$tdatage_utenti[".viewFields"][] = "email";
$tdatage_utenti[".viewFields"][] = "password";
$tdatage_utenti[".viewFields"][] = "data_registrazione";
$tdatage_utenti[".viewFields"][] = "ip_registrazione";
$tdatage_utenti[".viewFields"][] = "numero_login";
$tdatage_utenti[".viewFields"][] = "ip_ultimo_login";
$tdatage_utenti[".viewFields"][] = "attivo";

$tdatage_utenti[".addFields"] = array();
$tdatage_utenti[".addFields"][] = "id_tipologia";
$tdatage_utenti[".addFields"][] = "nome";
$tdatage_utenti[".addFields"][] = "cognome";
$tdatage_utenti[".addFields"][] = "email";
$tdatage_utenti[".addFields"][] = "password";
$tdatage_utenti[".addFields"][] = "data_registrazione";
$tdatage_utenti[".addFields"][] = "ip_registrazione";
$tdatage_utenti[".addFields"][] = "numero_login";
$tdatage_utenti[".addFields"][] = "ip_ultimo_login";
$tdatage_utenti[".addFields"][] = "attivo";

$tdatage_utenti[".inlineAddFields"] = array();

$tdatage_utenti[".editFields"] = array();
$tdatage_utenti[".editFields"][] = "id_tipologia";
$tdatage_utenti[".editFields"][] = "nome";
$tdatage_utenti[".editFields"][] = "cognome";
$tdatage_utenti[".editFields"][] = "email";
$tdatage_utenti[".editFields"][] = "password";
$tdatage_utenti[".editFields"][] = "data_registrazione";
$tdatage_utenti[".editFields"][] = "ip_registrazione";
$tdatage_utenti[".editFields"][] = "numero_login";
$tdatage_utenti[".editFields"][] = "ip_ultimo_login";
$tdatage_utenti[".editFields"][] = "attivo";

$tdatage_utenti[".inlineEditFields"] = array();

$tdatage_utenti[".exportFields"] = array();

$tdatage_utenti[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ge_utenti";
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
	
		
		
	$tdatage_utenti["id"] = $fdata;
//	id_tipologia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_tipologia";
	$fdata["GoodName"] = "id_tipologia";
	$fdata["ownerTable"] = "ge_utenti";
	$fdata["Label"] = "Id Tipologia"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id_tipologia"; 
		$fdata["FullName"] = "id_tipologia";
	
		
		
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
	$edata["DisplayField"] = "tipologia";
	
		
	$edata["LookupTable"] = "vv_tipologia_utenti";
	$edata["LookupOrderBy"] = "tipologia";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatage_utenti["id_tipologia"] = $fdata;
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "ge_utenti";
	$fdata["Label"] = "Nome"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatage_utenti["nome"] = $fdata;
//	cognome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cognome";
	$fdata["GoodName"] = "cognome";
	$fdata["ownerTable"] = "ge_utenti";
	$fdata["Label"] = "Cognome"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "cognome"; 
		$fdata["FullName"] = "cognome";
	
		
		
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
	
		
		
	$tdatage_utenti["cognome"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "ge_utenti";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "email"; 
		$fdata["FullName"] = "email";
	
		
		
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
	
		
		
	$tdatage_utenti["email"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "ge_utenti";
	$fdata["Label"] = "Password"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "password"; 
		$fdata["FullName"] = "password";
	
		
		
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
			$edata["EditParams"].= " maxlength=32";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatage_utenti["password"] = $fdata;
//	data_registrazione
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "data_registrazione";
	$fdata["GoodName"] = "data_registrazione";
	$fdata["ownerTable"] = "ge_utenti";
	$fdata["Label"] = "Data Registrazione"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "data_registrazione"; 
		$fdata["FullName"] = "data_registrazione";
	
		
		
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
	
		
		
	$tdatage_utenti["data_registrazione"] = $fdata;
//	ip_registrazione
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ip_registrazione";
	$fdata["GoodName"] = "ip_registrazione";
	$fdata["ownerTable"] = "ge_utenti";
	$fdata["Label"] = "Ip Registrazione"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ip_registrazione"; 
		$fdata["FullName"] = "ip_registrazione";
	
		
		
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
	
		
		
	$tdatage_utenti["ip_registrazione"] = $fdata;
//	numero_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "numero_login";
	$fdata["GoodName"] = "numero_login";
	$fdata["ownerTable"] = "ge_utenti";
	$fdata["Label"] = "Numero Login"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "numero_login"; 
		$fdata["FullName"] = "numero_login";
	
		
		
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
	
		
		
	$tdatage_utenti["numero_login"] = $fdata;
//	ip_ultimo_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ip_ultimo_login";
	$fdata["GoodName"] = "ip_ultimo_login";
	$fdata["ownerTable"] = "ge_utenti";
	$fdata["Label"] = "Ip Ultimo Login"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ip_ultimo_login"; 
		$fdata["FullName"] = "ip_ultimo_login";
	
		
		
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
	
		
		
	$tdatage_utenti["ip_ultimo_login"] = $fdata;
//	attivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "attivo";
	$fdata["GoodName"] = "attivo";
	$fdata["ownerTable"] = "ge_utenti";
	$fdata["Label"] = "Attivo"; 
	$fdata["FieldType"] = 16;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatage_utenti["attivo"] = $fdata;

	
$tables_data["ge_utenti"]=&$tdatage_utenti;
$field_labels["ge_utenti"] = &$fieldLabelsge_utenti;
$fieldToolTips["ge_utenti"] = &$fieldToolTipsge_utenti;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ge_utenti"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="pg_personaggi";
	$detailsParam["dDataSourceTable"]="pg_personaggi";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="pg_personaggi";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 0;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["ge_utenti"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["ge_utenti"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["ge_utenti"][$dIndex]["detailKeys"][]="id_utente";

	
// tables which are master tables for current table (detail)
$masterTablesData["ge_utenti"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="vv_tipologia_utenti";
	$masterParams["mDataSourceTable"]="vv_tipologia_utenti";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vv_tipologia_utenti";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 0;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["ge_utenti"][$mIndex] = $masterParams;	
		$masterTablesData["ge_utenti"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["ge_utenti"][$mIndex]["detailKeys"][]="id_tipologia";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ge_utenti()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   id_tipologia,   nome,   cognome,   email,   password,   data_registrazione,   ip_registrazione,   numero_login,   ip_ultimo_login,   attivo";
$proto0["m_strFrom"] = "FROM ge_utenti";
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
	"m_strTable" => "ge_utenti"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id_tipologia",
	"m_strTable" => "ge_utenti"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "ge_utenti"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cognome",
	"m_strTable" => "ge_utenti"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "ge_utenti"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "ge_utenti"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "data_registrazione",
	"m_strTable" => "ge_utenti"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ip_registrazione",
	"m_strTable" => "ge_utenti"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_login",
	"m_strTable" => "ge_utenti"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "ip_ultimo_login",
	"m_strTable" => "ge_utenti"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "attivo",
	"m_strTable" => "ge_utenti"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "ge_utenti";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id";
$proto28["m_columns"][] = "id_tipologia";
$proto28["m_columns"][] = "nome";
$proto28["m_columns"][] = "cognome";
$proto28["m_columns"][] = "email";
$proto28["m_columns"][] = "password";
$proto28["m_columns"][] = "data_registrazione";
$proto28["m_columns"][] = "ip_registrazione";
$proto28["m_columns"][] = "numero_login";
$proto28["m_columns"][] = "ip_ultimo_login";
$proto28["m_columns"][] = "attivo";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_alias"] = "";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = "0";
$proto29["m_inBrackets"] = "0";
$proto29["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ge_utenti = createSqlQuery_ge_utenti();
											$tdatage_utenti[".sqlquery"] = $queryData_ge_utenti;

$tableEvents["ge_utenti"] = new eventsBase;
$tdatage_utenti[".hasEvents"] = false;

$cipherer = new RunnerCipherer("ge_utenti");

?>