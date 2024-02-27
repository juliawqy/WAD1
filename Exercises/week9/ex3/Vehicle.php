<?php
    class Vehicle{
        private $plateNum;
        private $type;
        
        public function __construct($plateNum,$type){
            $this->plateNum = $plateNum;
            $this->type =  $type;
        }

        # [A1] Add getType(), getPlateNum() methods

        public function getType() {
            return $this->type;
        }
        public function getPlateNum() {
            return $this->plateNum;
        }
        
        ##########################

        # [A2] Add setType($type), setPlateNum($plateNum) methods

        public function setType($type) {
            $this->type = $type;
        }
        public function setPlateNum($plateNum) {
            $this->plateNum = $plateNum;
        }
        
        ##########################

        # [B] Modify printInfo method to
        #     print the type and plate number properties
        #     of a Vehicle object
        #     e.g., "A car with plate number 27",
        #           "A truck with plate number 37", etc.
        #     Note: Do not hard code
        public function printInfo(){
            echo "A {$this->type} with plate number {$this->plateNum}";
        }
        ##########################

    }
?>