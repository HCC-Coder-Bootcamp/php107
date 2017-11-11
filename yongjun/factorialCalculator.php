<?php
// n factorial, n!

require('library/factorial.php');
echo system('clear');
echo 'I will find the factorial value of your input, n' . PHP_EOL;

$input = readline('n = ');

while ($input != 'x' && $input != 'X') {
	$value = (int)$input;
	echo system('clear');
	$answer = factorial($value);
	echo "The factorial of $input is $answer" . PHP_EOL;
	$answer = 1;
	$input = readline('Enter a new n value, or enter x to exit.' . PHP_EOL);
}