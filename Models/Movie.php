<?php

class Movie {
    public $title;
    public $director;
    public $releaseYear;
    public array $genres;

    public function __construct($_title, $_director, $_releaseYear, Array $_genres){
    $this->title = $_title;
    $this->director = $_director;
    $this->releaseYear = $_releaseYear;
    $this->genres = $_genres;
    }

    public function getSummary() {
        return "The movie '{$this->title}' was directed by {$this->director} in {$this->releaseYear}. This movie is {$this->genres[0]->ageRating}.";
    }
}