<?php
include_once(getabspath("include/pl_posti_settings.php"));

function DisplayMasterTableInfo_pl_posti($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "pl_posti";
	
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["pl_posti_masterlist"] = $layout;


if($detailtable == "pg_personaggi")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
}
if($detailtable == "pl_riferimenti_posti")
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

//	id_location - 
			$value="";

					$xt->assign("id_location_mastervalue", $viewControls->showDBValue("id_location", $data, $keylink));

//	id_citta - 
			$value="";

					$xt->assign("id_citta_mastervalue", $viewControls->showDBValue("id_citta", $data, $keylink));

//	id_regione - 
			$value="";

					$xt->assign("id_regione_mastervalue", $viewControls->showDBValue("id_regione", $data, $keylink));

//	posto - 
			$value="";

					$xt->assign("posto_mastervalue", $viewControls->showDBValue("posto", $data, $keylink));

//	nome_it - 
			$value="";

					$xt->assign("nome_it_mastervalue", $viewControls->showDBValue("nome_it", $data, $keylink));

//	nome_en - 
			$value="";

					$xt->assign("nome_en_mastervalue", $viewControls->showDBValue("nome_en", $data, $keylink));

//	descrizione_it - 
			$value="";

					$xt->assign("descrizione_it_mastervalue", $viewControls->showDBValue("descrizione_it", $data, $keylink));

//	descrizione_en - 
			$value="";

					$xt->assign("descrizione_en_mastervalue", $viewControls->showDBValue("descrizione_en", $data, $keylink));

//	storia_it - 
			$value="";

					$xt->assign("storia_it_mastervalue", $viewControls->showDBValue("storia_it", $data, $keylink));

//	storia_en - 
			$value="";

					$xt->assign("storia_en_mastervalue", $viewControls->showDBValue("storia_en", $data, $keylink));

//	back_it - 
			$value="";

					$xt->assign("back_it_mastervalue", $viewControls->showDBValue("back_it", $data, $keylink));

//	back_en - 
			$value="";

					$xt->assign("back_en_mastervalue", $viewControls->showDBValue("back_en", $data, $keylink));

//	note_it - 
			$value="";

					$xt->assign("note_it_mastervalue", $viewControls->showDBValue("note_it", $data, $keylink));

//	note_en - 
			$value="";

					$xt->assign("note_en_mastervalue", $viewControls->showDBValue("note_en", $data, $keylink));

//	attivo - Checkbox
			$value="";

					$xt->assign("attivo_mastervalue", $viewControls->showDBValue("attivo", $data, $keylink));

	$viewControls->addControlsJSAndCSS();
	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("pl_posti", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("pl_posti_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>