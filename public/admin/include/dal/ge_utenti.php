<?php
$dalTablege_utenti = array();
$dalTablege_utenti["id"] = array("type"=>3,"varname"=>"id");
$dalTablege_utenti["id_tipologia"] = array("type"=>3,"varname"=>"id_tipologia");
$dalTablege_utenti["nome"] = array("type"=>200,"varname"=>"nome");
$dalTablege_utenti["cognome"] = array("type"=>200,"varname"=>"cognome");
$dalTablege_utenti["email"] = array("type"=>200,"varname"=>"email");
$dalTablege_utenti["password"] = array("type"=>200,"varname"=>"password");
$dalTablege_utenti["data_registrazione"] = array("type"=>7,"varname"=>"data_registrazione");
$dalTablege_utenti["ip_registrazione"] = array("type"=>200,"varname"=>"ip_registrazione");
$dalTablege_utenti["numero_login"] = array("type"=>3,"varname"=>"numero_login");
$dalTablege_utenti["ip_ultimo_login"] = array("type"=>200,"varname"=>"ip_ultimo_login");
$dalTablege_utenti["attivo"] = array("type"=>16,"varname"=>"attivo");
	$dalTablege_utenti["id"]["key"]=true;
$dal_info["ge_utenti"]=&$dalTablege_utenti;

?>