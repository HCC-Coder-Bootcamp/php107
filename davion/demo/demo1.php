<?php

// php 102
// task 5 demo
// USD/MYR and MYR/USD rate conversion

function dollar($input_dollar, $input_ringgit) {

	if ($input_dollar || $input_ringgit != 0) {

		$rate = 4.19;
		$input_dollar = $input_dollar*$rate . PHP_EOL;
		$input_ringgit = $input_ringgit/$rate . PHP_EOL;
	}

	$money = [
		'dollar_as_dollar' => $input_dollar,
		'ringgit_as_ringgit' => $input_ringgit,
	];

echo (int)$money['dollar_as_dollar'] . PHP_EOL;
echo (int)$money['ringgit_as_ringgit'] . PHP_EOL;

}