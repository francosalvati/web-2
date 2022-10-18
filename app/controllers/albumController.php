<?php

require_once './app/models/albumsModel.php';
require_once './app/models/cancionesModel.php';
require_once './app/views/albumsView.php';
require_once './app/views/cancionesView.php';
require_once './app/views/adminView.php';
require_once './app/views/authView.php';
require_once './app/helpers/authHelper.php';


class AlbumController {

    private $albumsModel;
    private $songsModel;
    private $albumsView;
    private $songsView;
    private $adminView;
    private $loginView;
    private $authHelper;

    function __construct() {
        
        $this->albumsModel = new AlbumsModel();
        $this->albumsView = new AlbumsView();
        $this->songsModel = new CancionesModel();
        $this->songsView = new CancionesView();
        $this->adminView = new AdminView();
        $this->authView = new AuthView();
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

    function showAlbum($id_album_fk){
        
        session_start();
        $album = $this->albumsModel->getAlbum($id_album_fk);
        $songs = $this->songsModel->getAlbumSongs($id_album_fk);
        
        $this->songsView->showAlbumSongs($songs, $album);
    }
  
    
    function addAlbum(){


        $nombre = $_POST['nombre'];
        $banda = $_POST['banda'];
        $genero = $_POST['genero'];
        $año = $_POST['año'];
        $cantidadCanciones = $_POST['cant-canciones'];
        $imgURL = $_POST['imgURL'];

        $this->albumsModel->insert($nombre, $banda, $genero, $año, $cantidadCanciones, $imgURL);

        $this->showAll();
    }


    function deleteAlbum($id){

        $this->albumsModel->delete($id);

        $this->showAll();
    }

    function modifyAlbum($id){

        $nombre = $_POST['nombre'];
        $banda = $_POST['banda'];
        $genero = $_POST['genero'];
        $año = $_POST['año'];
        $cantidadCanciones = $_POST['cant-canciones'];
        $imgURL = $_POST['imgURL'];

        $this->albumsModel->modify($nombre, $banda, $genero, $año, $cantidadCanciones, $imgURL, $id);

        $this->showAll();

    }
  

    //SONGS

    function addSong($id_album_fk){

        $nombre = $_POST['nombre'];
        $duracion = $_POST['duracion'];

        $this->songsModel->insert( $nombre, $duracion, $id_album_fk);

        $this->showAlbum($id_album_fk);
    }

    function modifySong($id, $id_album_fk){
       
        $nombre = $_POST['nombre'];
        $duracion = $_POST['duracion'];
      
        $this->songsModel->modify($nombre, $duracion, $id_album_fk, $id);

        $this->showAlbum($id_album_fk);
    }
    

    function deleteSong($id, $id_album_fk){
        
        $this->songsModel->delete($id);

        $this->showAlbum($id_album_fk);
    }

    function showAllSongs(){
        
        session_start();
        $albums = $this->albumsModel->getAll();
        $songs = $this->songsModel->getAll();
        $this->songsView->showAllSongs($songs, $albums);
    }
    //ADMIN FORMS

    function albumAdmin($id_album_fk = null, $edit = null){
        session_start();
        $album = $this->albumsModel->getAlbum($id_album_fk);

        $this->adminView->showAlbumForm($album, $edit);
    }

    function songAdmin( $id = null, $id_album_fk = null, $edit = null){
        session_start();
        
        $song = $this->songsModel->getSong($id);

        $this->adminView->showSongForm($id_album_fk, $id, $edit);
    }
}