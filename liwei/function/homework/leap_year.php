<?php 

require('../library/leap.php');

echo "Gimme a year, i'll let you know is it leap year or not" . PHP_EOL;

$input_year = readline('Year : ');

$leap_function = leap_year($input_year);

if ($leap_function['leapF2'] == 0 AND $leap_function['leapB2'] == 0 OR
	$leap_function['leapF2'] != 0 AND $leap_function['leapB2'] != 0 OR 
	$leap_function['leapF2'] == 0 AND $leap_function['leapB3'] == 0 ) {

	echo $input_year;
	echo " is a Leap Year";

}else{

	echo $input_year;
	echo " is Not a Leap Year";

}

