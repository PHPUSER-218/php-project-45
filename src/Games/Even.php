<?php

namespace Hexlet\Even;

function brainEven(): array
{
    $example = rand(1, 1000);
    $correctAnswer = $example % 2 === 0 ? 'yes' : 'no';
    $question = (string) $example;
    return [$question, $correctAnswer];
}
