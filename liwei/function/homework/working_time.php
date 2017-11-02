<?php 
	
	require('../library/working.php');

	echo 'How long the time are you working this month?!!' . PHP_EOL;

	$WorkingTime = readline('Hour' . PHP_EOL);

	$working = working_time($WorkingTime);

	if ($WorkingTime < 40 && $WorkingTime > 0 ) {

		echo "Part Time, your salary is " . PHP_EOL;

		echo $working['part'];

	} else if ($WorkingTime >= 40 && $WorkingTime <= 672 ) {

		echo "Full Time, your salary is " . PHP_EOL;

		echo $working['full'];

	}else{

		echo "Bro you are out of working time! Take a break first";
	
	}

	