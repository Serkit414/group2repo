<?php
    class FuelQuote{
        private $numGallons;
        private $deliveryDate;

        function __construct($gallons, $delivery){
            $this->numGallons = $gallons;
            $this->deliveryDate = $delivery;
        }

        public function getGallons(){
            return $this->numGallons;
        }

        public function getDate(){
            return $this->deliveryDate;
        }
    }
?>