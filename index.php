<?php

require_once __DIR__ .'/db/models/movie.php';
require_once __DIR__ .'/db/models/genre.php';
//Creazione e Riempimento oggetti 


$shutterIsland = new Movie(2010);

$shutterIsland->name= "Shutter Island";
$shutterIsland->director= "Martin Scorsese";
$shutterIsland ->genre="{$genres->thriller}/{$genres->drama}";
$shutterIsland->country= "USA";
$shutterIsland->setVote(9.5); //Richiamato metodo per il controllo del voto   
$nataleARio = new Movie(2008);

$nataleARio->name = "Natale a Rio";
$nataleARio->director = "Neri Parenti";
$nataleARio->genre= "{$genres->comedy}";
$nataleARio->country = "ITA";
$nataleARio->setVote(6); //Richiamato metodo per il controllo del voto

$missionImpossible = new Movie(1996);

$missionImpossible->name = "Mission Impossible";
$missionImpossible->director = "Brian De Palma";
$missionImpossible->genre= "{$genres->action}";
$missionImpossible->country = "USA";
$missionImpossible->setVote(8.5); //Richiamato metodo per il controllo del voto
var_dump ($shutterIsland, $nataleARio, $missionImpossible);

?>