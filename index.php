<?php
class Features{
    // proprietà o variabili d'istanza
    public $title;
    public $movie_director;
    public $original_language;
    public $genre;
    public $plot;
    public $country_of_production;
    public $production_year;

    public function __construct($_title,$_movie_director,$_original_language,$_genre,$_plot,$_country_of_production,$_production_year)
    {
        echo 'costruttore';
    }

}

$Interstellar=new Features();

$Inception=new Features();

$Avatar=new Features();









?>