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
}
