<?php

$key = "c89646cb9c2f9f7a6144c074fff0e9c7";

// each Discover request from the API only return 20 element.
// because we need the top 40 movies, we'll need to request 2 pages.
$pageNumber = 2;

// because Discover query only provide us genre by id, we have to make
// a Genre query that will return us all genre name along with id
$genreQuery = new Genre_Query($key);
$fullGenreList = $genreQuery->retrieveArrData();

static $movieList;
static $movieIndex = 0;

for($i = 1; $i <= $pageNumber; ++$i) {

    $dicoverQuery = new Discover_Query(
        "https://api.themoviedb.org/3/discover/movie",
        $key,
        "popularity.desc",
        $i
    );

    $tempList = $dicoverQuery->retrieveArrData();

    foreach($tempList["results"] as $value) {
        $movieList[$movieIndex] = new Movie(
            $value["title"],
            $value["genre_ids"],
            $value["poster_path"],
            $value["overview"],
            $fullGenreList
        );
        ++$movieIndex;
    }
}

require_once "View/home.view.php";