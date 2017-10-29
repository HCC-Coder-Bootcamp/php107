<?php
//PHP106 Tasks1
//input 11 number in array,find the smallest number

function smallest($numbers) {

$smallest = $numbers;
foreach ($numbers as $key => $number) {
		
	if ($number < $smallest) {
		$smallest = $number;
	}
}
	return($smallest);
}


$numbers = [];

for ($i=0; $i < 11; $i++) {

	$numbers[] = readline('Input number :');
}

	$smallest = smallest($numbers);

	echo "The smallest number is $smallest " . PHP_EOL;
