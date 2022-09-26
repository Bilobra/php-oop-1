<?php

class Movie {
    public $poster;
    public $title;
    public $genre;
    public $duration;
    public $year;

    // costruttore

    function __construct($poster,$title,$genre,$duration,$year){
        $this->poster = $poster;
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->duration = $duration;
    }

}