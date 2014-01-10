<?php
    /**
     * @author paolo.fagni<at>gmail.com
     */
    class Personaggio_Controller extends \pff\AController
    {

        /**
         * Index action.
         *
         * @return mixed
         */
        public function index()
        {
            echo 'Welcome to pff!';
        }

        public function scheda(){
            $pg = new \pff\models\PersonaggioManager($this->_em);
            $view = \pff\FView::create('schedaPg.tpl',$this->_app);
            $view->set('p',$pg->getScheda());
            $this->addView($view);
        }

        public function scelta(){

            $utente = $this->_em->find('pff\models\utente',$_SESSION['logged_user']);
            $pg = $this->_em->getRepository('pff\models\personaggio')->findBy(array("utente"=>$utente));

        $layout = \pff\FLayout::create('template.tpl', $this->_app);
        $view = \pff\FView::create('sceltapg.tpl',$this->_app);
        $view->set("pg",$pg);
        $layout->addContent($view);
        $this->addView($layout);
        }

        public function crea(){
            $punti = 10;
            $layout = \pff\FLayout::create('template.tpl', $this->_app);
            $view = \pff\FView::create('nuovopg.tpl',$this->_app);
            $view->set("punti",$punti);
            $layout->addContent($view);
            $this->addView($layout);
        }

        public function beforeAction(){
            if (!isset($_SESSION['logged']) || $_SESSION['logged'] != true){
                header("Location: " . $this->_app->getExternalPath());
            }
        }

    }
