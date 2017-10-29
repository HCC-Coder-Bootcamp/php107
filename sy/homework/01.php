<?php
//PHP102 task5.a
//convert MYR to USD


function rate_conversion($input_amount)
{
	$rate = 4.19;
	$result = $input_amount * $rate;

	return $result;
}


$input_amount = readline('Amount :RM ');

$result = rate_conversion($input_amount);


echo "USD " . $result;