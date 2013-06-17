<?php
$dalTablepg_mail = array();
$dalTablepg_mail["id"] = array("type"=>3,"varname"=>"id");
$dalTablepg_mail["invia"] = array("type"=>3,"varname"=>"invia");
$dalTablepg_mail["ricevi"] = array("type"=>3,"varname"=>"ricevi");
$dalTablepg_mail["messaggio"] = array("type"=>201,"varname"=>"messaggio");
$dalTablepg_mail["soggetto"] = array("type"=>200,"varname"=>"soggetto");
$dalTablepg_mail["data"] = array("type"=>7,"varname"=>"data");
$dalTablepg_mail["aperta"] = array("type"=>16,"varname"=>"aperta");
$dalTablepg_mail["vista_invia"] = array("type"=>16,"varname"=>"vista_invia");
$dalTablepg_mail["vista_ricevi"] = array("type"=>16,"varname"=>"vista_ricevi");
	$dalTablepg_mail["id"]["key"]=true;
$dal_info["pg_mail"]=&$dalTablepg_mail;

?>