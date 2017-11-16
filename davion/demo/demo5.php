<?php

function average($number_input) {

	if ($number_input > 0) {

		if ($number_input > 0) {

			$total = 0;
			$number = $number_input;

		}

		while ($number > 0) {

			$total = $number + $total;
			echo $number-- . PHP_EOL;

		}
		
		echo 'total ' . $total . PHP_EOL;

	}

$average = $total / $number_input;
echo 'average ' . (int)$average . PHP_EOL;

}


