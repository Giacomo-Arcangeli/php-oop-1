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
public function getTitle(){
    return $this-> titolo;
}
}


$movie1= new Movie('Titanic', '3h', 'Drammatico',1997 );
$movie2 = new Movie('Avatar', '2.45h' ,'Fantascienza',2009);

var_dump($movie1);
var_dump($movie2);
echo 'Titolo film:' . ' ' . $movie1->getTitle();

$movies = [$movie1, $movie2];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($movies as $movie) :?>
        <li><?=$movie->titolo.' '.$movie->durata.' '.$movie->genere.' '.$movie->anno?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>
