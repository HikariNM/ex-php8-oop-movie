<?php

trait Rating {
    public $rating;

    public function getStars() {
        return str_repeat("★", $this->rating) . str_repeat("☆", 5 - $this->rating);
    }
}