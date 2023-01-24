<?php

class Movie
{

    public $title;
    public $genre;
    public $duration;

    public function __construct($title, $genre, $duration)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->duration = $duration;
    }

}