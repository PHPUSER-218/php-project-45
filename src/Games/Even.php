<?php

namespace Hexlet\Even;

require_once __DIR__ . '/../../vendor/autoload.php';

function brainEven(): array
{
    $example = rand(1, 1000);
    $correctAnswer = $example % 2 === 0 ? 'yes' : 'no';
    $question = (string)$example;
    return [$question, $correctAnswer];
}
