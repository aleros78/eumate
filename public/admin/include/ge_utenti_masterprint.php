<?php
include_once(getabspath("include/ge_utenti_settings.php"));

function DisplayMasterTableInfo_ge_utenti($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="ge_utenti";

//$strSQL = "SELECT id,   id_tipologia,   nome,   cognome,   email,   password,   data_registrazione,   ip_registrazione,   numero_login,   ip_ultimo_login,   attivo  FROM ge_utenti ";

	$cipherer = new RunnerCipherer($strTableName);
	$settings = new ProjectSettings($strTableName, PAGE_PRINT);
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

$where="";

global $pageObject, $page_styles, $page_layouts, $page_layout_names, $container_styles;
$layout = new TLayout("masterprint","BoldBlueWave","MobileBlueWave");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterprintheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterprintfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["ge_utenti_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="pg_personaggi")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if(!$where)
{
	$strTableName=$oldTableName;
	return;
}
	$str = SecuritySQL("Export");
	if(strlen($str))
		$where.=" and ".$str;
	
	$strWhere = whereAdd($masterQuery->m_where->toSql($masterQuery),$where);
	if(strlen($strWhere))
		$strWhere=" where ".$strWhere." ";
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();

//	$strSQL=AddWhere($strSQL,$where);

	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
	$data = $cipherer->DecryptFetchedArray($rs);
	if(!$data)
	{
		$strTableName=$oldTableName;
		return;
	}
	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["id"]));
	

//	id - 
			$xt->assign("id_mastervalue", $viewControls->showDBValue("id", $data, $keylink));

//	id_tipologia - 
			$xt->assign("id_tipologia_mastervalue", $viewControls->showDBValue("id_tipologia", $data, $keylink));

//	nome - 
			$xt->assign("nome_mastervalue", $viewControls->showDBValue("nome", $data, $keylink));

//	cognome - 
			$xt->assign("cognome_mastervalue", $viewControls->showDBValue("cognome", $data, $keylink));

//	email - 
			$xt->assign("email_mastervalue", $viewControls->showDBValue("email", $data, $keylink));

//	password - 
			$xt->assign("password_mastervalue", $viewControls->showDBValue("password", $data, $keylink));

//	data_registrazione - Short Date
			$xt->assign("data_registrazione_mastervalue", $viewControls->showDBValue("data_registrazione", $data, $keylink));

//	ip_registrazione - 
			$xt->assign("ip_registrazione_mastervalue", $viewControls->showDBValue("ip_registrazione", $data, $keylink));

//	numero_login - 
			$xt->assign("numero_login_mastervalue", $viewControls->showDBValue("numero_login", $data, $keylink));

//	ip_ultimo_login - 
			$xt->assign("ip_ultimo_login_mastervalue", $viewControls->showDBValue("ip_ultimo_login", $data, $keylink));

//	attivo - Checkbox
			$xt->assign("attivo_mastervalue", $viewControls->showDBValue("attivo", $data, $keylink));
	$xt->display("ge_utenti_masterprint.htm");
	$strTableName=$oldTableName;

}

?>