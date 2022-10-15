<?php

require_once 'library/smarty-4.2.1/libs/Smarty.class.php';

class AuthView{

private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function loginView(){

        $this->smarty->display('templates/login.tpl');
    }

    function showFormLogin($error) {
        if(!empty($error)){    
            $this->smarty->assign("error", $error);
        }

        $this->smarty->display('login.tpl');
    }
}