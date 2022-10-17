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

        session_start();
        $nombre = $_GET['nombre'];
        $banda = $_GET['banda'];
        $genero = $_GET['genero'];
        $año = $_GET['año'];
        $cantidadCanciones = $_GET['cant-canciones'];
        $imgURL = $_GET['imgURL'];

        $this->albumsModel->insert($nombre, $banda, $genero, $año, $cantidadCanciones, $imgURL);

        $this->showAll();
    }


    function deleteAlbum($id){
        session_start();
        $this->albumsModel->delete($id);

        $this->showAll();
    }

    function modifyAlbum($id){
        session_start();

        $nombre = $_GET['nombre'];
        $banda = $_GET['banda'];
        $genero = $_GET['genero'];
        $año = $_GET['año'];
        $cantidadCanciones = $_GET['cant-canciones'];
        $imgURL = $_GET['imgURL'];

        $this->albumsModel->modify($nombre, $banda, $genero, $año, $cantidadCanciones, $imgURL, $id);

        $this->showAll();

    }
  

    //SONGS

    function modifySong($id_album_fk){
        session_start();

        $this->songsModel->modify($id_album_fk);

        $this->showSongs($id_album_fk);
    }
    

    function deleteSong($id, $id_album_fk){
        session_start();
        $this->songsModel->delete($id);

        $this->showSongs($id_album_fk);
    }

    function addSong($id_album_fk){

        session_start();
        $nombre = $_GET['nombre'];
        $duracion = $_GET['duracion'];

        $this->songsModel->insert( $nombre, $duracion, $id_album_fk);

        $this->showSongs($id_album_fk);
    }

    function showAllSongs(){
        
        session_start();
        $songs = $this->songsModel->getAll();
        $this->songsView->showAllSongs($songs);
    }
    //ADMIN FORMS

    function adminView($edit=null){
        session_start();
        
        $this->adminView->showAdmin($edit);
    }
}