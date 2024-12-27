<?php

namespace Hexlet\Calc;

function brainCalc(): array
{
    $signs = ['+', '-', '*'];
    $number1 = rand(1, 100);
    $number2 = rand(1, 100);
    $randomSign = $signs[array_rand($signs)];
    $example = $number1 . ' ' . $randomSign . ' ' . $number2;

    switch ($randomSign) {
        case '+':
            $correctAnswer = $number1 + $number2;
            break;
        case '-':
            $correctAnswer = $number1 - $number2;
            break;
        case '*':
            $correctAnswer = $number1 * $number2;
            break;
    }

    $correctAnswer = (string)$correctAnswer;
    return [$example, $correctAnswer];
}
