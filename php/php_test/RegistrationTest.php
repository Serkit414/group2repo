<?php
use PHPUnit\Framework\TestCase;
require_once('./php_class/Registration.php');

    class RegistrationTest extends TestCase{

    #Test empty parameters
    public function testEmptyUsername(): void
    {
        $regTester = new ClientRegistration("", "fluffy2015");
        $this->assertSame($regTester -> getUsername(), null);
    }
    public function testEmptyPassword(): void
    {
        $regTester = new ClientRegistration("CoolDude9", "");
        $this->assertSame($regTester -> getPassword(), null);
    }


    #Test get functions
    public function testRegGetUsername(): void
    {
        $regTester = new ClientRegistration("CoolDude9", "fluffy2015");
        $this->assertSame($regTester -> getUsername(), "CoolDude9");
    }
    public function testRegGetPassword(): void
    {
        $regTester = new ClientRegistration("CoolDude9", "fluffy2015");
        $this->assertSame($regTester -> getPassword(), "fluffy2015");
    }
}
?>
