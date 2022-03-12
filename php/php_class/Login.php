<?php
    class Login{
        private $username;
        private $password;
        private $validLogin;

        function validateParams($Username, $Password){
            if ($Username != null && $Password != null){
                $validParams = true;
            }
            else{
                $validParams = false;
            }
            
            return $validParams;
        }
        
        function checkUserPassword(){
            //This will use information saved in the database in the future.
            $savedUsername = "testUsername";
            $savedPassword = "testPassword123!!";
            
            if ($this->username != $savedUsername || $this->password != $savedPassword){
                header("Location: ../pages/login_err.html");
            }
            else{
                header("Location: ../php/fuelQuoteForm.php");
                $this->validLogin = true;
            }
        }

        function __construct($Username, $Password){
            
            $this -> validLogin = false;
            if ($this->validateParams($Username, $Password)){
                $this->username = $Username;
                $this->password = $Password;

            }
            else{
                $this->username = "NULL";
                $this->password = "NULL";
                header("Location: ../pages/login_err.html");
            }
            
            $this -> checkUserPassword();
        }

        public function getUsername(){
            return $this->username;
        }

        public function getPassword(){
            return $this->password;
        }
        
        public function getLogin(){
            return $this->validLogin;
        }
    }
?>