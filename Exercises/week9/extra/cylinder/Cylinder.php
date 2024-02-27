<?php
    # Add code here
    class Cylinder {

        private $r;
        private $h;
        const PI=3.14;

        public function __construct($r, $h) {
            $this->r = $r;
            $this->h = $h;
        }

        public function getRadius() {
            return $this->r;
        }

        public function getHeight() {
            return $this->h;
        }

        public function setRadius($r) {
            $this->r = $r;
        }

        public function setHeight($h) {
            $this->h = $h;
        }

        public function getVolume() {
            return number_format((self::PI*$this->r*$this->r*$this->h),2);
        }

        public function toString() {
            return "radius = {$this->r}, height = {$this->h}";
        }

    }
    
?>