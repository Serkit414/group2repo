<?php
use PHPUnit\Framework\TestCase;
require_once('./php_class/ClientProfileManagement.php');

    class CPMTest extends TestCase{

    #Test get functions
    public function testCPMGetName(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "122 Green Rd", "244 Blue St", "Houston", "Texas", "77201");
        $this->assertSame($cpmTester -> getName(), "John Smith");
    }
    public function testCPMGetAdd1(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "122 Green Rd", "244 Blue St", "Houston", "Texas", "77201");
        $this->assertSame($cpmTester -> getAdd1(), "122 Green Rd");
    }
    public function testCPMGetAdd2(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "122 Green Rd", "244 Blue St", "Houston", "Texas", "77201");
        $this->assertSame($cpmTester -> getAdd2(), "244 Blue St");
    }
    public function testCPMGetCity(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "122 Green Rd", "244 Blue St", "Houston", "Texas", "77201");
        $this->assertSame($cpmTester -> getCity(), "Houston");
    }
    public function testCPMGetState(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "122 Green Rd", "244 Blue St", "Houston", "Texas", "77201");
        $this->assertSame($cpmTester -> getState(), "Texas");
    }
    public function testCPMGetZipcode(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "122 Green Rd", "244 Blue St", "Houston", "Texas", "77201");
        $this->assertSame($cpmTester -> getZipcode(), "77201");
    }

    #Test for empty parameters ("-" values are only used for test, will be altered later)
    public function testCPMEmptyParamName(): void
    {
        $cpmTester = new ClientProfileManagement("", "122 Green Rd", "244 Blue St", "Houston", "Texas", "77201");
        $this->assertSame($cpmTester -> getName(), null);
    }
    public function testCPMEmptyParamAdd1(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "", "244 Blue St", "Houston", "Texas", "77201");
        $this->assertSame($cpmTester -> getAdd1(), null);
    }
    public function testCPMEmptyParamAdd2(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "122 Green Rd", "", "Houston", "Texas", "77201");
        $this->assertSame($cpmTester -> getAdd2(), "");
    }
    public function testCPMEmptyParamCity(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "122 Green Rd", "244 Blue St", "", "Texas", "77201");
        $this->assertSame($cpmTester -> getCity(), null);
    }
    public function testCPMEmptyParamState(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "122 Green Rd", "244 Blue St", "Houston", "", "77201");
        $this->assertSame($cpmTester -> getState(), null);
    }
    public function testCPMEmptyParamZipcode(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "122 Green Rd", "244 Blue St", "Houston", "Texas", "");
        $this->assertSame($cpmTester -> getZipcode(), null);
    }

    #Test parameter lengths
    public function testCPMLongParamName(): void
    {
        $cpmTester = new ClientProfileManagement("Johnathan L Welmsworth Jackson Livingston Martin Fransic", "122 Green Rd", "244 Blue St", "Houston", "Texas", "77201");
        $this->assertSame($cpmTester -> getName(), null);
    }
    public function testCPMLongParamAdd1(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "5865241514512478954325411 Jean Baptiste Point du Sable Lake Shore Drive Street Road Ditch Sidewalk Path Alley", "244 Blue St", "Houston", "Texas", "77201");
        $this->assertSame($cpmTester -> getAdd1(), null);
    }
    public function testCPMLongParamAdd2(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "122 Green Rd", "5865241514512478954325411 Jean Baptiste Point du Sable Lake Shore Drive Street Road Ditch Sidewalk Path Alley", "Houston", "Texas", "77201");
        $this->assertSame($cpmTester -> getAdd2(), null);
    }
    public function testCPMLongParamZipcode(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "122 Green Rd", "244 Blue St", "Houston", "Texas", "77201-55623");
        $this->assertSame($cpmTester -> getZipcode(), null);
    }
    public function testCPMShortParamZipcode(): void
    {
        $cpmTester = new ClientProfileManagement("John Smith", "122 Green Rd", "244 Blue St", "Houston", "Texas", "7720");
        $this->assertSame($cpmTester -> getZipcode(), null);
    }
}
?>
