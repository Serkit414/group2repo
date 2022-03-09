<?php
    class ClientRegistration{
        private $username;
        private $password;

        function validateParams($Username, $Password){
            $validParams = true;
            
            return $validParams;
        }

        function __construct($Username, $Password){

            if ($this->validateParams($Username, $Password)){
                $this->username = $Username;
                $this->password = $Password;

            }
            else{
                $this->username = null;
                $this->password = null;
                header("Location: ../pages/client_profile_err.html");
            }
        }

        public function getUsername(){
            return $this->username;
        }

        public function getPassword(){
            return $this->password;
        }
    }
?>
