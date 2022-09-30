<?php

require_once './app/models/albumsModel.php';
require_once './app/models/cancionesModel.php';
require_once './app/views/albumsView.php';
require_once './app/views/cancionesView.php';
require_once './app/views/adminView.php';

class AlbumController {

    private $albumsModel;
    private $songsModel;
    private $albumsView;
    private $songsView;
    private $adminView;

    function __construct() {
        
        $this->albumsModel = new AlbumsModel();
        $this->albumsView = new AlbumsView();
        $this->songsModel = new CancionesModel();
        $this->songsView = new CancionesView();
        $this->adminView = new AdminView();
    }
    
    function showAlbums(){
        
        $albums = $this->albumsModel->getAll();
        $this->albumsView->showAlbums($albums);
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

    function AdminInsert(){
        $this->adminView->showAdmin();
    }

}