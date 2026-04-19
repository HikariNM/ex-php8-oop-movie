<?php 

class Genre {
public $name;
public $ageRating;

public function __construct($_name, $_ageRating){
    $this->name = $_name;
    $this->ageRating = $_ageRating;
}

}

class Movie {
    public $title;
    public $director;
    public $year;
    public $genre;

    public function __construct($_title, $_director, $_year, $_genre){
    $this->title =  $_title;
    $this->director =  $_director;
    $this->year =  $_year;
    $this->genre =  $_genre;
    }

    public function getSummary() {
        return "The movie '{$this->title}' was directed by {$this->director} in {$this->year}. This movie is {$this->genre->ageRating}.";
    }
}

$actionGenre = new Genre("Action", "PG-13");
$horrorGenre = new Genre("Horror", "R (18+)");

$movie1 = new Movie("Mad Max: Fury Road", "George Miller", "2015", $actionGenre);
$movie2 = new Movie("The Conjuring", "James Wan", "2013", $horrorGenre);

var_dump($movie1);
echo $movie1->getSummary();
var_dump($movie2);
echo $movie2->getSummary();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php8-oop-movie</title>
</head>
<body>
    
</body>
</html>