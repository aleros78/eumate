<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/pg_personaggi_variables.php");

$mode = postvalue("mode");


$cipherer = new RunnerCipherer($strTableName);


include('include/xtempl.php');
$xt = new Xtempl();

$layout = new TLayout("detailspreview","BoldBlueWave","MobileBlueWave");
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();

$layout->containers["dcount"][] = array("name"=>"detailspreviewheader","block"=>"","substyle"=>1);


$layout->containers["dcount"][] = array("name"=>"detailspreviewdetailsfount","block"=>"","substyle"=>1);


$layout->containers["dcount"][] = array("name"=>"detailspreviewdispfirst","block"=>"display_first","substyle"=>1);


$layout->skins["dcount"] = "empty";
$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();

$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields","block"=>"details_data","substyle"=>1);


$layout->skins["detailspreviewgrid"] = "grid";
$layout->blocks["bare"][] = "detailspreviewgrid";$page_layouts["pg_personaggi_detailspreview"] = $layout;


$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
if($mastertable != "")
{
	$_SESSION[$strTableName."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$strTableName."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$strTableName."_masterkey".$i]))
		unset($_SESSION[$strTableName."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$strTableName."_mastertable"];

//$strSQL = $gstrSQL;

if($mastertable == "pg_gilde")
{
	$where = "";
		$where .= GetFullFieldName("id_gilda", $strTableName, false)."=".make_db_value("id_gilda",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "ge_utenti")
{
	$where = "";
		$where .= GetFullFieldName("id_utente", $strTableName, false)."=".make_db_value("id_utente",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "pl_posti")
{
	$where = "";
		$where .= GetFullFieldName("id_posto", $strTableName, false)."=".make_db_value("id_posto",$_SESSION[$strTableName."_masterkey1"]);
}

$str = SecuritySQL("Search");
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where);

$xt->assign("row_count",$rowcount);
if($rowcount) {
	$xt->assign("details_data",true);
	$rs = db_query($strSQL,$conn);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	$data = $cipherer->DecryptFetchedArray($rs);
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["id"]));

	
	//	id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id", $data, $keylink);
			$row["id_value"] = $value;
	//	id_utente - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id_utente", $data, $keylink);
			$row["id_utente_value"] = $value;
	//	id_posto - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id_posto", $data, $keylink);
			$row["id_posto_value"] = $value;
	//	nome - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("nome", $data, $keylink);
			$row["nome_value"] = $value;
	//	status - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("status", $data, $keylink);
			$row["status_value"] = $value;
	//	att - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("att", $data, $keylink);
			$row["att_value"] = $value;
	//	def - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("def", $data, $keylink);
			$row["def_value"] = $value;
	//	cha - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("cha", $data, $keylink);
			$row["cha_value"] = $value;
	//	mov - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("mov", $data, $keylink);
			$row["mov_value"] = $value;
	//	mov_rimanenti - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("mov_rimanenti", $data, $keylink);
			$row["mov_rimanenti_value"] = $value;
	//	mov_last_reset_time - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("mov_last_reset_time", $data, $keylink);
			$row["mov_last_reset_time_value"] = $value;
	//	pf - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pf", $data, $keylink);
			$row["pf_value"] = $value;
	//	pf_rimanenti - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pf_rimanenti", $data, $keylink);
			$row["pf_rimanenti_value"] = $value;
	//	pf_last_reset_time - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pf_last_reset_time", $data, $keylink);
			$row["pf_last_reset_time_value"] = $value;
	//	lev - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("lev", $data, $keylink);
			$row["lev_value"] = $value;
	//	xp - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("xp", $data, $keylink);
			$row["xp_value"] = $value;
	//	xp_next - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("xp_next", $data, $keylink);
			$row["xp_next_value"] = $value;
	//	id_gilda - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id_gilda", $data, $keylink);
			$row["id_gilda_value"] = $value;
		$rowinfo[] = $row;
		$data = $cipherer->DecryptFetchedArray($rs);
	}
	$xt->assign_loopsection("details_row",$rowinfo);
}
$returnJSON = array("success" => true);
$xt->load_template("pg_personaggi_detailspreview.htm");
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline"){
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
		$returnJSON["style"] = "styles/".$layout->style."/style".$rtl.".css";
		$returnJSON["pageStyle"] = "pagestyles/".$layout->name.$rtl.".css";
		$returnJSON["layout"] = $layout->style." page-".$layout->name.".css";
	}	
}	

echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
?>