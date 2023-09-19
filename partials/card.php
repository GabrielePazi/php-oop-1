<?php
?>

<div class="card my-3 w-50">
  <div class="card-body">
    <h4 class="card-title text-black mb-3"> <?php echo $moviesList[$i]->title; ?></h4>
    <h6 class="card-subtitle mb-2 text-black">Release Date: <span class="text-body-secondary"><?php echo $moviesList[$i]->releaseDate; ?></span></h6>
    <h6 class="card-subtitle mb-2 text-black">Genre: <span class="text-body-secondary">
        <?php
        for ($j = 0; $j < count($moviesList[$i]->genre); $j++) {
          if ($j != count($moviesList[$i]->genre) - 1) {
            echo $moviesList[$i]->genre[$j] . ", ";
          } else {
            echo $moviesList[$i]->genre[$j];
          }
        }; ?>
      </span>
    </h6>
    <h6 class="card-subtitle mb-2 text-black">Cast: <span class="text-body-secondary">
        <?php
        for ($j = 0; $j < count($moviesList[$i]->cast); $j++) {
          if ($j != count($moviesList[$i]->cast) - 1) {
            echo $moviesList[$i]->cast[$j] . ", ";
          } else {
            echo $moviesList[$i]->cast[$j];
          }
        }; ?>
      </span>
    </h6>
  </div>
</div>