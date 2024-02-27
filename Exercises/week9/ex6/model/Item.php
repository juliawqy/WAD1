<?php
    class Item{
        private $name;
        private $category;
        private $quantity;
        
        public function __construct($name, $category, $quantity){
            $this->name = $name;
            $this->category = $category;
            $this->quantity = $quantity;
        }
        
        public function getName() {
            return $this->name;
        }
        
        public function getCategory(){
            return $this->category;
        }

        public function getQuantity() {
            return $this->quantity;
        }

    }
?>