<?php 
namespace App\Tests\Controller;

use src\Controller\FizzBuzzController;
use PHPUnit\Framework\TestCase;

class FizzBuzzControllerTest extends TestCase{

    public function testAdd(){
        $fizzbuzz = new FizzBuzzController();

        $result = count($fizzbuzz->increaseNumber());
        $this->assertEquals(100, $result);
    }

}

?>