<?php
include_once './library/smarty-4.2.1/libs/Smarty.class.php';

class AdminView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showAdmin($edit = null){ 
        
        $this->smarty->assign('edit',$edit);

        $this->smarty->display('templates/adminForm.tpl');
    
    }
  } 