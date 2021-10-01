<?php

namespace App\test;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;
/** 
 * Mise en oevure du TDD pour un KATA
 * 
 * @category Kata
 * @package  Kata
 * @author   Ludovic JORGE DO MARCO <ludovic.jorgedomarco@gmail.com>
 * 
 */
class UnitTest extends TestCase 
{    
    /**
     * TestFizBuzz
     *
     * @return void
     */
    public function testFizBuzz()
    {
        $fizzBuzz = new FizzBuzz;
        $this->assertEquals('1', $fizzBuzz->getResult(1), 'send 1 result 1');
        $this->assertEquals('Fizz', $fizzBuzz->getResult(3), 'send 3 result Fizz');
        $this->assertEquals('Fizz', $fizzBuzz->getResult(6), 'send 6 result Fizz');
        $this->assertEquals('Buzz', $fizzBuzz->getResult(5), 'send 5 result Buzz');
        $this->assertEquals('FizzBuzz', $fizzBuzz->getResult(15), 'send 15 result FizzBuzz');
    }
}