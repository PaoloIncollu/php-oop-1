<?php
//Definita la classe Movie
class Movie{

    //Dichiarazione delle istanze
    public $name;
    public $director;
    public $genre;              
    public $year;
    public $country;
    public $vote = null;


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


//Creazione e Riempimento oggetti 

$shutterIsland = new Movie(2010);

$shutterIsland->name= "Shutter Island";
$shutterIsland->director= "Martin Scorsese";
$shutterIsland->genre= "Thriller/Drammatico";
$shutterIsland->country= "USA";
$shutterIsland->setVote(9.5); //Richiamato metodo per il controllo del voto   
$nataleARio = new Movie(2008);

$nataleARio->name = "Natale a Rio";
$nataleARio->director = "Neri Parenti";
$nataleARio->genre = "Comico/Commedia";
$nataleARio->country = "ITA";
$nataleARio->setVote(6); //Richiamato metodo per il controllo del voto

$missionImpossible = new Movie(1996);

$missionImpossible->name = "Mission Impossible";
$missionImpossible->director = "Brian De Palma";
$missionImpossible->genre = "Azione/Thriller";
$missionImpossible->country = "USA";
$missionImpossible->setVote(8.5); //Richiamato metodo per il controllo del voto
var_dump ($shutterIsland, $nataleARio, $missionImpossible);

?>