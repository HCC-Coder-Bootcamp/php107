<?php

require('demo/demo4.php');

$max = 10;
foreach ($numbers as $index => $number) {
    if ($number < $max) {
        $max = $number;
    }
}

echo 'The smallest number is ' . $max;