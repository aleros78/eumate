<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro 
 * Date: 01/08/13
 * Time: 16.50
 * 
 * @author aleros78<at>gmail.com
 */
namespace pff\models;

class MailManager extends \pff\AModel {

    private $em;

    public function __construct($em){
        $this->em = $em;
    }    

    public function sendMail($ricevi,$soggetto,$testo){

        $mail = new Mail();
        $mail->setInvia($_SESSION['login_personaggio']);
        $mail->setRicevi($ricevi);
        




    }

}