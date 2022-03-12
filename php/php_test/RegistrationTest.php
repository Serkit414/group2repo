<?php
use PHPUnit\Framework\TestCase;
require_once('./php_class/Registration.php');

    class RegistrationTest extends TestCase{

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