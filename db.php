<?php

$actionGenre = new Genre("Action", "PG-13");
$sciFi = new Genre("Sci-Fi", "PG-13");
$movie1 = new Movie("Mad Max: Fury Road", "George Miller", "2015", [$actionGenre, $sciFi], 5);
$movie2 = new Movie("The Conjuring", "James Wan", "2013", [new Genre("Horror", "R (18+)"), new Genre("Thriller", "R (18+)")],3);
