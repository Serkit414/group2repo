<?php
require_once('FuelQuote.php');
class FuelHistory{
    static function generateHistory($username){
        $tableHTML = '';
        
        //This will later be retrieved from the database and stored in a Profile class.
        $accountAddress = "123 Orange Rd, Houston, TX 77204"; 
        
        //This simulates getting tables from database with username given, then begin iterating through
        $historyData = array(new FuelQuote(300, "2022-05-03"), new FuelQuote(542, "2022-05-19"), 
            new FuelQuote(132, "2022-06-20"));

        for ($i = 0; $i < 3; ++$i ){
            $tableHTML .= '<table class = "histTable">';
            $tableHTML .= '<p class = "text-center">'.strval($historyData[$i] -> getDate()).'</p>';
            $tableHTML .= "<tr>";
            $tableHTML .= "<th>Gallon Number:</th><td>";
            $tableHTML .= strval($historyData[$i] -> getGallons());
            $tableHTML .= "</td></tr>";
            $tableHTML .= "<th>Delivery Address:</th><td>";
            $tableHTML .= $accountAddress;
            $tableHTML .= "</td></tr><tr><th>Delivery Date: </th><td>";
            $tableHTML .= strval($historyData[$i] -> getDate());
            $tableHTML .= "</td></tr><tr><th>Total Price: </th><td>";
            $tableHTML .= strval($historyData[$i] -> calculatePrice());
            $tableHTML .= "</td></tr></table><br>";
        }
        return $tableHTML;
    }
}

