<?php
// power function, pow(a,n)

require('library/pow.php');
echo system('clear');
echo 'I will help you to calculate the nth power of your input number.' . PHP_EOL;

$base = readline('input number = ');

while ($base != 'x' && $base != 'X') {
	$index = readline('n = ');
	echo system('clear');
	$ans = power($base, $index);

	echo "The $index th power of $base is $ans" . PHP_EOL;
	$base = readline('Try a new input number, or x to exit' . PHP_EOL . 'input number (or x) = ');
}