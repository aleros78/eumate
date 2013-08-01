<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro 
 * Date: 14/06/13
 * Time: 17.10
 * 
 * @author aleros78<at>gmail.com
 */
class Messaggi_Controller extends \pff\AController
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

    public function formMessaggi(){

        $view = \pff\FView::create('formMessaggi.tpl',$this->_app);
        $this->addView($view);
    }
    public function addMessaggio(){
        $id_personaggio = $_SESSION['login_personaggio'];
        $personaggio = $this->_em->find('pff\models\personaggio',$id_personaggio);
        $id_gilda = $_POST['gilda'];
        $id_posto = $_SESSION['posto'];
        if ($id_gilda == 0){
            $gilda = null;
        } else{
            $gilda = $this->_em->find('pff\models\gilda',$id_gilda);
        }
        if ($id_posto == 0){
            $posto = null;
        } else {
            $posto = $this->_em->find('pff\models\posto',$id_posto);
        }
        $messaggio = $_POST['messaggio'];
        $data = new DateTime();

        $m = new \pff\models\Messaggi();
        $m->setData($data);
        $m->setPersonaggio($personaggio);
        $m->setGilda($gilda);
        $m->setPosto($posto);
        $m->setMessaggio($messaggio);

        $this->_em->persist($m);
        $this->_em->flush();
        
        header("Location: " .$this->_app->getExternalPath() . "test");
    }

}
