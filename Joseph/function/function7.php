<?php

require('../library/php103T8.php');

$workerName = readline('What is your name, worker?(enter x to quit)' . PHP_EOL);
echo "Hi $workerName! Is time to get your salary!" . PHP_EOL;

do {
	$workingHours = readline('In a week, how many hours do you work?(enter x to quit)' . PHP_EOL);
	echo pay_calculator($workerName, $workingHours);
} while ($workingHours !== 'x');