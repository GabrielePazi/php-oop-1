<?php

class Movie
{
  public $title;
  public $releaseDate;
  public $genre;
  public $cast;

  public function __construct(string $_title, string $_releaseDate, string $_genre, $_cast)
  {
    $this->title = $this->set_title($_title);
    $this->releaseDate = $_releaseDate;
    $this->genre = $_genre;
    $this->cast = $_cast;
  }

  public function set_title($_title)
  {
    if (!is_numeric($_title)) {
      return $this->formatTitle($_title);
    }

    return "TITOLO NON VALIDO";
  }

  public function formatTitle($_title)
  {
    $titleWords = explode(" ", $_title);

    for ($i = 0; $i < count($titleWords); $i++) {
      if (strlen($titleWords[$i]) > 1) {
        $titleWords[$i][0] = strtoupper($titleWords[$i][0]);
      }
    }

    return implode(" ", $titleWords);
  }
}
