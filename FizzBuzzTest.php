<?php
/**
 * run: phpunit FizzBuzzTest.php
 * Expecting 1 test with 9 assertions
 */
use PHPUnit\Framework\TestCase as TestCase;
require_once('FizzBuzz.php');

class FizzBuzzTest extends TestCase
{
    public function testfizzbuzz()
    {
        $fbTest = new FizzBuzz();
        $arrList = $fbTest->increaseNumber();
        
        $this->assertEquals(100, count($arrList));
        $this->assertEquals('BuzzFizz', $arrList[14]);
        $this->assertEquals('BuzzFizz', $arrList[29]);
        $this->assertEquals('Buzz', $arrList[35]);
        $this->assertEquals('Fizz', $arrList[54]);
        $this->assertEquals('Fizz', $arrList[94]);
        $this->assertEquals('Buzz', $arrList[95]);
        $this->assertEquals('23', $arrList[22]);
        $this->assertEquals('29', $arrList[28]);
    }
}
?>