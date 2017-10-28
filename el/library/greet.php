<?php

function greet($name)
{
    echo str_pad('#', 40, '#') . PHP_EOL;
    echo "\tHello $name" . PHP_EOL;
    echo str_pad('#', 40, '#') . PHP_EOL;
}