<?php

require_once 'app/controllers/albumController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$action = 'home';

if (!empty($_GET['action'])){
    $action = $_GET['action'];
}

$params = explode('/', $action);

 $albumController = new albumController();

switch($params[0]){
    case 'home':
        $albumController->showAlbums();
        break;
    case 'canciones':
        if(!empty($params[1])){
            $albumController->showSongs($params[1]);
        }else{
            $albumController->showAllSongs();
        }
        break;
    case 'admin':
        $albumController->AdminInsert();
        break;
    case'add':
        $albumController->addAlbum();
        break;
    case'delete':
        if(!empty($params[1])){
        $albumController->deleteAlbum($params[1]);
        }
        break;
    default:
    echo ('error');
    
}