<?php
    ### DO NOT MODIFY THIS FILE ###
    class UserAccount
    {
        private $mobileNo;
        private $name;
        private $hashedPassword;
        private $role;

        public function __construct($mobileNo, $name, $hashedPassword, $role)
        {
            $this->mobileNo = $mobileNo;
            $this->name = $name;
            $this->hashedPassword = $hashedPassword;
            $this->role = $role;
        }

        public function getMobileNo()
        {
            return $this->mobileNo;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getHashedPassword()
        {
            return $this->hashedPassword;
        }

        public function getRole()
        {
            return $this->role;
        }
    }
?>
