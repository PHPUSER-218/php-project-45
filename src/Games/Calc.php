<?php

namespace Hexlet\Calc;

use function Hexlet\Engine\runGame;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;
const SIGNS = ['+', '-', '*'];

function calculate(int $number1, int $number2, string $operation): ?int
{
    switch ($operation) {
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
        default:
            return null;
    }
}

function brainCalc(): array
{
    $number1 = rand(MIN_NUMBER, MAX_NUMBER);
    $number2 = rand(MIN_NUMBER, MAX_NUMBER);
    $randomSign = SIGNS[array_rand(SIGNS)];

    $example = "{$number1} {$randomSign} {$number2}";

    $correctAnswer = calculate($number1, $number2, $randomSign);

    if ($correctAnswer === null) {
        throw new \Exception('Unexpected operation sign');
    }

    $correctAnswer = (string)$correctAnswer;

    return [$example, $correctAnswer];
}

function main(): void
{
    $rule = 'What is the result of the expression?';
    runGame($rule, 'Hexlet\Calc\brainCalc');
}
