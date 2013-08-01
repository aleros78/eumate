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

    }
