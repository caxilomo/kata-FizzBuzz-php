<?php

use App\FizzBuzz;

require __DIR__.'/vendor/autoload.php';

$fizzBuzzer = new FizzBuzz();

for ($i = 1; $i <= 100; $i++) {
    echo $fizzBuzzer($i), PHP_EOL;
}
