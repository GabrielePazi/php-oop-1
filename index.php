<?php
include_once __DIR__ . '/classes/Movie.php';
require_once __DIR__ . '/db/db_movies.php';

$moviesList = array_map(function ($el) {
  $movie = new Movie($el['title'], $el['releaseDate'], $el['genre'], $el['cast']);

  return $movie;
}, $rawMoviesList);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href=""> <!--  CSS Custom Link -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <title>Movies</title>
</head>

<body>

  <?php
  require_once __DIR__ . '/partials/header.php'
  ?>

  <main>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-8">
          <h1 class="my-3">Movies:</h1>
          <div class="cards-container my-5">

            <?php
            for ($i = 0; $i < count($moviesList); $i++) {
              require __DIR__ . '/partials/card.php';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src=""></script><!--  JS Custom Link -->
</body>

</html>