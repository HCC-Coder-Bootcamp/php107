<?php

function factorial($input)
{
	$answer = 1;
	if ($input > 0) {
		while ($input > 1) {
			$answer *= $input--;
		}
	}

	return $answer;
}
