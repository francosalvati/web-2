<?php

require_once './app/models/albumsModel.php';
require_once './api/apiView.php';


class ApiAlbumController{
    
    private $model; 
    private $view;

    function __construct(){
        $this->model = new AlbumsModel();
        $this->view = new ApiView();
    }

    function get($params = null){
        if(isset($params[":ID"])){
            $album = $this->model->getAlbum($params[":ID"]);
        return $this->view->response($album, 200);
        }else{
            $albums = $this->model->getAll();
            return $this->view->response($albums, 200);
        }
    }
}