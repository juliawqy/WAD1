<?php
    # Enter code here
    class Rectangle {

        private $breadth;
        private $length;

        public function __construct($length, $breadth) {
            $this->length = $length;
            $this->breadth = $breadth;
        }

        public function getLength() {
            return $this->length;
        }

        public function getBreadth() {
            return $this->breath;
        }

        public function setLength($l) {
            $this->length = $l;
        }

        public function setBreath($b) {
            $this->breadth = $b;
        }

        public function getArea() {
            return $this->length*$this->breadth;
        }

        public function getPerimeter() {
            return 2*($this->length + $this->breadth);
        }

        public function toString() {
            return "Length = {$this->length}, Breadth = {$this->breadth}";
        }

    }
    
?>