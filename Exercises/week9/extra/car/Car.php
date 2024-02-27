<?php

// Write Car class definition

    class Car {
        private $year;
        private $make;
        private $model;
        private $rating;

        public function __construct($year, $make, $model, $rating) {
            $this->year = $year;
            $this->make = $make;
            $this->model = $model;
            $this->rating = $rating;
        }

        public function getYear() {
            return $this->year;
        }

        public function getMake() {
            return $this->make;
        }

        public function getModel() {
            return $this->model;
        }

        public function getRating() {
            return $this->rating;
        }
    }

?>