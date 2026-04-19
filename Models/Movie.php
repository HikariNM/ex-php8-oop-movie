<?php
require_once './Traits/Rating.php';

class Movie {

use Rating;

    public $title;
    public $director;
    public $releaseYear;
    public array $genres;

    public function __construct($_title, $_director, $_releaseYear, Array $_genres, $_rating){
    $this->title = $_title;
    $this->director = $_director;
    $this->releaseYear = $_releaseYear;
    $this->genres = $_genres;

    $this->rating = $_rating;
    }

    public function getSummary() {
        return "The movie '{$this->title}' was directed by {$this->director} in {$this->releaseYear}. This movie is {$this->genres[0]->ageRating}. It's rating is {$this->getStars()}";
    }

    public function getGenresList() {
        $names = [];
        foreach ($this->genres as $g) { $names[] = $g->name; }
        return implode(", ", $names);
    }
}