<?php 
	
	require('../library/working.php');

	echo 'How long the time are you working this month?!!' . PHP_EOL;

	$work_time_input = readline('Hour' . PHP_EOL);

	$working_check_result = working_time_salary($work_time);

	if ($work_time_input < 40 && $work_time_input > 0 ) {

		echo "Part Time, your salary is " . PHP_EOL;

		echo $working_check_result['part'];

	} else if ($work_time_input >= 40 && $work_time_input <= 672 ) {

		echo "Full Time, your salary is " . PHP_EOL;

		echo $working_check_result['full'];

	}else{

		echo "Bro you are out of working time! Take a break first";
	
	}

	