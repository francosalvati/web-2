<?php

require_once './app/tasks.php';

function showCanciones(){

    $canciones = getCanciones($idAlbum);
}