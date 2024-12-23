<?php
namespace Hexlet\Calc;

use function cli\line;
use function Hexlet\Engine\engine;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../Engine.php';

function brainCalc() : array

{
    $signs = ['+','-','*'];
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

    $question = $example;
    $correctAnswer = (string)$correctAnswer;
    return [$question, $correctAnswer];
}