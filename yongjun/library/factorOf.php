<?php

function factorOf($input)
{
	$i = 1;
	$list = [];
	while ($i <= $input) {
		if($input % $i == 0) $list[] = $i;
		$i++;
	}
	return $list;
}