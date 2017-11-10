<?php

function nicer_echo($str) {
    echo PHP_EOL;
    echo str_pad('#', 40, '#') . PHP_EOL;
    echo str_pad( "# $str", 39) . '#' . PHP_EOL;
    echo str_pad('#', 40, '#') . PHP_EOL;
    echo PHP_EOL;
}