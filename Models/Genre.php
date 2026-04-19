<?php

class Genre {
public $name;
public $ageRating;

public function __construct($_name, $_ageRating){
    $this->name = $_name;
    $this->ageRating = $_ageRating;
}

}