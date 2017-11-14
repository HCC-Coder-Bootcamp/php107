<?php 
	
	function leap_year($input_year){

	$separate_year = $input_year % 100; 
	
	$leap_year_check1 = $separate_year / 4;
	
	$leap_year_check2 = $separate_year % 4;
	
	$separate_year_first_two = ($input_year - $separate_year) / 100;
	
	$leap_year_check3 = $separate_year_first_two % 4;

	return [
		'leap_check3' => $leap_year_check3,
		'leap_check1' => $leap_year_check1,
		'leap_check2' => $leap_year_check2,
	];

}