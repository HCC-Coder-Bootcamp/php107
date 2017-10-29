<?php
//PHP102 Homework 2
//fixed deposit, interest rate calculate

function interest($input_amount, $input_yrs) {

	$rate = 0.041;

	$interest_gain = $input_amount * pow((1 + $rate), $input_yrs);

		return($interest_gain);
}

function total_amount($input_amount,$interest_gain) {

	$total_amount = $input_amount + $interest_gain;

	return($total_amount);
}

function f_echo($str) {
	echo PHP_EOL;
	echo str_pad(' +', 40, '+') . PHP_EOL;
	echo str_pad("+ $str", 40, ' ') . '+' . PHP_EOL;
	echo str_pad(' +', 40, '+') . PHP_EOL;
	echo PHP_EOL;

}

f_echo("Fixed deposit calculater");
$input_amount = readline('Amount of deposit :RM ');
$input_yrs = readline('Years of deposit : ');

	$interest_gain = interest($input_amount, $input_yrs);

	f_echo('Interest Gain Amount :RM ' . number_format($interest_gain, 2 , '.' , ','));

	$total_amount = total_amount($input_amount, $interest_gain);

	f_echo('Total amount of deposit :RM ' .  number_format($total_amount, 2 , '.' , ','));

	f_echo("Thank you for using. ");