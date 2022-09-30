<?php
include_once './library/smarty-4.2.1/libs/Smarty.class.php';

class AdminView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showAdmin(){ 

        $this->smarty->display('templates/adminForm.tpl');
    }
  } 