<?php

require_once 'app/controllers/albumController.php';
require_once 'app/controllers/authController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$action = 'albums';

if (!empty($_GET['action'])){
    $action = $_GET['action'];
}

$params = explode('/', $action);


switch($params[0]){

    case 'login':
        $authController = new AuthController();
        $authController->showView();
        break;

    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;

    case 'albums':
        $albumController = new AlbumController();
        $albumController->showAll();
        break;

    case 'canciones':
        if(!empty($params[1])){
            $albumController->showSongs($params[1]);
        }else{
            $albumController->showAllSongs();
        }
        break;

    case 'admin':
        $albumController->adminView();
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