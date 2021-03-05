<?php

class Discover_Query extends Query{
    private $m_domain;
    private $m_sortBy;
    private $m_page;

    public function __construct($domain, $key, $sortBy, $page) {
        parent::__construct($key);
        $this->m_domain = $domain;
        $this->m_sortBy = $sortBy;
        $this->m_page = $page;
    }

    public function buildQuery() {
        return $this->m_domain.'?api_key='.$this->m_key.'&language=en-US&sort_by='.$this->m_sortBy.'&include_adult=false&include_video=false&page='.$this->m_page;
    }
}