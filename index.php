<?php
include_once __DIR__ . '/classes/Movie.php';

$film = new Movie("avatar", "15-01-2010", "Sci-fi", ['Sam Worthington', 'Zoe Saldana']);
$film1 = new Movie("harry potter e la pietra filosofale", "16-11-2001", "Fantasy", ['Daniel Radcliffe', 'Rupert Grint', 'Emma Watson']);

var_dump($film, $film1);
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



  <script src=""></script><!--  JS Custom Link -->
</body>

</html>