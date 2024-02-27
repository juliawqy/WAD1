<?php
    ### DO NOT MODIFY THIS FILE ###
    class Post {

        private $mobileNo;
        private $name;
        private $mainSkills;
        private $languages;
        private $cookingSkills;
        private $aboutYou;

        public function __construct($mobileNo, $name, $mainSkills, $languages, $cookingSkills, $aboutYou) {
            $this->mobileNo = $mobileNo;
            $this->name = $name;
            $this->mainSkills = $mainSkills;
            $this->languages = $languages;
            $this->cookingSkills = $cookingSkills;
            $this->aboutYou = $aboutYou;
        }

        public function getMobileNo() {
            return $this->mobileNo;
        }

        public function getName() {
            return $this->name;
        }

        public function getMainSkills() {
            return $this->mainSkills;
        }

        public function getLanguages() {
            return $this->languages;
        }

        public function getCookingSkills() {
            return $this->cookingSkills;
        }

        function getAboutYou() {
            return $this->aboutYou;
        }
    }
?>
