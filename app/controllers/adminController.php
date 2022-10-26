<?php

require_once './app/models/albumsModel.php';
require_once './app/models/cancionesModel.php';
require_once './app/views/adminView.php';
require_once './app/views/authView.php';


class AdminController{

    private $albumsModel;
    private $songsModel;
    private $adminView;
    private $loginView;

    function __construct(){

        $this->albumsModel = new AlbumsModel();
        $this->songsModel = new CancionesModel();
        $this->adminView = new AdminView();
        $this->authView = new AuthView();
    }

      //ADMIN FORMS

      function albumAdmin($id_album_fk = null, $edit = null){
        
        $this->authHelper->
        session_start();

        $album = $this->albumsModel->getAlbum($id_album_fk);

        $this->adminView->showAlbumForm($album, $edit);
    }

    function songAdmin( $params = null){
        session_start();
        
        $song = $this->songsModel->getAlbumSongs($params[':ALBUM_ID']);

        $this->adminView->showSongForm($params[':ALBUM_ID'], $params[':ID'], $$params[':true']);
    }
}