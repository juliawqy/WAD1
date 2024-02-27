<?php
    # Enter code here

    class Person {

        private $firstName;
        private $lastName;
        private $age;

        public function __construct($firstName, $lastName, $age) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
        }

        public function getFirstName() {
            return $this->firstName;
        }

        public function getLastName() {
            return $this->lastName;
        }

        public function getAge() {
            return $this->age;
        }

        public function setAge($newAge) {
            $this->age = $newAge;
        }

        public function isOlder($anotherPerson) {
            if ($this->age > $anotherPerson->getAge()) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        }

        public function toString() {
            return "Person[name={$this->firstName} {$this->lastName},age={$this->age}]";
        }


    }
    
?>