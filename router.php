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

    //LOGIN

    case 'login':
        $authController = new AuthController();
        $authController->showLogin();
        break;

    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;

    case 'logout':
        $authController = new AuthController();
        $authController->logOut();

    //ALBUMS

    case 'albums':
        $albumController = new AlbumController();
        $albumController->showAll();
        break;

    case'addAlbum':
        $albumController = new AlbumController();
        $albumController->addAlbum();
        break;

    case'deleteAlbum':
        $albumController = new AlbumController();
        if(!empty($params[1])){
        $albumController->deleteAlbum($params[1]);
        }
        break;

    case'editAlbum':
        $albumController = new AlbumController();
        if(!empty($params[1])){
            $albumController->modifyAlbum($params[1]);
        }
        break;

    //SONGS
    
    case 'canciones':
        $albumController = new AlbumController();
        if(!empty($params[1])){
            $albumController->showAlbum($params[1]);
        }else{
            $albumController->showAllSongs();
        }
        break;

    case'addSong':
        $albumController = new AlbumController();
        $albumController->addSong($params[1]);
        break;

    case'deleteSong':
        $albumController = new AlbumController();
        if(!empty($params[2])){
        $albumController->deleteSong($params[2], $params[1]);
        }
        break;

    case'editSong':
        $albumController = new AlbumController();
        if(!empty($params[2])){
        $albumController->modifySong($params[2], $params[1]);
        }
        break;

    //SONGS

    case 'adminAdd':
        $albumController = new AlbumController();
        $albumController->adminView();
        break;  
    case 'adminEdit':
        $albumController = new AlbumController();
        $edit=true;
        $albumController->adminView($edit);
        break;   

    default:
    echo ('error');
    
}