<?php

// This Derived class will be mainly hard-coded, because queries for retrieving genres list require not many parameters in the API.
class Genre_Query extends Query {

    public function __construct($key) {
        parent::__construct($key);
    }

    public function buildQuery() {
        return 'https://api.themoviedb.org/3/genre/movie/list?api_key='.$this->m_key.'&language=en-US';
    }
}