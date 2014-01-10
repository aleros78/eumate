<?php
/**
 * Created by PhpStorm.
 * User: alessandro 
 * Date: 10/01/14
 * Time: 13.56
 * 
 * @author aleros78<at>gmail.com
 */
class Game_controller extends \pff\AController
{

    /**
     * Index action.
     *
     * @return mixed
     */
    public function index()
    {
        if (!isset($_SESSION['logged_personaggio'])){

        }
        if (!isset($_SESSION['posto'])){ $_SESSION['posto'] = 1;}
        $layout = \pff\FLayout::create('templateGame.tpl', $this->_app);
        $view = \pff\FView::create('indexGame.tpl',$this->_app);

        $layout->addContent($view);
        $this->addView($layout);
    }

    public function beforeAction(){
        if (!isset($_SESSION['logged']) || $_SESSION['logged'] != true){
            header("Location: " . $this->_app->getExternalPath());
        }
        if (!isset($_SESSION['logged_personaggio']) || $_SESSION['logged_personaggio'] != true){
            header("Location: " . $this->_app->getExternalPath() . "personaggio/scelta");
        }
    }
}
