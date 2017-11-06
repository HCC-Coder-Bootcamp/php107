<?php
//PHP102 task5.a
//convert MYR to USD

require('library/f_echo.php');

function rate_conversion($input_amount) {
	$rate = 4.19;
	$result = $input_amount * $rate;

	return $result;
}

f_echo ("Welcome to MYR-USD converter");

$input_amount = readline('  You amount :RM ');
$result = rate_conversion($input_amount);

f_echo ("There is " . $result . " USD. ");
f_echo ("Thank you for using.");