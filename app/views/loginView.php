<?php

require_once 'library/smarty-4.2.1/libs/Smarty.class.php';

class LoginView{

private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function loginView(){

        $this->smarty->display('templates/login.tpl');
    }
}