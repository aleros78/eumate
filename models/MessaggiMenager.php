<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro 
 * Date: 16/06/13
 * Time: 2.19
 * 
 * @author aleros78<at>gmail.com
 */
namespace pff\models;

class MessaggiMenager extends \pff\AModel {

     private $em;

    function __construct($em){
        $this->em = $em;
    }    

    public function getMessaggiArray(){
        $id_posto = $_SESSION['posto'];
        $posto = $this->em->find('pff\models\posto',$id_posto);
        $messaggi = $this->em->getRepository('pff\models\messaggi')->findBy(array('posto'=>$posto),array('data'=>'desc'),50);
        $result = array();
        if ($messaggi){
            foreach ($messaggi as $k=>$m){

                $result[$k]['nome']=$m->getPersonaggio()->getNome();
                $result[$k]['messaggio']=$m->getMessaggio();
                $result[$k]['tempo']=$m->getData()->format('H:i');

            }
        }
        return $result;
    }

}