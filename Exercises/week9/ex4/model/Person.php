<?php
	class Person {
        private $name;
        private $age;

		public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
		}
        
        public function drive() {
			echo "Hi! I am driving a car";
        } 

        public function getName() {
            return $this->name;
        }
        
        public function getAge() {
            return $this->age;
        }

        public function setName($name){
            $this->name = $name;
        }
    }
?>