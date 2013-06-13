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
        $id_posto = $this->getParam(0);
        $posto = $this->_em->find('pff/models/posto',$id_posto);
        $messaggi = $this
    }
}
