<?php

function number($input, $result) {

	if ($input != 'X') {
		echo $input;
		$result= 1;
		$number = $input;
		
		while ($number > 0) {
		$result= ($number + $result);
			echo $number-- . PHP_EOL;
		}
		echo 'total ' . $result. PHP_EOL;
	}




	$final = $result/$input;
	echo 'average ' . (int)$final . PHP_EOL;

	$exit = 'X';
	$exit = readline('Exit? ' . 'Select X' . PHP_EOL);

	if ($exit != 'X') {
		echo 'hi';
	} elseif ($exit == 'X') {
		echo 'successfully back';
	}
}
