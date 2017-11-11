<?php

function isPrimeNumber($input)
{
	$i = 1;
	if ($input == 1) {
		return false;
	}
	while ($i < $input - 1) {
		$i++;
		if ($input % $i == 0) {
			return false;
		}
	}
	return true;
}