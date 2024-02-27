<?php

    class Driver{
        private $name;       // string
        private $ranking;    // int
      
        public function __construct($name, $ranking){
            $this->name = $name;
            $this->ranking = $ranking;
        }

        public function getName(){
            return $this->name;
        }
    
        public function getRanking(){
            return $this->ranking;
        }

    }

?>