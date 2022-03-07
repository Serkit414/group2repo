<?php
    class ClientProfileManagement{
        private $fullName;
        private $add1;
        private $add2;
        private $city;
        private $state;
        private $zipcode;

        function __construct($Name, $Address1, $Address2, $City, $State, $Zipcode){
            $this->fullName = $Name;
            $this->add1 = $Address1;
            $this->add2 = $Address2;
            $this->city = $City;
            $this->state = $State;
            $this->zipcode = $Zipcode;
        }

        public function getName(){
            return $this->fullName;
        }

        public function getAdd1(){
            return $this->add1;
        }

        public function getAdd2(){
            return $this->add2;
        }

        public function getCity(){
            return $this->city;
        }

        public function getState(){
            return $this->state;
        }

        public function getZipcode(){
            return $this->zipcode;
        }
    }
?>
