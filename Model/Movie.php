<?php

class Movie {
    private $m_title;
    private $m_genreIdList;
    private $m_image;
    private $m_description;

    public function __construct($title, $genreIdList, $image, $description) {
        $this->m_title = $title;
        $this->m_genreIdList = $genreIdList;
        $this->m_image = $image;
        $this->m_description = $description;
    }

    public function __get($value) {
        return $this->$value;
    }
}