<?php
    class RiderDAO{
        
        private $riders;

        public function __construct(){
            $this->riders = [];
            $this->riders[] = new Rider ("Captain Marvel", 10, 12);
            $this->riders[] = new Rider ("Superman", 14, 14);
            $this->riders[] = new Rider ("Wonder Woman", 19, 20);
        }

        public function retrieveAll(){
            return $this->riders;
        }

        public function retrieveWithName($name){
            $matchingRiders = [];
            foreach ($this->riders as $rider){
                if ($rider->getUniqueName() == $name){
                    return $rider;
                }
            }
            return null;
        }

        public function retrieveWithNames($names){
            $matchingRiders = [];
            foreach($names as $name){
                $matchingRiders[] = $this->retrieveWithName($name);
            }
            return $matchingRiders;
        }
    }
?>