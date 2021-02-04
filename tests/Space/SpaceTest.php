<?php
declare(strict_types=1);

require '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Newball\SpaceTools\Space;

final class SpaceTest extends TestCase
{
    /**
     * Test that a single space can be created
     */
    public function testCanCreateSpace()
    {
        $spaceTest = new Space();
        $sp = $spaceTest->spaces;
        $this->assertEquals(' ', $sp);
    }

    /**
     * Test that multiple spaces can be created
     */
    public function testCanCreateMultipleSpaces()
    {
        $spaceTest = new Space(5);
        $sp = $spaceTest->spaces;
        $this->assertEquals('     ', $sp);
    }

    /**
     * Test that an escaped space can be created
     */
    public function testCanCreateEscapedSpace()
    {
        $spaceTest = new Space(1,'escaped');
        $sp = $spaceTest->spaces;
        $this->assertEquals("\040", $sp);
    }

    /**
     * Test that multiple escaped spaces can be created
     */
    public function testCanCreateMultipleEscapedSpaces()
    {
        $spaceTest = new Space(6,'escaped');
        $sp = $spaceTest->spaces;
        $this->assertEquals("\040\040\040\040\040\040", $sp);
    }


}