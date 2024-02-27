<?php
    /*
        Name: WONG Qian Yu
        Email: qianyu.wong.2022
    */

    ### Add code here or elsewhere in this file

    class User {

        private $userId;
        private $gender;
        private $activity;

        public function __construct($userId, $gender, $activity) {
            $this->userId = $userId;
            $this->gender = $gender;
            $this->activity = $activity;
        }

        public function getUserId() {
            return $this->userId;
        }

        public function getGender() {
            return $this->gender;
        }

        public function getActivity() {
            return $this->activity;
        }

    }
 
    
 
?>
