<?php

namespace Hexlet\Even;

use function Hexlet\Engine\runGame;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function isEven(int $number): string
{
    return $number % 2 === 0 ? 'yes' : 'no';
}

function brainEven(): array
{
    $example = rand(MIN_NUMBER, MAX_NUMBER);
    $correctAnswer = isEven($example);
    $question = (string) $example;
    return [$question, $correctAnswer];
}

function main(): void
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';
    runGame($rule, 'Hexlet\Even\brainEven');
}
