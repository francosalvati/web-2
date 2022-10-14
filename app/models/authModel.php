<?php 

class AuthModel {

    private $db;

    function __construct(){
    
        $this->db = new PDO ('mysqyl:host=localhost;'.'dbname=db_canciones;charset=utf8', 'root', '');
    
    }

    function getUser(){

        $query = $this->db->prepare('SELECT * FROM users where usuario = ?');
        $query->execute([$usuario]);
        
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user ;

    }

}