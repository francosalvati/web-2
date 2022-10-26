<?php

require_once './app/models/albumsModel.php';
require_once './app/views/albumsView.php';
require_once './app/models/cancionesModel.php';
require_once './app/views/cancionesView.php';
require_once './app/helpers/authHelper.php';


class AlbumController {

    private $albumsModel;
    private $albumsView;
    private $songsModel;
    private $songsView;
    private $authHelper;

    function __construct() {
        
        $this->albumsModel = new AlbumsModel();
        $this->albumsView = new AlbumsView();
        $this->songsModel = new CancionesModel();
        $this->songsView = new CancionesView();
        $this->authHelper = new AuthHelper();
        
    }

    //ALBUMS
    
    function showAll(){

        if(isset($_GET['search'])){
            session_start();
            $album = $this->albumsModel->search($_GET['search']);
            $this->albumsView->showAlbums($album);
        }

        else{  
            session_start();
            $albums = $this->albumsModel->getAll();
            $this->albumsView->showAlbums($albums);
        }
            
    } 
    
    function addAlbum(){

        $this->authHelper->authLogin();

        $nombre = $_POST['nombre'];
        $banda = $_POST['banda'];
        $genero = $_POST['genero'];
        $año = $_POST['año'];
        $cantidadCanciones = $_POST['cant-canciones'];
        $imgURL = $_POST['imgURL'];

        $this->albumsModel->insert($nombre, $banda, $genero, $año, $cantidadCanciones, $imgURL);

        $this->showAll();
    }


    function deleteAlbum($params = null){

        $this->authHelper->authLogin();

        $this->albumsModel->delete($params[':ID']);

        $this->showAll();
    }

    function modifyAlbum($params){

        $this->authHelper->authLogin();

        $nombre = $_POST['nombre'];
        $banda = $_POST['banda'];
        $genero = $_POST['genero'];
        $año = $_POST['año'];
        $cantidadCanciones = $_POST['cant-canciones'];
        $imgURL = $_POST['imgURL'];

        $this->albumsModel->modify($nombre, $banda, $genero, $año, $cantidadCanciones, $imgURL, $params[':ID']);

        $this->showAll();

    }
  

    //SONGS

    function showSongs($params = null){
        
        
        
        if(isset($params[':ID'])){
            session_start();
            $album = $this->albumsModel->getAlbum($params[':ID']);
            $songs = $this->songsModel->getAlbumSongs($params[':ID']);
            
            $this->songsView->showAlbumSongs($songs, $album);
        }else{
            session_start();
            $albums = $this->albumsModel->getAll();
            $songs = $this->songsModel->getAll();
            $this->songsView->showAllSongs($songs, $albums);
        }
        
    }

    function addSong($params = null){

        $this->authHelper->authLogin();

        $nombre = $_POST['nombre'];
        $duracion = $_POST['duracion'];

        $this->songsModel->insert($nombre, $duracion, $params[':ID']);

        $this->showAlbum($params[':ID']);
    }

    function modifySong($id, $id_album_fk){
       
        $this->authHelper->authLogin();

        $nombre = $_POST['nombre'];
        $duracion = $_POST['duracion'];
      
        $this->songsModel->modify($nombre, $duracion, $id_album_fk, $id);

        $this->showAlbum($id_album_fk);
    }
    

    function deleteSong($id, $id_album_fk){
        
        $this->authHelper->authLogin();

        $this->songsModel->delete($id);

        $this->showAlbum($id_album_fk);
    }
  
}