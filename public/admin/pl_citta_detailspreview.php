<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/pl_citta_variables.php");

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
$layout->blocks["bare"][] = "detailspreviewgrid";$page_layouts["pl_citta_detailspreview"] = $layout;


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

if($mastertable == "pl_regioni")
{
	$where = "";
		$where .= GetFullFieldName("id_regione", $strTableName, false)."=".make_db_value("id_regione",$_SESSION[$strTableName."_masterkey1"]);
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
	//	id_regione - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id_regione", $data, $keylink);
			$row["id_regione_value"] = $value;
	//	citta - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("citta", $data, $keylink);
			$row["citta_value"] = $value;
	//	nome_it - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("nome_it", $data, $keylink);
			$row["nome_it_value"] = $value;
	//	nome_en - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("nome_en", $data, $keylink);
			$row["nome_en_value"] = $value;
	//	descrizione_it - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("descrizione_it", $data, $keylink);
			$row["descrizione_it_value"] = $value;
	//	descrizione_en - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("descrizione_en", $data, $keylink);
			$row["descrizione_en_value"] = $value;
	//	storia_it - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("storia_it", $data, $keylink);
			$row["storia_it_value"] = $value;
	//	storia_en - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("storia_en", $data, $keylink);
			$row["storia_en_value"] = $value;
	//	back_it - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("back_it", $data, $keylink);
			$row["back_it_value"] = $value;
	//	back_en - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("back_en", $data, $keylink);
			$row["back_en_value"] = $value;
	//	note_it - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("note_it", $data, $keylink);
			$row["note_it_value"] = $value;
	//	note_en - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("note_en", $data, $keylink);
			$row["note_en_value"] = $value;
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
$xt->load_template("pl_citta_detailspreview.htm");
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