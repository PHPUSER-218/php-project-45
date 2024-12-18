<?php
namespace Hexlet\Even;

require_once __DIR__ . '/../vendor/autoload.php';

use function Hexlet\Cli\greet;
use function cli\line;
use function cli\prompt;

function brainEven()
{
    global $name;
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $rounds = 3;

    for ($i = 0; $i < $rounds; $i++) {
        $number = rand(1, 1000);
        line("Question: %d", $number);

        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
        $userAnswer = prompt('Your answer');

        if ($userAnswer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }

    line("Congratulations, %s!", $name);
}