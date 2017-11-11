<?php
// reverse 5 number

require('library/reverse.php');
echo system('clear');
echo 'I will reverse the number you input' . PHP_EOL;
$input = readline('input = ');

while ($input != 'x' && $input != 'X') {
	$forward = $input;
	$reverse = reverse($input);
	echo "The reverse number of $forward, is $reverse" . PHP_EOL;
	$input = readline("Try another input, or enter x to exit" . PHP_EOL);
}