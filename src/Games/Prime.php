<?php

namespace Hexlet\Prime;

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2, $sqrt = (int)sqrt($number); $i <= $sqrt; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function brainPrime(): array
{
    $number = rand(1, 100);
    $question = (string)$number;
    $correctAnswer = isPrime($number) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}
