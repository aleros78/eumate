<?php

namespace pff\models;

use Doctrine\ORM\EntityManager;
use pff\AModel;

class TestoManager extends AModel{

   /** @var EntityManager */
   private $_em;

   private $testi;

   public function __construct(EntityManager $_em){
       $this->_em = $_em;
       $this->testi = array();
       $testi = $this->_em->getRepository('pff\models\Testo')->findAll();
       if($testi){
           /** @var $t Testo */
           foreach($testi as $t){
               $this->testi[$t->getChiave()] = $t->getValue();
           }
       }
   }

   public function getTraduzione($testo){
       if(array_key_exists($testo, $this->testi)){
           return $this->testi[$testo];
       }else{
           $temp = new Testo();
           $temp->setChiave($testo);
           $temp->setValueIt($testo);
           $temp->setValueEn($testo);
           $this->_em->persist($temp);
           $this->_em->flush();
           return $testo;
       }
   }
}