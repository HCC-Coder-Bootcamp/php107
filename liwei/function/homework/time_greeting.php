<?php 

require('../library/time.php');
	
echo 'What time is it now?!!' . PHP_EOL;

$Time = readline('Time' . PHP_EOL);

$greeting = time_greeting($Time);

if ( $greeting['min'] > 60) {
	
	echo "What?!!";

}else{

	if ($Time <= 1159 AND $Time >= 0) {

	echo "Good Morning! It's ";
	echo $greeting['hour'] . " : " . $greeting['min'] . " AM!";

	} else if ($Time >= 1200 AND $Time <= 1759) {

	echo "Good Afternoon! It's ";
	echo $greeting['hour'] . " : " . $greeting['min'] . " PM!";

	} else if ($Time >= 1800 AND $Time <= 2359) {

	echo "Good Evening! It's ";
	echo $greeting['hour'] . " : " . $greeting['min'] . " PM!";

	}else{

	echo "What?!!";
	
	}

}