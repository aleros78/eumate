<?php
/**
 * @author paolo.fagni<at>gmail.com
 */
class Index_Controller extends \pff\AController
{

    /**
     * Index action.
     *
     * @return mixed
     */
    public function index()
    {
        $layout = \pff\FLayout::create('template.tpl', $this->_app);
        $view = \pff\FView::create('indexGame.tpl',$this->_app);

        $layout->addContent($view);
        $this->addView($layout);
    }

}
