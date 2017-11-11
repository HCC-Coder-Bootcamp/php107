<?php
// n number of fibonacci series

require('library/fibonacci.php');
echo system('clear');
echo 'I will list down the fibonacci number before n' . PHP_EOL;
$input = readline('n = ');

while ($input != 'x' && $input != 'X') {
	echo system('clear');
	$list = fibonacci($input);
	foreach ($list as $key => $value) {
		echo $value . PHP_EOL;
	}
	$input = readline("Try another n, or enter x to exit" . PHP_EOL);
}