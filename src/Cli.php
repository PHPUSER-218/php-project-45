<?php

namespace Hexlet\Cli;

use function cli\line;
use function cli\prompt;

function greet()
{
    echo "Welcome to the Brain Games!\n";
    global $name;
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
