<?php
namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

function greet() {
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
