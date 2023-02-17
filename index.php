<?php
class Features
{
    // proprietà o variabili d'istanza
    public $title;
    public $movie_director;
    public $original_language;
    public $genre;
    public $plot;
    public $country_of_production;
    public $production_year;

    public function __construct($_title, $_movie_director, $_original_language, $_genre, $_plot, $_country_of_production, $_production_year)
    {
        $this->title = $_title;
        $this->movie_director = $_movie_director;
        $this->original_language = $_original_language;
        $this->genre = $_genre;
        $this->plot = $_plot;
        $this->country_of_production = $_country_of_production;
        $this->production_year = $_production_year;
    }
}

$interstellar = new Features('Interstellar', 'Christopher Nolan', 'English', 'Fantasy', '...', 'United States', 2014);

$inception = new Features('Inception', '	Christopher Nolan', 'English', 'Thriller', '...', 'United States', 2010);

$avatar = new Features('Avatar', 'James Cameron', 'English', 'Fantasy', '...', 'United States', 2009);

var_dump($interstellar);
var_dump($inception);
var_dump($avatar);
