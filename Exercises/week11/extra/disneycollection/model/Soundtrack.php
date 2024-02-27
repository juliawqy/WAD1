<?php

class Soundtrack {
    private $playlist;               // name of the soundtrack
    private $movie;                 // name of the movie
    private $year;                  // year
    
        public function __construct($st, $m, $yr) {
            $this->playlist = $st;
            $this->movie = $m;
            $this->year = $yr;
        }

        public function getPlaylist(){
            return $this->playlist;     
        }
        
        public function getYear() {
            return $this->year;
        }

        public function getMovie() {
            return $this->movie;
        }
  
    }

?>