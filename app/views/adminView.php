<?php
include_once './library/smarty-4.2.1/libs/Smarty.class.php';

class AdminView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showAlbumForm($album = null,$edit = null){ 
        
        $this->smarty->assign('edit',$edit);
        $this->smarty->assign('album',$album);

        $this->smarty->display('templates/albumForm.tpl');
    
    }

    function showSongForm($id_album_fk = null, $song = null, $edit = null){ 
        
        $this->smarty->assign('song',$song);
        $this->smarty->assign('id_album_fk',$id_album_fk);
        $this->smarty->assign('edit',$edit);

        $this->smarty->display('templates/songForm.tpl');
    
    }
  } 