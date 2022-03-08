<?php
require_once('PriceCalculator.php');
    class FuelQuote{
        private $numGallons;
        private $deliveryDate;

        function validateParams($gallons, $delivery){
            $validParams = true;
            if (!is_numeric($gallons)){
                $validParams = false;
            }
            if (intval($gallons) < 0){
                $validParams = false;
            }
            
            if(!strtotime($delivery)){
                $validParams = false;
            }
            
            if(strtotime($delivery) < strtotime("now+1 day")){
                $validParams = false;
            }
            
            return $validParams;
        }
        
        function __construct($gallons, $delivery){
            if ($this->validateParams($gallons, $delivery)){
                $this->numGallons = $gallons;
                $this->deliveryDate = $delivery;
            }
            else{
                $this->numGallons = -1;
                $this->deliveryDate = "1901-01-01";
                header("Location: ../pages/fuel_quote_err.html");
            }
        }

        public function getGallons(){
            return $this->numGallons;
        }

        public function getDate(){
            return $this->deliveryDate;
        }
        
        public function calculatePrice(){
             //This will later be calculated/gathered from the pricing module, saved as it's own object.
            $suggestedCost = PriceCalculator::suggestedPrice();
    
            $price = floatval(substr($suggestedCost, 1));
            $gallonNumber = intval($this->numGallons);

            $totalCost = strval($price * $gallonNumber);

            return("$".$totalCost);
        }
    }
