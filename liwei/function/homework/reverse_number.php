<?php 
	require('../library/reverse.php');

	$number = readline('input 5 number to reverse : ');

	$reverse_result = reverse($number);

	echo (int)$reverse_result['number1'] 
			. $reverse_result['number2'] 
			. $reverse_result['number3'] 
			. $reverse_result['number4'] 
			. $reverse_result['number5'].PHP_EOL;