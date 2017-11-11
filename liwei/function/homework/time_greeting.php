<?php 

require('../library/time.php');
	
echo 'What time is it now?!!' . PHP_EOL;

$time = readline('Time' . PHP_EOL);

$greeting = time_greeting($time);

if ( $greeting['min'] > 60) {
	
	echo "What?!!";

}else{

	if ($time <= 1159 AND $time >= 0) {

	echo "Good Morning! It's ";
	echo $greeting['hour'] . " : " . $greeting['min'] . " AM!";

	} else if ($time >= 1200 AND $time <= 1759) {

	echo "Good Afternoon! It's ";
	echo $greeting['hour'] . " : " . $greeting['min'] . " PM!";

	} else if ($time >= 1800 AND $time <= 2359) {

	echo "Good Evening! It's ";
	echo $greeting['hour'] . " : " . $greeting['min'] . " PM!";

	}else{

	echo "What?!!";
	
	}

}