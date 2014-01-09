<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro 
 * Date: 01/08/13
 * Time: 16.42
 * 
 * @author aleros78<at>gmail.com
 */
namespace pff\models;

class ScontroManager extends \pff\AModel {

    private $em;

    public function __construct($em){
        $this->em = $em;
    }    



}