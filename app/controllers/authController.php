<?php

require_once 'app/models/authModel.php';
require_once 'app/views/authView.php';

class AuthController {

    private $authModel;
    private $authView;

    function __construct() {

        $this->authModel = new AuthModel;
        $this->authView = new AuthView;
    
    }

    function showLogin() {
        $this->authView->showFromLogin();
    }
    
    function validateUser(){

        $nick = $_POST['user'];
        $pass = $_POST['pass'];
        
        $user = $this->authModel->getUser($nick);

        if( $user && password_verify($pass, $user->contraseña)){

            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_USUARIO'] = $user->usuario;
            $_SESSION['IS_LOGGED'] = true;

            header('Location: ' . BASE_URL);
        } else{
            $this->authView->showFromLogin('usuario o contraseña incorrecta');
        }
    }

    function logOut(){
        
        session_start();
        session_destroy();

        header('Location: ' . BASE_URL);

    }
    
}