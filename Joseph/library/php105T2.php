<?php

function factorial($num)
{
	if ($num !== 'x') {
		$fact = 1;

		if ($num > 0) {
		 	for ($i = 1; $i <= $num; $i++) { 
				$fact = $fact * $i;
			}
			$msg = "The factorial of $num is: $fact";
		} else {
			$msg = "The number is out of range!!";
		}
	} else {
		$msg = "";
	}
	return $msg . PHP_EOL . PHP_EOL;
}