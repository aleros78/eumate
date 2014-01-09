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
        echo "<br/>***********************<br/>";
        print_r($user_profile);
        die();
        echo "<br/>***********************<br/>";
    }

    public function accediGoogle(){
        $config = ROOT . "/app/vendor/hybridauth/hybridauth/hybridauth/config.php";
        $hybridauth = new Hybrid_Auth($config);
        $adapter = $hybridauth->authenticate("google");
        $user_profile = $adapter->getUserProfile();
        echo "<br/>***********************<br/>";
        print_r($user_profile);
        die();
        echo "<br/>***********************<br/>";
    }

}
