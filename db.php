<?php

$actionGenre = new Genre("Action", "PG-13");
$sciFi = new Genre("Sci-Fi", "PG-13");

$movies=[
    new Movie("Mad Max: Fury Road", "George Miller", "2015", [$actionGenre, $sciFi], 5),
    new Movie("The Conjuring", "James Wan", "2013", [new Genre("Horror", "R (18+)"), new Genre("Thriller", "R (18+)")], 4),
    new Movie( "Interstellar","Christopher Nolan",  "2014", [new Genre("Sci-Fi", "PG-13"), new Genre("Drama", "PG-13")], 2),
    new Movie("Back to the Future", "Robert Zemeckis", "1985", [new Genre("Adventure", "PG"), new Genre("Comedy", "PG")], 5)
];