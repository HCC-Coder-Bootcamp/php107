<?php 
	
	require('../library/working.php');

	echo 'How long the time are you working this month?!!' . PHP_EOL;

	$work_time = readline('Hour' . PHP_EOL);

	$working = working_time($work_time);

	if ($work_time < 40 && $work_time > 0 ) {

		echo "Part Time, your salary is " . PHP_EOL;

		echo $working['part'];

	} else if ($work_time >= 40 && $work_time <= 672 ) {

		echo "Full Time, your salary is " . PHP_EOL;

		echo $working['full'];

	}else{

		echo "Bro you are out of working time! Take a break first";
	
	}

	