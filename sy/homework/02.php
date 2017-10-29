<?php
//PHP105 Homework4

function reverse_digits($number) {

	$digits = $number;
	$digit = 0;

	do {
		
		$digit = ($digit + ($digits % 10)) * 10;
		$digits = ($digits - ($digits % 10)) / 10;
		
	}while ($digits);

		return $digit /= 10;
		
}

$number = readline('You number : ');

$result = reverse_digits($number);

	echo $result;