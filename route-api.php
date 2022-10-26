<?php

require_once './api/apiAlbumController.php';
require_once './library/Router.php';

    $router = new Router();

    $router->addRoute('albums', 'GET', 'ApiAlbumController', 'get');
    $router->addRoute('albums/:ID', 'GET', 'ApiAlbumController', 'get');

    $router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);


