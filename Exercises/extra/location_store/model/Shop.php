<?php
    class Shop{
        
        /*
        private $name;
        private $location;
        private $items;   
        // this is an indexed array of Product objects.

        public function __construct ($name, $location) {
            $this->name = $name;
            $this->location = $location;

            // Use of ProductDAO to retrieve the list of products 
            // available at the store.
            $dao = new ProductDAO();

            // enter your codes here //
            $items = $dao->retrieveByShopName($this->name);
            $this->items = $items;

        }

        public function getItem() {
            return $this->items;
        }
        */

        /* part a script */
        private $shopname;
        private $location;
       
        public function __construct($shopname, $location){
            $this->shopname = $shopname;
            $this->location = $location;
        }

        public function getShopName() {
            return $this->shopname;
        }

        public function getLocation() {
            return $this->location;
        }
        

    }
?>