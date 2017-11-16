<?php 

require('demo/demo3.php');

$option = readline('Option 1 day = ' . PHP_EOL . 'Option 2 month = ' . PHP_EOL . 'Option 3 year = ' . PHP_EOL);

if ($option != 0) {

	if ($option == 1){

		$days = readline('Gimme know the days = ' . PHP_EOL);
		echo day($days);

	} elseif ($option == 2) {

		$months = readline('Gimme know the month =' . PHP_EOL);
		echo month((int)$months);

	} elseif ($option == 3) {

		$years = readline('Gimme know the year = ' . PHP_EOL);
		echo year((int)$years);

	} elseif ($option == 0 || $option > 3){

		echo 'error' . PHP_EOL;
	}
}
