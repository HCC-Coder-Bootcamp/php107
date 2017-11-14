<?php

// php 102
// task 5 demo
// USD/MYR and MYR/USD rate conversion

function dollar($return) {

	$return = readline('usd = ');
	$rate = 4.19;
	$result = $return*$rate . PHP_EOL;
	return print_r($result);

}

function myr($returns) {

	$returns = readline('myr = ');
	$rate = 4.19;
	$results = $returns/$rate . PHP_EOL;
	return print_r((int)$results);

}

