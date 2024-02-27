<?php
    class DeliveryDAO{

        private $deliveries;

        public function __construct(){
            $this->deliveries = [];
            $this->deliveries[] = new Delivery ("D1", "Grocery", 10, false, 11);
            $this->deliveries[] = new Delivery ("D2", "Document", 100, false, 12);
            $this->deliveries[] = new Delivery ("D3", "Grocery", 50, false, 15);
            $this->deliveries[] = new Delivery ("D4", "Document", 20, true, 21);
            $this->deliveries[] = new Delivery ("D5", "Document", 20, true, 22);
            $this->deliveries[] = new Delivery ("D6", "Others", 20, false, 10);
            $this->deliveries[] = new Delivery ("D7", "Others", 20, false, 12);
            $this->deliveries[] = new Delivery ("D8", "Document", 40, false, 21);
        }

        public function retrieveAll(){
            return $this->deliveries;
        }

        public function retrieveWithID($id){
            foreach ($this->deliveries as $delivery){
                if ($delivery->getId() == $id){
                    return $delivery;
                }
            }
            return null;
        }

        public function retrieveWithIDs($ids){
            $matchingDeliveries = [];
            foreach ($ids as $id){
                $matchingDeliveries[] = $this->retrieveWithID($id);
            }
            return $matchingDeliveries;
        }
    }
?>