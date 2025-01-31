<?php

namespace Hexlet\Prime;

use function Hexlet\Engine\runGame;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2, $sqrt = (int) sqrt($number); $i <= $sqrt; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function brainPrime(): array
{
    $number = rand(MIN_NUMBER, MAX_NUMBER);
    $question = (string) $number;
    $correctAnswer = isPrime($number) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}

function main(): void
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    runGame($rule, 'Hexlet\Prime\brainPrime');
}