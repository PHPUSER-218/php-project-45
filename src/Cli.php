<?php

namespace Hexlet\Cli;

use function cli\line;
use function cli\prompt;

function greet()
{
    displayWelcomeMessage();
    $name = askForName();
    greetUser($name);
    return $name;
}
function displayWelcomeMessage()
{
    echo "Welcome to the Brain Games!\n";
}

function askForName()
{
    return prompt('May I have your name?');
}

function greetUser($name)
{
    line("Hello, %s!", $name);
}
