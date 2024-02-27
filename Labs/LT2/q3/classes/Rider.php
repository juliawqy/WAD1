<?php
    class Rider{

        private $uniqueName;
        private $start; #earliest time unit, the rider can make a delivery
        private $end; #latest time unit, the rider can make a delivery

        public function __construct ($uniqueName, $start, $end){
            $this->uniqueName = $uniqueName;
            $this->start = $start;
            $this->end = $end;
        }

        public function getUniqueName() {
            return $this->uniqueName;
        }

        public function getStart(){
            return $this->start;
        }

        public function getEnd(){
            return $this->end;
        }

        public function toString(){
            return $this->uniqueName . " (Start: {$this->start}, End: {$this->end})";
        }
    }
?>