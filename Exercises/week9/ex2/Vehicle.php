<?php
    class Vehicle{
        private $plateNum;
        private $type;
        public function printInfo(){
            echo "A Vehicle Object";
        }
        
        # Add a constructor to initialize the two properties.
        
        public function __construct($plateNum, $type) {
            $this->plateNum = $plateNum;
            $this->type = $type;
        }

        ##########################
    }
?>