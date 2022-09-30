<?php

require_once './library/smarty-4.2.1/libs/Smarty.class.php';

class CancionesView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showAlbumSongs($songs, $album){
        
        $this->smarty->assign('songs', $songs);
        $this->smarty->assign('album', $album);
        
        $this->smarty->display('templates/albumView.tpl');
        
        
    }

    function showAllSongs($songs){

    }
} 