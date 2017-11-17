<?php  

require('library/number.php');

$input_1 = readline('number 1: ') . PHP_EOL;
$input_2 = readline('number 2: ') . PHP_EOL;
$input_3 = readline('number 3: ') . PHP_EOL;

$result = number($input_1 , $input_2 , $input_3);
echo 'The largest number is' . $result;