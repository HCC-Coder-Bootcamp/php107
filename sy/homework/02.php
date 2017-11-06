<?php
//PHP105 Homework4

require('library/f_echo.php');

function reverse_digits($number) {

	$digits = $number;
	$digit = 0;

	do {
		$digit = ($digit + ($digits % 10)) * 10;
		$digits = ($digits - ($digits % 10)) / 10;
		
	}while ($digits);

	return $digit /= 10;
}

f_echo ('Reverst digits.');
$number = readline('  Enter you digits : ');
$result = reverse_digits($number);

f_echo ("Reverst digits :" . $result);
f_echo ("Thank you for using. ");