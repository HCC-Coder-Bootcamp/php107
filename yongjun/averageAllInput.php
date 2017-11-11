<?php
// average all input, x as exit

require('library/average.php');
echo system('clear');
$input = readline('Please enter a number : ');
$data = [
	'number' => 0,
	'sum' => 0,
	'average' => 0,
];

while ($input != 'x' && $input != 'X') {
	$data = average($data, $input);
	echo system('clear');
	$input = readline("The average of all inputs is " . $data['average'] . ", enter a number to continue to get average, enter x to exit" . PHP_EOL);
}