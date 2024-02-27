<?php
    class Assignment{
        
        private $rider;
        private $delivery;
        private $timeSlot; 

        public function __construct ($rider, $delivery, $timeSlot){
            $this->rider = $rider;
            $this->delivery = $delivery;
            $this->timeSlot = $timeSlot;
        }

        public function getRider() {
            return $this->rider;
        }

        public function getDelivery() {
            return $this->delivery;
        }

        public function getTimeSlot(){
            return $this->timeSlot;
        }

        public function isValid() {
            $rider_start = $this->rider->getStart();
            $rider_end = $this->rider->getEnd();
            $deadline = $this->delivery->getDeadline();

            if (    ($this->timeSlot<$rider_start) || 
                    ($this->timeSlot>$rider_end) || 
                    ($this->timeSlot > $deadline)   ){
                return false;
            }
            else{
                return true;
            }
        }

        public function toString(){
            return "{$this->rider->getUniqueName()} is assigned to delivery {$this->delivery->getId()} at time slot $this->timeSlot";
        }

    }
?>