<?php

class Query {
    protected $m_key;

    public function __construct($key) {
        $this->m_key = $key;
    }

    public function getKey() {
        return $this->m_key;
    }
}