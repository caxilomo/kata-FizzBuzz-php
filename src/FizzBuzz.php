<?php declare(strict_types=1);

namespace App;

class FizzBuzz
{
    private const FIZZ = 'Fizz';
    private const FIZZ_NUMBER = 3;

    private const BUZZ = 'Buzz';
    private const BUZZ_NUMBER = 5;

    public function __invoke(int $param): int|string
    {
        if ($this->isFizz($param) && $this->isBuzz($param)) {
            return self::FIZZ . self::BUZZ;
        }

        if ($this->isFizz($param)) {
            return self::FIZZ;
        }

        if ($this->isBuzz($param)) {
            return self::BUZZ;
        }

        return $param;
    }

    private function isFizz($param): bool
    {
        return $param % self::FIZZ_NUMBER === 0;
    }

    private function isBuzz($param): bool
    {
        return $param % self::BUZZ_NUMBER === 0;
    }
}
