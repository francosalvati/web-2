<?php

class CancionesView{

    function showAlbumSongs($canciones){
        include './templates/header.php';
    ?>
        <div class="container">
            <div class="title d-flex">
                <img src=">"  class="flex-shrink-0 m-4" height="200">
                <h2>  </h2>
            </div>
        
            <div class="list-group w-100">
                <?php foreach ($canciones as $cancion) { ?>
                    <li class="list-group-item list-group-item-action d-flex gap-3 py-3" >  <?php echo $cancion->nombre ?> <?php echo $cancion->nombre ?> </li>
                <?php } ?>
            </div>
        </div>
        
    <?php
    include './templates/footer.php';
    }

    function showAllSongs(){
        include './templates/header.php';
        ?>
            <div>hola</div>
        
    <?php
    include './templates/footer.php';
    }
} 