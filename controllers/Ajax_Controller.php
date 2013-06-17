<?php
/**
 * @author paolo.fagni<at>gmail.com
 */
class Ajax_Controller extends \pff\AController
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


    public function messaggi(){
        $mess = new \pff\models\MessaggiMenager($this->_em);
        $messaggi = $mess->getMessaggiArray();
        $view = \pff\FView::create('messaggi.tpl',$this->_app);
        $view->set('messaggi',$messaggi);
        $this->addView($view);
    }
}
