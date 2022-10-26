<?php

require_once 'app/controllers/albumController.php';
require_once 'app/controllers/adminController.php';
require_once 'app/controllers/authController.php';
require_once 'library/Router.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


    $router = new Router();

        $router->addRoute('login', 'GET', 'AuthController', 'showLogin'); 
        $router->addRoute('validate', 'POST', 'AuthController', 'validateUser'); 
        $router->addRoute('logout', 'GET', 'AuthController', 'logout'); 
        
        $router->addRoute('albums', 'GET', 'AlbumController', 'showAll'); 
        $router->addRoute('add-album', 'GET', 'AlbumController', 'addAlbum'); 
        $router->addRoute('delete-album/:ID', 'GET', 'AlbumController', 'deleteAlbum'); 
        $router->addRoute('edit-album/:ID', 'GET', 'AlbumController', 'modifyAlbum'); 

        $router->addRoute('songs', 'GET', 'AlbumController', 'showSongs'); 
        $router->addRoute('songs/:ID', 'GET', 'AlbumController', 'showSongs'); 
        $router->addRoute('add-song', 'GET', 'AlbumController', 'addSong'); 
        $router->addRoute('delete-song', 'GET', 'AlbumController', 'deleteSong'); 
        $router->addRoute('edit-song', 'GET', 'AlbumController', 'modifySong'); 

        $router->addRoute('albumAdd', 'GET', 'AdminController', 'albumAdmin'); 
        $router->addRoute('albumEdit/:ID/true', 'GET', 'AdminController', 'albumAdmin'); 
        $router->addRoute('songAdd/:ALBUM_ID', 'GET', 'AdminController', 'songAdmin'); 
        $router->addRoute('songEdit/:ALBUM_ID/:ID/true', 'GET', 'AdminController', 'songAdmin'); 
        
       
            //         $albumController = new AlbumController();
            //         $albumController->albumAdmin();
            //         break;  
            //     case 'albumEdit':
            //         $albumController = new AlbumController();
            //         $edit=true;
            //         $albumController->albumAdmin($params[1], $edit);
            //         break;   
            
            //     case 'songAdd':
            //         $albumController = new AlbumController();
            //         $albumController->songAdmin($params[1]);
            //         break;  
            //     case 'songEdit':
            //         $albumController = new AlbumController();
            //         $edit=true;
            //         $albumController->songAdmin($params[1], $params[2], $edit);
            //         break;  
        $router->setDefaultRoute('AlbumController', 'showAll');

        $router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

// $action = 'albums';

// if (!empty($_GET['action'])){
//     $action = $_GET['action'];
// }

// $params = explode('/', $action);


// switch($params[0]){

//     //LOGIN

//     case 'validate':
//         $authController = new AuthController();
//         $authController->validateUser();
//         break;

//     case 'logout':
//         $authController = new AuthController();
//         $authController->logOut();

//     //ALBUMS

//     case 'albums':
//         $albumController = new AlbumController();
//         $albumController->showAll();
//         break;

//     case'addAlbum':
//         $albumController = new AlbumController();
//         $albumController->addAlbum();
//         break;

//     case'deleteAlbum':
//         $albumController = new AlbumController();
//         if(!empty($params[1])){
//         $albumController->deleteAlbum($params[1]);
//         }
//         break;

//     case'editAlbum':
//         $albumController = new AlbumController();
//         if(!empty($params[1])){
//             $albumController->modifyAlbum($params[1]);
//         }
//         break;

//     //SONGS
    
//     case 'canciones':
//         $albumController = new AlbumController();
//         if(!empty($params[1])){
//             $albumController->showAlbum($params[1]);
//         }else{
//             $albumController->showAllSongs();
//         }
//         break;

//     case'addSong':
//         $albumController = new AlbumController();
//         $albumController->addSong($params[1]);
//         break;

//     case'deleteSong':
//         $albumController = new AlbumController();
//         if(!empty($params[2])){
//         $albumController->deleteSong($params[1], $params[2]);
//         }
//         break;

//     case'editSong':
//         $albumController = new AlbumController();
//         if(!empty($params[2])){
//         $albumController->modifySong($params[1], $params[2]);
//         }
//         break;

//     //ADMIN

//    

//     default:
//     echo ('error');
    
//}