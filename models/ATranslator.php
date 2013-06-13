<?php

namespace pff\models;


use pff\AModel;

class ATranslator extends AModel {

    protected function getTranslated($attrName){
        if(!isset($_SESSION['lang'])){
            $_SESSION['lang'] = $_SESSION['default_language'];
        }
        $var = $attrName.ucfirst($_SESSION['lang']);
        $value = call_user_func(array($this,'get'.ucfirst($var)));
        if($value && $value != ""){
            return $value;
        }else{
            return call_user_func(array($this,'get'.ucfirst($attrName.ucfirst($_SESSION['default_language']))));
        }
    }
}
