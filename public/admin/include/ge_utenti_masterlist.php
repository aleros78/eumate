<?php
include_once(getabspath("include/ge_utenti_settings.php"));

function DisplayMasterTableInfo_ge_utenti($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "ge_utenti";
	
	$settings = new ProjectSettings($strTableName, PAGE_LIST);
	$cipherer = new RunnerCipherer($strTableName);
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

$where = "";
$mKeys = array();
$showKeys = "";

global $page_styles, $page_layouts, $page_layout_names, $container_styles;

$layout = new TLayout("masterlist","BoldBlueWave","MobileBlueWave");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterlistheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterlistfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["ge_utenti_masterlist"] = $layout;


if($detailtable == "pg_personaggi")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
}
	if(!$where)
	{
		$strTableName = $oldTableName;
		return;
	}
	$str = SecuritySQL("Search");
	if(strlen($str))
		$where.= " and ".$str;

	$strWhere = whereAdd($masterQuery->WhereToSql(),$where);
	if(strlen($strWhere))
		$strWhere = " where ".$strWhere." ";
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();

//	$strSQL = AddWhere($strSQL,$where);
	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$data = $cipherer->DecryptFetchedArray($rs);
	if(!$data)
	{
		$strTableName = $oldTableName;
		return;
	}
	$keylink = "";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["id"]));
	

//	id - 
			$value="";

					$xt->assign("id_mastervalue", $viewControls->showDBValue("id", $data, $keylink));

//	id_tipologia - 
			$value="";

					$xt->assign("id_tipologia_mastervalue", $viewControls->showDBValue("id_tipologia", $data, $keylink));

//	nome - 
			$value="";

					$xt->assign("nome_mastervalue", $viewControls->showDBValue("nome", $data, $keylink));

//	cognome - 
			$value="";

					$xt->assign("cognome_mastervalue", $viewControls->showDBValue("cognome", $data, $keylink));

//	email - 
			$value="";

					$xt->assign("email_mastervalue", $viewControls->showDBValue("email", $data, $keylink));

//	password - 
			$value="";

					$xt->assign("password_mastervalue", $viewControls->showDBValue("password", $data, $keylink));

//	data_registrazione - Short Date
			$value="";

					$xt->assign("data_registrazione_mastervalue", $viewControls->showDBValue("data_registrazione", $data, $keylink));

//	ip_registrazione - 
			$value="";

					$xt->assign("ip_registrazione_mastervalue", $viewControls->showDBValue("ip_registrazione", $data, $keylink));

//	numero_login - 
			$value="";

					$xt->assign("numero_login_mastervalue", $viewControls->showDBValue("numero_login", $data, $keylink));

//	ip_ultimo_login - 
			$value="";

					$xt->assign("ip_ultimo_login_mastervalue", $viewControls->showDBValue("ip_ultimo_login", $data, $keylink));

//	attivo - Checkbox
			$value="";

					$xt->assign("attivo_mastervalue", $viewControls->showDBValue("attivo", $data, $keylink));

	$viewControls->addControlsJSAndCSS();
	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("ge_utenti", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("ge_utenti_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>