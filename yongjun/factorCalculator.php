<?php
// all factor of an input

require('library/factorOf.php');
echo system('clear');
echo 'I will list the factor(s) of your input, n' . PHP_EOL;

$input = readline('n = ');

while ($input != 'x' && $input != 'X') {
	echo system('clear');
	echo "The factor(s) of $input is/are ";
	$list = factorOf($input);
	foreach ($list as $key => $value) {
		echo $value . ' ';
	}
	echo PHP_EOL;
	$input = readline('Enter a new n value, or enter x to exit.' . PHP_EOL);
}