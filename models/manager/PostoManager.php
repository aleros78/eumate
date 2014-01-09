<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro 
 * Date: 16/06/13
 * Time: 3.08
 * 
 * @author aleros78<at>gmail.com
 */
namespace pff\models;


class PostoManager extends \pff\AModel {


    private $em;

    function __construct($em){
        $this->em = $em;
    }    

    public function getDescrizione(){
        $id_posto = $_SESSION['posto'];
        $posto = $this->em->find('pff\models\posto',$id_posto);
        $result = array();
        $result['nome'] = $posto->getNome();
        $result['citta'] = $posto->getCitta()->getNome();
        $result['regione'] = $posto->getCitta()->getRegione()->getNome();
        $result['descrizione'] = $posto->getDescrizione();
        return $result;
    }

    public function getDisponibili(){
        $id_posto = $_SESSION['posto'];
        $posto = $this->em->find('pff\models\posto',$id_posto);
        $result = array();
        $tmpPosti = $this->em->getRepository('pff\models\postoRiferimento')->findBy(array('posto'=>$posto));
        if ($tmpPosti){
            foreach ($tmpPosti as $t){
                $result[] = $t->getRiferimento()->getId();
            }
        }
        $tmpPosti2 = $this->em->getRepository('pff\models\postoRiferimento')->findBy(array('riferimento'=>$posto));
        if ($tmpPosti2){
            foreach ($tmpPosti2 as $t){
                $result[] = $t->getPosto()->getId();
            }
        }
        $result = array_unique($result);
        $res = array();
        foreach ($result as $k=>$r){
            $posto = $this->em->find('pff\models\posto',$r);
            $res[$k]['nome']=$posto->getNome();
            $res[$k]['id']=$posto->getId();
        }

        return $res;
    }
}