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

    public function getHTML()
    {
        return "<div> <b>Title: </b>" . $this->title . "</div>"
            . "<br>" . "<div>" . "<b>Genres: </b>" . "<br>" . $this->getGenres() . "</div>"
            . "<br>" . "<div>" . "<b>Duration: </b>" . $this->duration . "<div>";
    }

}

//Array
$spidermanAction = new Genre("Action");
$spidermanAdventure = new Genre("Adventure");
$spidermanArr = [$spidermanAction, $spidermanAdventure];

$IronmanAction = new Genre("Action");
$IronmanSciFi = new Genre("SciFi");
$IronmanArr = [$IronmanAction, $IronmanSciFi];

//Print
$spidermanMovie = new Movie("Spiderman: No Way Home", $spidermanArr, " 150 min");
$IronmanMovie = new Movie("Iron Man", $IronmanArr, "120 min");

echo $spidermanMovie->getHTML();
echo "<hr>";
echo $IronmanMovie->getHTML();