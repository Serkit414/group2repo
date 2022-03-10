<?php
use PHPUnit\Framework\TestCase;
require_once('./php_class/FuelQuote.php');

    class FuelTest extends TestCase{

    public function testFuelGetGallons(): void
    {
        $quoteTester = new FuelQuote(50, "2022-05-07");
        $this->assertSame($quoteTester -> getGallons(), 50);
    }
    public function testFuelGetDate(): void
    {
        $quoteTester = new FuelQuote(50, "2022-05-07");
        $this->assertSame($quoteTester -> getDate(), "2022-05-07");
    }
    public function testFuelNaNGallons(): void
    {
        $quoteTester = new FuelQuote("not a number", "2022-08-30");
        $this->assertSame($quoteTester -> getGallons(), -1);
    }
    public function testFuelLowGallons(): void
    {
        $quoteTester = new FuelQuote(-18, "2022-08-30");
        $this->assertSame($quoteTester -> getGallons(), -1);
    }
    public function testFuelNotTime(): void
    {
        $quoteTester = new FuelQuote(230, "on my birthday");
        $this->assertSame($quoteTester -> getDate(), "1901-01-01");
    }
    public function testFuelEarlyTime(): void
    {
        $quoteTester = new FuelQuote(230, "2022-01-05");
        $this->assertSame($quoteTester -> getDate(), "1901-01-01");
    }
    public function testFuelSameDay(): void
    {
        $quoteTester = new FuelQuote(230, "now");
        $this->assertSame($quoteTester -> getDate(), "1901-01-01");
    }
    public function testFuelNextDay(): void
    {
        $quoteTester = new FuelQuote(230, date("Y-m-d", strtotime("now+1 day")));
        $this->assertSame($quoteTester -> getDate(), "1901-01-01");
    }
    public function testFuelTwoDays(): void
    {
        $quoteTester = new FuelQuote(230, date("Y-m-d", strtotime("now+2 day")));
        $this->assertSame($quoteTester -> getDate(), date("Y-m-d", strtotime("now+2 day")));
    }
    public function testPriceInt(): void
    {
        $quoteTester = new FuelQuote(100, "2022-05-07");
        $this->assertSame($quoteTester->calculatePrice(), "$250.00");
    }
    public function testPriceFloat(): void
    {
        $quoteTester = new FuelQuote(101, "2022-05-07");
        $this->assertSame($quoteTester->calculatePrice(), "$252.50");
    }
}
?>