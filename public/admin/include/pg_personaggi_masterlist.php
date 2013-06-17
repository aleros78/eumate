<?php
include_once(getabspath("include/pg_personaggi_settings.php"));

function DisplayMasterTableInfo_pg_personaggi($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "pg_personaggi";
	
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["pg_personaggi_masterlist"] = $layout;


if($detailtable == "pg_mail")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
}
if($detailtable == "pg_messaggi")
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

//	id_utente - 
			$value="";

					$xt->assign("id_utente_mastervalue", $viewControls->showDBValue("id_utente", $data, $keylink));

//	id_posto - 
			$value="";

					$xt->assign("id_posto_mastervalue", $viewControls->showDBValue("id_posto", $data, $keylink));

//	nome - 
			$value="";

					$xt->assign("nome_mastervalue", $viewControls->showDBValue("nome", $data, $keylink));

//	status - 
			$value="";

					$xt->assign("status_mastervalue", $viewControls->showDBValue("status", $data, $keylink));

//	att - 
			$value="";

					$xt->assign("att_mastervalue", $viewControls->showDBValue("att", $data, $keylink));

//	def - 
			$value="";

					$xt->assign("def_mastervalue", $viewControls->showDBValue("def", $data, $keylink));

//	cha - 
			$value="";

					$xt->assign("cha_mastervalue", $viewControls->showDBValue("cha", $data, $keylink));

//	mov - 
			$value="";

					$xt->assign("mov_mastervalue", $viewControls->showDBValue("mov", $data, $keylink));

//	mov_rimanenti - 
			$value="";

					$xt->assign("mov_rimanenti_mastervalue", $viewControls->showDBValue("mov_rimanenti", $data, $keylink));

//	mov_last_reset_time - 
			$value="";

					$xt->assign("mov_last_reset_time_mastervalue", $viewControls->showDBValue("mov_last_reset_time", $data, $keylink));

//	pf - 
			$value="";

					$xt->assign("pf_mastervalue", $viewControls->showDBValue("pf", $data, $keylink));

//	pf_rimanenti - 
			$value="";

					$xt->assign("pf_rimanenti_mastervalue", $viewControls->showDBValue("pf_rimanenti", $data, $keylink));

//	pf_last_reset_time - 
			$value="";

					$xt->assign("pf_last_reset_time_mastervalue", $viewControls->showDBValue("pf_last_reset_time", $data, $keylink));

//	lev - 
			$value="";

					$xt->assign("lev_mastervalue", $viewControls->showDBValue("lev", $data, $keylink));

//	xp - 
			$value="";

					$xt->assign("xp_mastervalue", $viewControls->showDBValue("xp", $data, $keylink));

//	xp_next - 
			$value="";

					$xt->assign("xp_next_mastervalue", $viewControls->showDBValue("xp_next", $data, $keylink));

//	id_gilda - 
			$value="";

					$xt->assign("id_gilda_mastervalue", $viewControls->showDBValue("id_gilda", $data, $keylink));

	$viewControls->addControlsJSAndCSS();
	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("pg_personaggi", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("pg_personaggi_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>