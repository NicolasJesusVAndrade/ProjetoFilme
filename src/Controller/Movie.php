<?php
namespace APP\Controller;

require "../../vendor/autoload.php";

use APP\Model\Movie;
use APP\Model\Composer;
use APP\Model\Director;
use APP\Model\MovieGender;

// Criação dos objetos
$composer_one = new Composer("Forrest Gump");
$director_one = new Director(
    name:"Robert Zemeckis",
);
$movie_one = new movie(
    yearOfRelease:1994,
    movieGender: MovieGender :: DRAMA,
    composer: $composer_one,
    director: $director_one,
    duration:120,
    movie: "Forrest Gump",
);
echo "<pre>";
var_dump($movie_one);
echo "</pre>";
