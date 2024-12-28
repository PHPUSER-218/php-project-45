<?php

namespace Hexlet\Progression;

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
    $length = rand(5, 10);
    $start = rand(1, 50);
    $step = rand(2, 10);
    $hiddenIndex = rand(0, $length - 1);

    $progression = generateProgression($length, $start, $step);
    $correctAnswer = (string)$progression[$hiddenIndex];
    $progression[$hiddenIndex] = '..';

    $question = implode(' ', $progression);

    return [$question, $correctAnswer];
}
