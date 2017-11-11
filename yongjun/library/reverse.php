<?php

function reverse($input)
{
	$reverse = 0;
	echo system('clear');
	do {
		$reverse = $reverse * 10 + $input % 10;
		$input = ($input - $input % 10) / 10;
	} while ($input);

	return $reverse;
}