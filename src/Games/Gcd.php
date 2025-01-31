<?php

namespace Hexlet\Gcd;

use function Hexlet\Engine\runGame;

function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        [$a, $b] = [$b, $a % $b];
    }
    return $a;
}

function brainGcd(): array
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);

    $question = "$num1 $num2";
    $correctAnswer = (string) gcd($num1, $num2);

    return [$question, $correctAnswer];
}

function main(): void
{
    $rule = 'Find the greatest common divisor of given numbers.';
    runGame($rule, 'Hexlet\Gcd\brainGcd');
}