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
        $this->assertEquals(1, $fizzBuzzer(1));
    }

    /**
     * @test
     */
    public function itShouldReturnTwoWhenCallWithTwo()
    {
        $fizzBuzzer = new FizzBuzz();
        $this->assertEquals(2, $fizzBuzzer(2));
    }

    /**
     * @test
     */
    public function itShouldReturnFizzWhenCallWithThree()
    {
        $fizzBuzzer = new FizzBuzz();
        $this->assertEquals('Fizz', $fizzBuzzer(3));
    }

    /**
     * @test
     */
    public function itShouldReturnBuzzWhenCallWithFive()
    {
        $fizzBuzzer = new FizzBuzz();
        $this->assertEquals('Buzz', $fizzBuzzer(5));
    }

    /**
     * @test
     */
    public function itShouldReturnFizzWhenCallWithAMultipleOfThree()
    {
        $fizzBuzzer = new FizzBuzz();
        $this->assertEquals('Fizz', $fizzBuzzer(6));
    }

    /**
     * @test
     */
    public function itShouldReturnBuzzWhenCallWithAMultipleOfFive()
    {
        $fizzBuzzer = new FizzBuzz();
        $this->assertEquals('Buzz', $fizzBuzzer(10));
    }

    /**
     * @test
     */
    public function itShouldReturnFizzBuzzWhenCallWithAMultipleOfThreeAndAMultipleOfFive()
    {
        $fizzBuzzer = new FizzBuzz();
        $this->assertEquals('FizzBuzz', $fizzBuzzer(15));
    }

    /**
     * @test
     */
    public function itShouldReturnFizzWhenFizzIsTwoAndCallWithTwo()
    {
        $fizzBuzzer = new FizzBuzz(2);
        $this->assertEquals('Fizz', $fizzBuzzer(2));
    }

    /**
     * @test
     */
    public function itShouldReturnBuzzWhenBuzzIsTwoAndCallWithTwo()
    {
        $fizzBuzzer = new FizzBuzz(5, 2);
        $this->assertEquals('Buzz', $fizzBuzzer(2));
    }

    /**
     * @test
     */
    public function itShouldReturnFizzBuzzWhenBuzzIsTwoAndCallWithTen()
    {
        $fizzBuzzer = new FizzBuzz(5, 2);
        $this->assertEquals('Buzz', $fizzBuzzer(2));
    }
}
