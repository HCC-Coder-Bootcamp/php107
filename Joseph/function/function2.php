<?php

require('../library/php102H5.php');

do {
	$input1 = readline("X1 :(enter x to quit)" . PHP_EOL);
	$input2 = readline("Y1 :(enter x to quit)" . PHP_EOL);
	$input3 = readline("X2 :(enter x to quit)" . PHP_EOL);
	$input4 = readline("Y2 :(enter x to quit)" . PHP_EOL);
	echo distance_between_two_point($input1, $input2, $input3, $input4);
} while ($input1 !== 'x' || $input2 !== 'x' || $input3 !== 'x' 
	|| $input4 !== 'x');