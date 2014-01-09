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

    class PersonaggioManager extends \pff\AModel {

        private $em;

        function __construct($em){
            $this->em = $em;
        }

        public function getScheda(){
            $id_personaggio = $_SESSION['login_personaggio'];
            $personaggio = $this->em->find('pff\models\personaggio',$id_personaggio);
            $result = array();
            if ($personaggio){
                $result['nome'] = $personaggio->getNome();
                $result['status'] = $personaggio->getStatus();
                $result['att'] = $personaggio->getAtt();
                $result['def'] = $personaggio->getDef();
                $result['cha'] = $personaggio->getCha();
                $result['mov'] = $personaggio->getMov();
                $result['lev'] = $personaggio->getLev();
                $result['pf'] = $personaggio->getPf();
                $result['pfr'] = $personaggio->getPfRimanenti();
                $result['xp'] = $personaggio->getXp();
                $result['xp_next'] = $personaggio->getXpNext();
                $result['gilda'] = "";
                if ($personaggio->getGilda() != null){
                    $result['gilda'] = $personaggio->getGilda();
                }
            }
            return $result;
        }

    }