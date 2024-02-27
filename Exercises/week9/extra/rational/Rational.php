<?php
    # Enter code here

    class Rational {

        private $num;
        private $den;

        public function __construct($numerator, $denominator) {
            $this->num = $numerator;
            $this->den = $denominator;
        }

        public function getNumerator() {
            return $this->num;
        }

        public function setNumerator($newNum) {
            $this->num = $newNum;
        } 

        public function getDenominator() {
            return $this->den;
        }

        public function setDenominator($newDen) {
            $this->den = $newDen;
        }

        public function getString() {
            return "{$this->num}/{$this->den}";
        }

        public function add($rat2) {
            $a = $this->num;
            $b = $this->den;
            $c = $rat2->getNumerator();
            $d = $rat2->getDenominator();

            $newNum = $a*$d + $b*$c;
            $newDen = $b*$d;

            return "$newNum/$newDen";
        }

        public function sub($rat2) {
            $a = $this->num;
            $b = $this->den;
            $c = $rat2->getNumerator();
            $d = $rat2->getDenominator();

            $newNum = $a*$d - $b*$c;
            $newDen = $b*$d;

            return "$newNum/$newDen";
        }

        public function mul($rat2) {
            $a = $this->num;
            $b = $this->den;
            $c = $rat2->getNumerator();
            $d = $rat2->getDenominator();

            $newNum = $a*$c;
            $newDen = $b*$d;

            return "$newNum/$newDen";
        }

        public function div($rat2) {
            $a = $this->num;
            $b = $this->den;
            $c = $rat2->getNumerator();
            $d = $rat2->getDenominator();

            $newNum = $a*$d;
            $newDen = $b*$c;

            return "$newNum/$newDen";
        }

    } 
    
?>