<?php

function fibonacci($input)
{
	$a = 0;
	$b = 0;
	$now = 1;
	$list = [];
	while ($now <= $input) {
		$list[] = $now;
		$a = $b;
		$b = $now;
		$now = $a + $b;
	}

	return $list;
}