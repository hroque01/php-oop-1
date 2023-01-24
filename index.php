<?php
class Genre
{
    public $genre;

    public function __construct($genre)
    {
        $this->genre = $genre;
    }

    // creo una funzione per prendere piu di un genere
    public function getGenres()
    {
        return $this->genre;
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

    public function getGenres()
    {

        $str = "";
        foreach ($this->genres as $genre) {

            $str .= $genre->getGenres() . "<br>";
        }
        return $str;
    }

}

$spidermanAction = new Genre("Action");
$spidermanAdventure = new Genre("Adventure");
$spidermanArr = [$spidermanAction, $spidermanAdventure];