<?php

require_once './app/models/albumsModel.php';
require_once './app/models/cancionesModel.php';
require_once './app/views/albumsView.php';
require_once './app/views/cancionesView.php';
require_once './app/views/adminView.php';
require_once './app/views/authView.php';

class AlbumController {

    private $albumsModel;
    private $songsModel;
    private $albumsView;
    private $songsView;
    private $adminView;
    private $loginView;

    function __construct() {
        
        $this->albumsModel = new AlbumsModel();
        $this->albumsView = new AlbumsView();
        $this->songsModel = new CancionesModel();
        $this->songsView = new CancionesView();
        $this->adminView = new AdminView();
        $this->authView = new AuthView();
    }
    
    function showAll(){
        
        if(isset($_GET['search'])){
            $album = $this->albumsModel->getAlbum($_GET['search']);
            $this->albumsView->showAlbums($album);
        }

        else{
            $albums = $this->albumsModel->getAll();
            $this->albumsView->showAlbums($albums);
        }
            
    } 

    function showAllSongs(){
        
        $songs = $this->songsModel->getAll();
        $this->songsView->showAllSongs($songs);
    }

    function showSongs($id_album_fk){
        
        $album = $this->albumsModel->getAlbum($id_album_fk);
        $songs = $this->songsModel->getAlbumSongs($id_album_fk);
        
        $this->songsView->showAlbumSongs($songs, $album);
    }

    function adminView(){
        $this->adminView->showAdmin();
    }

    function addAlbum(){

        $nombre = $_GET['nombre'];
        $banda = $_GET['banda'];
        $genero = $_GET['genero'];
        $año = $_GET['año'];
        $cantidadCanciones = $_GET['cant-canciones'];
        $imgURL = $_GET['imgURL'];

        $this->albumsModel->insert($nombre, $banda, $genero, $año, $cantidadCanciones, $imgURL);

        $this->showAlbums();
    }

    function addSong($id_album_fk){

        $nombre = $_GET['nombre'];
        $duracion = $_GET['duracion'];

        $this->songsModel->insert( $nombre, $duracion, $id_album_fk);

        $this->showSongs($id_album_fk);
    }

    function deleteAlbum($id){
        
        $this->albumsModel->delete($id);

        $this->showAlbums();
    }

    function deleteSong($id, $id_album_fk){

        $this->songsModel->delete($id);

        $this->showSongs($id_album_fk);
    }

}