<?php

namespace pff\models;

/**
 * @Entity
 * @Table(name="ge_testo")
 */
class Testo extends ATranslator{

   /**
    * @Id
    * @Column(type="integer")
    * @GeneratedValue
    */
   private $id;

   /**
    * @Column(length=255, unique=true)
    */
   private $chiave;

   /**
    * @Column(type="text")
    */
   private $value_it;

   /**
    * @Column(type="text", nullable=true)
    */
   private $value_en;


   public function getId(){
       return $this->id;
   }

   public function getChiave(){
       return $this->chiave;
   }

   public function setChiave($chiave){
       $this->chiave = $chiave;
   }

   public function getValue(){
       return $this->getTranslated('value');
   }

   public function setValueEn($value_en)
   {
       $this->value_en = $value_en;
   }

   public function getValueEn()
   {
       return $this->value_en;
   }

   public function setValueIt($value_it)
   {
       $this->value_it = $value_it;
   }

   public function getValueIt()
   {
       return $this->value_it;
   }

}