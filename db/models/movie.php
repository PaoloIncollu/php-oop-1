<?php
require_once __DIR__ .'/genre.php';
//Definita la classe Movie
class Movie{

    //Dichiarazione delle istanze
    public $name;
    public $director;
    public $genre;         
    private $year;
    public $country;
    private $vote = null;


    //Definito costruttore per l'anno
    function __construct(int $year) {
        $this->year = $year;
       
    }

    //Definito metodo per controllare il voto del film
    public function setVote($vote) {
        if (
            is_numeric($vote )
            &&
            $vote >= 0
            &&
            $vote < 11
        ) {
            $this->vote = $vote ."/10";
        }
    }
}