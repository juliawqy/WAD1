<?php
    class Delivery{

        private $id;
        private $category; 
        private $revenue;
        private $vip;
        private $deadline; # latest time unit delivery must be made (range: 9 to 22)
        
        public function __construct ($id, $category, $revenue, $vip, $deadline){
            $this->id = $id;
            $this->category = $category;
            $this->revenue = $revenue;
            $this->vip = $vip;
            $this->deadline = $deadline;
        }

        public function toString(){
            $infoStr = "{$this->id}, {$this->category}, Revenue: {$this->revenue}";
            if ($this->vip){
                $infoStr .= ", <strong>VIP</strong>";
            }
            $infoStr .= ", Deadline: {$this->deadline}";
            return $infoStr;
        }

        public function getId(){
            return $this->id;
        }

        public function getCategory(){
            return $this->category;
        }

        public function getRevenue() {
            return $this->revenue;
        }

        public function isVip() {
            return $this->vip;
        }

        public function getDeadline(){
            return $this->deadline;
        }

        
    }
?>