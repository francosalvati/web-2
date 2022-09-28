<?php

class AlbumsModel {
    
    private $db;

    function __construct(){
        $this->db = new PDO ('mysql:host=localhost;'.'dbname=db_canciones;charset=utf8', 'root', '');
    }

    function getAll(){

        $query = $this->db->prepare('SELECT * FROM album');
        $query->execute();

        $albums = $query->fetchAll(PDO::FETCH_OBJ);

        return $albums;
    }
        
    function insert(){


        $query = $this->db->prepare('INSERT INTO album(nombre, año, banda, genero, cant_canciones, img) VALUES (?, ?, ?, ?, ?, ?)');
        $query->execute($nombre, $banda, $genero, $año, $cantidadCanciones, $imgURL,);

        return console.log('insertado correctamente');
    }

    function delete($id){


        $query = $this->db->prepare('DELETE FROM album where id = ?');
        $query->execute([$id]);

    }
}
