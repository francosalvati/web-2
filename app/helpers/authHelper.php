<?php 

class AuthHelper {

    //verificacion-autenticacion de usuario y sino redirige al login


    function authLogin(){
        session_start();
        if(!isset($_SESSION['IS_LOGGED'])){
             header("location: ". BASE_URL . "login");
             die();
        }   
    }

}