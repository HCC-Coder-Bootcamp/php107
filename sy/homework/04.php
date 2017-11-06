<?php
//PHP102 Tasks 3
//Convert hour and minutes to total minutes

require ('library/f_echo.php');

function hrs_min_convert($input_hrs, $input_min) {

	$hrs_to_min = $input_hrs * 60;
	$total_min = $hrs_to_min + $input_min;

	$return = $total_min;
	return $return;
}
f_echo ("Enter hour and minutes convert to minutes. ");

$input_hrs = readline('  Hours :');
$input_min = readline('  Minutes :');

	$return =hrs_min_convert($input_hrs,$input_min);
	f_echo ("There is $return minutes. ");
	f_echo ("Thanks for using. ");