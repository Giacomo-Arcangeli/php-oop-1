<?php

class Movie{
    public $titolo;
    public $durata;
    public $genere;
    public $anno;

public function __construct($titolo, $durata, $genere, $anno){
    $this->titolo = $titolo;
    $this->durata = $durata;
    $this->genere = $genere;
    $this->anno = $anno;
}

}

$movie1= new Movie('Titanic', '3h', 'Drammatico',1997 );
$movie2 = new Movie('Avatar', '2,45h','Fantascienza',2009);

var_dump($movie1);
var_dump($movie2);

?>
