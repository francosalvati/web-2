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

    case'addAlbum':
        $albumController->addAlbum();
        break;

    case'addSong':
        $albumController->addSong($params[1]);
        break;

    case'deleteAlbum':
        if(!empty($params[1])){
        $albumController->deleteAlbum($params[1]);
        }
        break;

    case'deleteSong':
        if(!empty($params[2])){
        $albumController->deleteSong($params[2], $params[1]);
        }
        break;

    default:
    echo ('error');
    
}