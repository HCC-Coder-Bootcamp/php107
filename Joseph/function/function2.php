<?php

require('../library/php102H5.php');

do {
	$input1 = readline("X1 :" . PHP_EOL);
	$input2 = readline("X2 :" . PHP_EOL);
	$input3 = readline("Y1 :" . PHP_EOL);
	$input4 = readline("Y2 :" . PHP_EOL);
	distance_between_two_point($input1, $input2, $input3, $input4);
} while ($input1 !== 'x' || $input2 !== 'x' || $input3 !== 'x' 
	 || $input4 !== 'x' || $input1 !== null || $input2 !== null 
	 || $input3 !== null || $input4 !== null);