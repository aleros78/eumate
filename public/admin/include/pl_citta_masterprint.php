<?php
include_once(getabspath("include/pl_citta_settings.php"));

function DisplayMasterTableInfo_pl_citta($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="pl_citta";

//$strSQL = "SELECT id,   id_regione,   citta,   nome_it,   nome_en,   descrizione_it,   descrizione_en,   storia_it,   storia_en,   back_it,   back_en,   note_it,   note_en,   attivo  FROM pl_citta ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["pl_citta_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="pl_posti")
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

//	id_regione - 
			$xt->assign("id_regione_mastervalue", $viewControls->showDBValue("id_regione", $data, $keylink));

//	citta - 
			$xt->assign("citta_mastervalue", $viewControls->showDBValue("citta", $data, $keylink));

//	nome_it - 
			$xt->assign("nome_it_mastervalue", $viewControls->showDBValue("nome_it", $data, $keylink));

//	nome_en - 
			$xt->assign("nome_en_mastervalue", $viewControls->showDBValue("nome_en", $data, $keylink));

//	descrizione_it - 
			$xt->assign("descrizione_it_mastervalue", $viewControls->showDBValue("descrizione_it", $data, $keylink));

//	descrizione_en - 
			$xt->assign("descrizione_en_mastervalue", $viewControls->showDBValue("descrizione_en", $data, $keylink));

//	storia_it - 
			$xt->assign("storia_it_mastervalue", $viewControls->showDBValue("storia_it", $data, $keylink));

//	storia_en - 
			$xt->assign("storia_en_mastervalue", $viewControls->showDBValue("storia_en", $data, $keylink));

//	back_it - 
			$xt->assign("back_it_mastervalue", $viewControls->showDBValue("back_it", $data, $keylink));

//	back_en - 
			$xt->assign("back_en_mastervalue", $viewControls->showDBValue("back_en", $data, $keylink));

//	note_it - 
			$xt->assign("note_it_mastervalue", $viewControls->showDBValue("note_it", $data, $keylink));

//	note_en - 
			$xt->assign("note_en_mastervalue", $viewControls->showDBValue("note_en", $data, $keylink));

//	attivo - Checkbox
			$xt->assign("attivo_mastervalue", $viewControls->showDBValue("attivo", $data, $keylink));
	$xt->display("pl_citta_masterprint.htm");
	$strTableName=$oldTableName;

}

?>