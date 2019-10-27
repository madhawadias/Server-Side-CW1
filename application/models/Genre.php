<?php
class Genre{
    private $genre_id;
    private $genre_name;

    function __construct($genre_id,$genre_name) {
        $this->genre_id = $genre_id;
        $this->genre_name = $genre_name;
    }
    
    function getGenreId() { return $this->genre_id; }
    function getGenreName() { return $this->genre_name; }



}