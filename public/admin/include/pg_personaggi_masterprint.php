<?php
include_once(getabspath("include/pg_personaggi_settings.php"));

function DisplayMasterTableInfo_pg_personaggi($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="pg_personaggi";

//$strSQL = "SELECT id,   id_utente,   id_posto,   nome,   status,   att,   def,   cha,   mov,   mov_rimanenti,   mov_last_reset_time,   pf,   pf_rimanenti,   pf_last_reset_time,   lev,   xp,   xp_next,   id_gilda  FROM pg_personaggi ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["pg_personaggi_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="ge_messaggi")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if($detailtable=="pg_mail")
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

//	id_utente - 
			$xt->assign("id_utente_mastervalue", $viewControls->showDBValue("id_utente", $data, $keylink));

//	id_posto - 
			$xt->assign("id_posto_mastervalue", $viewControls->showDBValue("id_posto", $data, $keylink));

//	nome - 
			$xt->assign("nome_mastervalue", $viewControls->showDBValue("nome", $data, $keylink));

//	status - 
			$xt->assign("status_mastervalue", $viewControls->showDBValue("status", $data, $keylink));

//	att - 
			$xt->assign("att_mastervalue", $viewControls->showDBValue("att", $data, $keylink));

//	def - 
			$xt->assign("def_mastervalue", $viewControls->showDBValue("def", $data, $keylink));

//	cha - 
			$xt->assign("cha_mastervalue", $viewControls->showDBValue("cha", $data, $keylink));

//	mov - 
			$xt->assign("mov_mastervalue", $viewControls->showDBValue("mov", $data, $keylink));

//	mov_rimanenti - 
			$xt->assign("mov_rimanenti_mastervalue", $viewControls->showDBValue("mov_rimanenti", $data, $keylink));

//	mov_last_reset_time - 
			$xt->assign("mov_last_reset_time_mastervalue", $viewControls->showDBValue("mov_last_reset_time", $data, $keylink));

//	pf - 
			$xt->assign("pf_mastervalue", $viewControls->showDBValue("pf", $data, $keylink));

//	pf_rimanenti - 
			$xt->assign("pf_rimanenti_mastervalue", $viewControls->showDBValue("pf_rimanenti", $data, $keylink));

//	pf_last_reset_time - 
			$xt->assign("pf_last_reset_time_mastervalue", $viewControls->showDBValue("pf_last_reset_time", $data, $keylink));

//	lev - 
			$xt->assign("lev_mastervalue", $viewControls->showDBValue("lev", $data, $keylink));

//	xp - 
			$xt->assign("xp_mastervalue", $viewControls->showDBValue("xp", $data, $keylink));

//	xp_next - 
			$xt->assign("xp_next_mastervalue", $viewControls->showDBValue("xp_next", $data, $keylink));

//	id_gilda - 
			$xt->assign("id_gilda_mastervalue", $viewControls->showDBValue("id_gilda", $data, $keylink));
	$xt->display("pg_personaggi_masterprint.htm");
	$strTableName=$oldTableName;

}

?>