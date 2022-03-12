<?php

use PHPUnit\Framework\TestCase;
require_once('./php_class/FuelHistory.php');

    class HistoryTest extends TestCase{

        //more detailed testing will be possible once the database is connected
        public function testGenerateHistory(): void
        {
            $htmlResult = '<table class = "histTable"><p class = "text-center">2022-05-03</p><tr><th>Gallon Number:</th><td>300</td></tr><th>Delivery Address:</th><td>123 Orange Rd, Houston, TX 77204</td></tr><tr><th>Delivery Date: </th><td>2022-05-03</td></tr><tr><th>Total Price: </th><td>$750.00</td></tr></table><br><table class = "histTable"><p class = "text-center">2022-05-19</p><tr><th>Gallon Number:</th><td>542</td></tr><th>Delivery Address:</th><td>123 Orange Rd, Houston, TX 77204</td></tr><tr><th>Delivery Date: </th><td>2022-05-19</td></tr><tr><th>Total Price: </th><td>$1,355.00</td></tr></table><br><table class = "histTable"><p class = "text-center">2022-06-20</p><tr><th>Gallon Number:</th><td>132</td></tr><th>Delivery Address:</th><td>123 Orange Rd, Houston, TX 77204</td></tr><tr><th>Delivery Date: </th><td>2022-06-20</td></tr><tr><th>Total Price: </th><td>$330.00</td></tr></table><br>';        
        
            $this->assertSame(FuelHistory::generateHistory("sampleUsername"), $htmlResult);
        }
        
    }