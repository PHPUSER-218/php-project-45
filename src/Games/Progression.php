<?php

namespace Hexlet\Progression;

use function Hexlet\Engine\runGame;

const MIN_LENGTH = 5;
const MAX_LENGTH = 10;
const MIN_START = 1;
const MAX_START = 50;
const MIN_STEP = 2;
const MAX_STEP = 10;

function generateProgression(int $length, int $start, int $step): array
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}

function brainProgression(): array
{
    $length = rand(MIN_LENGTH, MAX_LENGTH);
    $start = rand(MIN_START, MAX_START);
    $step = rand(MIN_STEP, MAX_STEP);
    $hiddenIndex = rand(0, $length - 1);

    $progression = generateProgression($length, $start, $step);
    $correctAnswer = (string) $progression[$hiddenIndex];

    $progression[$hiddenIndex] = '..';
    $question = implode(' ', $progression);

    return [$question, $correctAnswer];
}

function main(): void
{
    $rule = 'What number is missing in the progression?';
    runGame($rule, 'Hexlet\Progression\brainProgression');
}