<?php

namespace Hexlet\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame(string $rule, callable $getQuestionAndAnswer): void
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($rule);

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$question, $correctAnswer] = $getQuestionAndAnswer();
        line("Question: %s", $question);
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
