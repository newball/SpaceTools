<?php
declare(strict_types=1);

require '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Newball\SpaceTools\Newline;

final class NewlineTest extends TestCase
{
    /**
     * Test that a single newline can be created
     */
    public function testCanCreateLineBreak()
    {
        $newlineTest = new Newline();
        $nl = $newlineTest->nl;
        $this->assertEquals("\n", $nl);
    }

    /**
     * Test that a multiple newline can be created
     */
    public function testCanCreateMultipleLineBreak()
    {
        $newlineTest = new Newline(3);
        $nl = $newlineTest->nl;
        $this->assertEquals("\n\n\n", $nl);
    }

    /**
     * Test that a single return line can be created
     */
    public function testCanCreateLineReturn()
    {
        $newlineTest = new Newline(1,'return');
        $nl = $newlineTest->nl;
        $this->assertEquals("\r", $nl);
    }

    /**
     * Test that multiple return line can be created
     */
    public function testCanCreateMultipleLineReturn()
    {
        $newlineTest = new Newline(5,'return');
        $nl = $newlineTest->nl;
        $this->assertEquals("\r\r\r\r\r", $nl);
    }

    /**
     * Test that a return line with new line can be created
     */
    public function testCanCreateLineBoth()
    {
        $newlineTest = new Newline(1,'both');
        $nl = $newlineTest->nl;
        $this->assertEquals("\r\n", $nl);
    }

    /**
     * Test that multiple return lines with new lines can be created
     */
    public function testCanCreateMultipleLineBoth()
    {
        $newlineTest = new Newline(9,'both');
        $nl = $newlineTest->nl;
        $this->assertEquals("\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n", $nl);
    }



}