<?php
/**
 * @author paolo.fagni<at>gmail.com
 */
class Test_Controller extends \pff\AController
{

    /**
     * Index action.
     *
     * @return mixed
     */
    public function index()
    {
        if (!isset($_SESSION['login_personaggio'])){ $_SESSION['login_personaggio'] = 1;}
        if (!isset($_SESSION['posto'])){ $_SESSION['posto'] = 1;}
        $layout = \pff\FLayout::create('templateGame.tpl', $this->_app);
        $view = \pff\FView::create('indexGame.tpl',$this->_app);

        $layout->addContent($view);
        $this->addView($layout);

    }

}
