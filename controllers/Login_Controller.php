<?php
/**
 * Created by PhpStorm.
 * User: alessandro 
 * Date: 09/01/14
 * Time: 17.01
 * 
 * @author aleros78<at>gmail.com
 */
class Login_Controller extends \pff\AController
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

    public function socialListener(){
       Hybrid_Endpoint::process();
    }

    public function accediFacebook(){
        $config = ROOT . "/app/vendor/hybridauth/hybridauth/hybridauth/config.php";
        $hybridauth = new Hybrid_Auth($config);
        $adapter = $hybridauth->authenticate("facebook");
        $user_profile = $adapter->getUserProfile();
        $this->accedi($user_profile,"facebook");;
    }

    public function accediGoogle(){
        $config = ROOT . "/app/vendor/hybridauth/hybridauth/hybridauth/config.php";
        $hybridauth = new Hybrid_Auth($config);
        $adapter = $hybridauth->authenticate("google");
        $user_profile = $adapter->getUserProfile();
        $this->accedi($user_profile,"google");
    }

    public function accedi($data,$fonte){
        $email = $data->emailVerified;
        $utente = $this->_em->getRepository('pff\models\utente')->findOneBy(array("email"=>$email));

        if ($utente){

            $_SESSION['logged'] = true;
            $_SESSION['logged_user'] = $utente->getId();
            $_SESSION['logged_email'] = $utente->getEmail();
            $utente->setIpUltimoLogin($_SERVER['REMOTE_ADDR']);
            $logins = $utente->getNumeroLogin()+1;
            $utente->setNumeroLogin($logins);
            $data_oggi = new DateTime();
            $utente->setDataUltimoLogin($data_oggi);
            $this->_em->flush();



        } else{

            $utente = new \pff\models\Utente();

            if ($fonte == "google"){
                $user = new \pff\models\Google();
            } else {
                $user = new \pff\models\Facebook();
            }

            $tipologia = $this->_em->find('pff\models\tipologiaUtenti',3);

            $user->setIdentifier($data->identifier);
            $user->setEmail($email);
            $utente->setEmail($email);
            $user->setProfile($data->profileURL);
            $user->setPhoto($data->photoURL);
            $user->setUtente($utente);
            $utente->setTipologia($tipologia);
            $utente->setNome($data->firstName);
            $utente->setCognome($data->lastName);
            $data_oggi = new DateTime();
            $utente->setDataRegistrazione($data_oggi);
            $utente->setDataUltimoLogin($data_oggi);
            $utente->setAttivo(1);
            $utente->setNumeroLogin(0);
            $utente->setPassword("null");
            $utente->setIpRegistrazione($_SERVER['REMOTE_ADDR']);
            $utente->setIpUltimoLogin($_SERVER['REMOTE_ADDR']);

            $this->_em->persist($user);
            $this->_em->persist($utente);

            $this->_em->flush();

        }

        header("Location: " . $this->_app->getExternalPath() . "personaggio/scelta");
    }

}
