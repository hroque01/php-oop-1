<?php
class Genre
{
    public $genre;

    public function __construct($genre)
    {
        $this->genre = $genre;
    }

}
class Movie
{

    public $title;
    public array $genres;
    public $duration;

    public function __construct($title, array $genres, $duration)
    {
        $this->title = $title;
        $this->genres = $genres;
        $this->duration = $duration;
    }

}