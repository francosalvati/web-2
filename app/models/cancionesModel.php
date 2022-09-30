<?php

class CancionesModel{

    private $db;

    function __construct(){
        $this->db = new PDO ('mysql:host=localhost;'.'dbname=db_canciones;charset=utf8', 'root', '');
    }

    function getAll(){

        $query = $this->db->prepare('SELECT * FROM canciones');
        $query->execute();

        $canciones = $query->fetchAll(PDO::FETCH_OBJ);

        return $canciones;
    }

    function getAlbumSongs($id_album_fk){

        $query = $this->db->prepare('SELECT * FROM canciones where id_album_fk = ?');
        $query->execute([$id_album_fk]);

        $songs = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $songs;
    }

    function insert($nombre, $duracion, $albumId){
    
        $query = $this->db->prepare('INSERT INTO canciones(nombre, duracion, id_album_fk)');
        $query->execute([$nombre, $duracion, $albumId]);
    }

    function delete($id){

        $query = $this->db->prepare('DELETE FROM canciones where id = ?');
        $query->execute([$id]);

    }
}