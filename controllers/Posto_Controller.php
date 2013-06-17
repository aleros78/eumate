<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro 
 * Date: 16/06/13
 * Time: 3.07
 * 
 * @author aleros78<at>gmail.com
 */
class Posto_Controller extends \pff\AController
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

    public function descrizione(){
        $pos = new \pff\models\PostoManager($this->_em);
        $view = \pff\FView::create('postoManager.tpl',$this->_app);
        $view->set('descrizione',$pos->getDescrizione());
        $view->set('disponibili',$pos->getDisponibili());
        $this->addView($view);
    }

    public function cambia(){
        $_SESSION['posto'] = $this->getParam(0);
        header('Location: ' . $this->_app->getExternalPath() . 'test');
    }
}
