<?php

require('demo/demo5.php');

$number_input = readline('Number = ' . PHP_EOL);


if ($number_input = $number_input) {

	do {

		echo average($number_input);

		if ($number_input = $number_input) {

			$option = readline('Option 1 continue = ' . PHP_EOL . 'Option 2 exit = ' . PHP_EOL);

			if ($option == 2) {

				$exit = exit;

			}

		}		

	} 
	
	while ($number_input = readline('Number = ' . PHP_EOL));

}



