<?php
    # Define Ellipse class following 
    # the class diagram on the slides.
    # The formula to compute area of Ellipse 
    # is available on: https://www.mathsisfun.com/area.html 

    class Ellipse {
        const PI = 3.14;
        private $a;
        private $b;
        public function __construct($a, $b) {
            $this->a = $a;
            $this->b = $b;
        }
        public function computeArea() {
            return self::PI*$this->a*$this->b;
        }
    }

    
    ######################################
?>