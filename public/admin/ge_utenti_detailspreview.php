<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/ge_utenti_variables.php");

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
$layout->blocks["bare"][] = "detailspreviewgrid";$page_layouts["ge_utenti_detailspreview"] = $layout;


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

if($mastertable == "vv_tipologia_utenti")
{
	$where = "";
		$where .= GetFullFieldName("id_tipologia", $strTableName, false)."=".make_db_value("id_tipologia",$_SESSION[$strTableName."_masterkey1"]);
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
	//	id_tipologia - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id_tipologia", $data, $keylink);
			$row["id_tipologia_value"] = $value;
	//	nome - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("nome", $data, $keylink);
			$row["nome_value"] = $value;
	//	cognome - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("cognome", $data, $keylink);
			$row["cognome_value"] = $value;
	//	email - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("email", $data, $keylink);
			$row["email_value"] = $value;
	//	password - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("password", $data, $keylink);
			$row["password_value"] = $value;
	//	data_registrazione - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("data_registrazione", $data, $keylink);
			$row["data_registrazione_value"] = $value;
	//	ip_registrazione - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ip_registrazione", $data, $keylink);
			$row["ip_registrazione_value"] = $value;
	//	numero_login - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("numero_login", $data, $keylink);
			$row["numero_login_value"] = $value;
	//	ip_ultimo_login - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ip_ultimo_login", $data, $keylink);
			$row["ip_ultimo_login_value"] = $value;
	//	attivo - Checkbox
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("attivo", $data, $keylink);
			$row["attivo_value"] = $value;
		$rowinfo[] = $row;
		$data = $cipherer->DecryptFetchedArray($rs);
	}
	$xt->assign_loopsection("details_row",$rowinfo);
}
$returnJSON = array("success" => true);
$xt->load_template("ge_utenti_detailspreview.htm");
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