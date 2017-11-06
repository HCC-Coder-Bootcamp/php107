<?php
//PHP106 Tasks1
//input 11 number in array,find the smallest number

require('library/f_echo.php');

function smallest($numbers) {
	$smallest = $numbers;
	foreach ($numbers as $key => $number) {
		
		if ($number < $smallest) {
			$smallest = $number;
		}
	}
	return $smallest;
}

f_echo ("Find the smallest number in 11 numbers.");

$numbers = [];
for ($i=0; $i < 11; $i++) {
	$numbers[] = readline('  Input number :');
}

$smallest = smallest($numbers);
 f_echo ("The smallest number is $smallest ");
 f_echo ("Thank you for using. ");