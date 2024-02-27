<?php

    class Location{
        private $country;       // string
        private $start_date;    // string
        private $drivers;       // indexed array of Driver object
      

        public function __construct($country, $start_date, $drivers){
            $this->country = $country;
            $this->start_date = $start_date;
            $this->drivers = $drivers;
        }

        public function getCountry(){
            return $this->country;
        }
    
        public function getStartDate(){
            return $this->start_date;
        }
    
        public function getDrivers(){
            return $this->drivers;
        }
        public function setDriver($drivers){
            $this -> drivers = $drivers;
        }
        public function setStartDate($start_date){
            $this -> start_date = $start_date;
        }

    }

?>