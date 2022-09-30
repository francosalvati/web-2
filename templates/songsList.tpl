$i = 1;
?>
      <div class="containter-fluid d-flex justify-content-center mt-4">
          <div class="list-group w-75">
              <?php foreach ($songs as $song) { ?>
                <li class="list-group-item list-group-item-action d-flex gap-3 py-3" >  <?php echo $i ?> - <?php echo $song->nombre ?> <span> min:
                    <?php   
                        $duracion = str_split($song->duracion);
                        $duracion = implode($duracion);
                        echo $duracion; 
                        ?></span> </li>
                    <?php $i++;
        } ?>
        </div>
    </div>