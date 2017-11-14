<?php 

require('../library/leap.php');

echo "Gimme a year, i'll let you know is it leap year or not" . PHP_EOL;

$input_year = readline('Year : ');

$leap_year_result = leap_year($input_year);

if ($leap_year_result['leap_check3'] == 0 AND $leap_year_result['leap_check1'] == 0 OR
	$leap_year_result['leap_check3'] != 0 AND $leap_year_result['leap_check1'] != 0 OR 
	$leap_year_result['leap_check3'] == 0 AND $leap_year_result['leap_check2'] == 0 ) {

	echo $input_year;
	echo " is a Leap Year";

}else{

	echo $input_year;
	echo " is Not a Leap Year";

}

