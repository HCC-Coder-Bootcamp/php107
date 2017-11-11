<?php

function isPalindrome($input)
{
	$forward = $input;
	$reverse = 0;
	do {
		$reverse = $reverse * 10 + $input % 10;
		$input = ($input - $input % 10) / 10;
	} while ($input);

	if ($reverse == $forward)return true;
	return false;
}