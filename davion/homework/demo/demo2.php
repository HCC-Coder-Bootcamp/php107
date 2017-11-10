<?php 
	
function leap_year($input2, $input3, $input4){

$current_year= readline('year');

	$input2 = $current_year % 400 == 0;
	$input3 = $current_year % 100 == 0 || $current_year % 4 != 0;
	$input4 = $current_year % 4 == 0;

 if ($current_year == $input3 ){
	echo 'is a normal year';
	return print_r($current_year);
} elseif ($current_year == $input4  || $input2) {
	echo 'is a leap year';
	return print_r($current_year);
}

