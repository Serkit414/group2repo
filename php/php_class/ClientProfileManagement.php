<?php
    class ClientProfileManagement{
        private $fullName;
        private $add1;
        private $add2;
        private $city;
        private $state;
        private $zipcode;

        function validateParams($Name, $Address1, $Address2, $City, $State, $Zipcode){
            $validParams = true;
            # Required Fields
            if ($Name == "" or $Address1 == "" or $City =="" or $State == "" or $Zipcode ==""){
                $validParams = false;
            }
            # Length Parameters
            if ((strlen($Name) > 50) or (strlen($Address1) > 100) or (strlen($Address2) > 100) or (strlen($Zipcode) > 9) or (strlen($Zipcode) < 5)){
                $validParams = false;
            }
            # Type Parameters (None)
            
            return $validParams;
        }

        function __construct($Name, $Address1, $Address2, $City, $State, $Zipcode){

            if ($this->validateParams($Name, $Address1, $Address2, $City, $State, $Zipcode)){
                $this->fullName = $Name;
                $this->add1 = $Address1;
                $this->add2 = $Address2;
                $this->city = $City;
                $this->state = $State;
                $this->zipcode = $Zipcode;
            }
            else{
                $this->fullName = null;
                $this->add1 = null;
                $this->add2 = null;
                $this->city = null;
                $this->state = null;
                $this->zipcode = null;
                header("Location: ../pages/client_profile_err.html");
            }
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
