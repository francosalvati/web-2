<?php
require_once './library/smarty-4.2.1/libs/Smarty.class.php';

class AlbumsView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showAlbums($albums){
    
        $this->smarty->assign('albums', $albums);
        $this->smarty->assign('search', true);
        
        $this->smarty->display('templates/albumsList.tpl');
    }
}