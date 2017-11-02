<?php 
	
	function leap_year($input_year){

	$leap_yearB1 = $input_year % 100; 
	
	$leap_yearB2 = $leap_yearB1 / 4;
	
	$leap_yearB3 = $leap_yearB1 % 4;
	
	$leap_yearF1 = ($input_year - $leap_yearB1) / 100;
	
	$leap_yearF2 = $leap_yearF1 % 4;

	return [
		'leapF2' => $leap_yearF2,
		'leapB2' => $leap_yearB2,
		'leapB3' => $leap_yearB3,
	];

}