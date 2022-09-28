<?php

class AlbumsView{

    function showAlbums($albums){
    
        include './templates/header.php';
        ?>
            <div class="container m-2">
                <div class="row row-cols-3 row-cols-sm-2 row-cols-md-5 g-2">
            <?php foreach ($albums as $album) { ?>
                <div class="col">
                    <div class="card p-1 bg-dark">
                        <div>
                            <a href="canciones/<?php echo $album->id ?>">
                                <img src="<?php echo $album->imgURL ?>" class="images w-100" height="200" >
                            </a>
                        </div>
                            <div class="card-body p-2">
                                <h2 class="h5 card-text text-center text-muted"><?php echo $album->nombre ?></h2>
    
                            </div>
                    </div>
                </div>
            <?php } ?>
                </div>
            </div>
        <?php
        include './templates/footer.php';
        }
}