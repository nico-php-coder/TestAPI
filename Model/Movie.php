<?php

class Movie {
    private $m_title;
    private $m_genreIdList;
    private $m_genreStrList;
    private $m_image;
    private $m_description;

    public function __construct($title, $genreIdList, $image, $description, $fullGenreList) {
        $this->m_title = $title;
        $this->m_genreIdList = $genreIdList;
        $this->m_genreStrList = $this->findGenre($fullGenreList);
        $this->m_image = $image;
        $this->m_description = $description;
    }

    public function __get($value) {
        return $this->$value;
    }

    // find matches between Movie genre id's and full genre list from the API
    // $genreList parameter must be the list (an array) retrieved from Genre_Query object
    public function findGenre($genreList) {
        $movieGenreList = [];

        foreach($this->m_genreIdList as $movieId) {
            foreach($genreList["genres"] as $listId) {
                if($movieId == $listId["id"])
                    $movieGenreList[] = $listId["name"];
            }
        }

        return $movieGenreList;
    }
}