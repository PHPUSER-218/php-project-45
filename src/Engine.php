<?php

namespace Hexlet\Engine;

use function cli\line;
use function cli\prompt;

function engine(string $rule, callable $getQuestionAndAnswer): void
{
    global $name;
    line($rule);

    $rounds = 3;

    for ($i = 0; $i < $rounds; $i++) {
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
