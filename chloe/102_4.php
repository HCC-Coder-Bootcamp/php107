<?php 

require('convert_time.php');

$taskSeconds = (int)readline('How many seconds' . PHP_EOL);

$result = convert_time($taskSeconds);

echo (int)(string)$result['hr'] . 'hour '. $result['mins'] . 'min ' . $result['sec'] . 'sec ' . PHP_EOL;

