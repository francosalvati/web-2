<?php 

require_once './app/db.php';

function showAlbums(){
    include './templates/header.php';
    
    $albums = getAlbums();
    ?>
        <div class="container m-2">
            <div class="row row-cols-3 row-cols-sm-2 row-cols-md-5 g-2">
        <?php foreach ($albums as $album) { ?>
            <div class="col">
                <div class="card shadow-sm p-1 bg-dark">
                    <a href="canciones/<?php echo $album->id ?>">
                        <img src="<?php echo $album->img ?>" class="w-100 .subtitulos " >
                    </a>
                        <div class="card-body p-2">
                            <h2 class="h5 card-text text-center text-muted"><?php echo $album->nombre ?></h2>
                            
                        </div>   
                </div>
            </div>
        <?php } ?>
            </div>
        </div>
    <?php
    }

function showCanciones($id){
    include './templates/header.php';
    
    $canciones = getCanciones();
    
?>



<?php
}


