<?php

class Disney {
    private $movie;   // name of the movie
    private $year;    // year produced

    
    public function __construct($movie, $year){
        $this->movie=$movie;
        $this->year=$year;
    }

    public function getMovie(){
        return $this->movie;
    }
    public function getYear(){
        return $this->year;
    }
    
}

?>

