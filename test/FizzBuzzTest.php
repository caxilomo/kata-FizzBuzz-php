<?php

namespace Test;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldReturnOneWhenCallWithOne()
    {
        $fizzBuzzer = new FizzBuzz();
        $this->assertEquals($fizzBuzzer(1), 1);
    }

    /**
     * @test
     */
    public function itShouldReturnTwoWhenCallWithTwo()
    {
        $fizzBuzzer = new FizzBuzz();
        $this->assertEquals($fizzBuzzer(2), 2);
    }

    /**
     * @test
     */
    public function itShouldReturnFizzWhenCallWithThree()
    {
        $fizzBuzzer = new FizzBuzz();
        $this->assertEquals($fizzBuzzer(3), 'Fizz');
    }

    /**
     * @test
     */
    public function itShouldReturnBuzzWhenCallWithFive()
    {
        $fizzBuzzer = new FizzBuzz();
        $this->assertEquals($fizzBuzzer(5), 'Buzz');
    }

    /**
     * @test
     */
    public function itShouldReturnFizzWhenCallWithAMultipleOfThree()
    {
        $fizzBuzzer = new FizzBuzz();
        $this->assertEquals($fizzBuzzer(6), 'Fizz');
    }

    /**
     * @test
     */
    public function itShouldReturnBuzzWhenCallWithAMultipleOfFive()
    {
        $fizzBuzzer = new FizzBuzz();
        $this->assertEquals($fizzBuzzer(10), 'Buzz');
    }

    /**
     * @test
     */
    public function itShouldReturnFizzBuzzWhenCallWithAMultipleOfThreeAndAMultipleOfFive()
    {
        $fizzBuzzer = new FizzBuzz();
        $this->assertEquals($fizzBuzzer(15), 'FizzBuzz');
    }
}
