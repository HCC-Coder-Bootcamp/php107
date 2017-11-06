<?php
//PHP102 Homework 2
//fixed deposit, interest rate calculate

require ('library/f_echo.php');

function total_amount($input_amount, $input_yrs) {

	$rate = 0.041;
	$total_amount = $input_amount * pow((1 + $rate), $input_yrs);
	return $total_amount;
}

function interest($input_amount,$total_amount) {
	
	$interest_gain = $total_amount - $input_amount;
	return $interest_gain;
}

f_echo ("Fixed deposit calculater");
$input_amount = readline('  Amount of deposit :RM ');
$input_yrs = readline('  Years of deposit : ');

	$total_amount = total_amount($input_amount, $input_yrs);
	$interest_gain = interest($input_amount,$total_amount);

	f_echo ('Interest Gain Amount :RM ' . number_format($interest_gain, 2 , '.' , ','));
	f_echo ('Total amount of deposit :RM ' .  number_format($total_amount, 2 , '.' , ','));
	f_echo ("Thank you for using. ");