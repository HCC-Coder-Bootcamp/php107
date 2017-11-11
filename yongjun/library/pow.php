<?php

function power($base, $index)
{
	$ans = 1;
	if ($index > 0) {
		for ($i=0; $i < $index; $i++) { 
			$ans *= $base;
		}
	} else {
		for ($i=0; $i > $index; $i--) { 
			$ans /= $base;
		}
	}
	return $ans;
}