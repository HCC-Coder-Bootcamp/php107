<?php
//PHP102 Tasks 3
//Convert hour and minutes to total minutes

function hrs_min_convert($input_hrs, $input_min) {

	$hrs_to_min = $input_hrs * 60;
	$total_min = $hrs_to_min + $input_min;

	$return = $total_min;
	return($return);
}

function f_echo($str) {
	echo PHP_EOL;
	echo str_pad(' +', 30, '+') . PHP_EOL;
	echo str_pad("+ $str", 30, ' ') . '+' . PHP_EOL;
	echo str_pad(' +', 30, '+') . PHP_EOL;
	echo PHP_EOL;

}

$input_hrs = readline('Hours :');
$input_min = readline('Minutes :');

	$return =hrs_min_convert($input_hrs,$input_min);

	f_echo("There is $return minutes. ");