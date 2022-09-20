<?php

function getDB(){
    
    //conexion con la base de datos

    $db = new PDO('mysql:host=localhost;'.'dbname=db_canciones;charset=utf8', 'root', '');
    return $db;
}

function getCanciones(){
    
    $db = getDB();
    
    
    // consulta SQL
    $query = $db->prepare('SELECT * FROM canciones');
    $query->execute();

    
    //devuelve el arreglo con las canciones
    $canciones = $query->fetchAll(PDO::FETCH_OBJ);

    return $canciones;
}

function getAlbums(){

    $db = getDB();

    $query = $db->prepare('SELECT * FROM album');
    $query->execute();

    $album = $query->fetchAll(PDO::FETCH_OBJ);


    return $album;
}

// function insertCancion($nombre, $duracion, $album){

//     $db = getDB();
    
//     //consulta sql inser( inserta dentro de tabla "canciones")
//     $query = $db->prepare('INSERT INTO canciones(nombre, duracion, id_album_fk) VALUES (?, ?, ?)');
//     $query->excecute(array[$nombre, $duracion, $album]);//valores a insertar

//     return $db -> lastInsertId();

// }

// function insertAlbum(){
//     $db = getDB();
    
//     $query = $db->prepare('INSERT INTO album(nombre, año, genero, banda, cant_canciones, img) VALUES (?, ?, ?, ? ,?, ?)');
//     $query->excecute(array[$nombre, $año, $genero, $banda, $cant_canciones, $imgURL]);

//     return $db -> lastInsertId();

// }

// function deleteCancion($id){
//     $db = getDB();
    
//     //consulta sql a delete( borra desde id en tabla "canciones")
//     $query = $db->prepare('DELETE FROM canciones WHERE id = ?');
//     $query->execute([$id]):
// }

// function deleteAlbum($id){
//     $db = getDB();
    
//     $query = $db->prepare('DELETE FROM album WHERE id = ?');
//     $query->execute([$id]):
// }