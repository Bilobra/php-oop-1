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
        $this->setYear($year);
        $this->genre = $genre;
        $this->duration = $duration;
    }

    public function setYear($year){
        if(is_int($year)){
            $this->year = $year;
        }else{
          $this->year = 'Anno non specificato';
        }
    }


}