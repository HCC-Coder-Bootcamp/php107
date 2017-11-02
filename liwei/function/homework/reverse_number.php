<?php 
	require('../library/reverse.php');

	$number = readline('input 5 number to reverse : ');

	$result = reverse($number);

	echo (int)$result['number1'] 
			. $result['number2'] 
			. $result['number3'] 
			. $result['number4'] 
			. $result['number5'].PHP_EOL;