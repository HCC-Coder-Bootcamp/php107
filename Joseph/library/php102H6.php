<?php

function reverse_five_digits($inputNum)
{
	if ($inputNum !== 'x') {
		$tenThousand  = ($inputNum % 10) * 10000;
		$thousand     = (($inputNum / 10) % 10) * 1000;
		$hundred      = (($inputNum / 100) % 10) * 100;
		$tens         = (($inputNum / 1000) % 10) * 10;
		$one          = ($inputNum / 10000) % 10;

		$answer = $tenThousand + $thousand + $hundred + $tens + $one;

		$msg = "Here is your answer $answer.";
	} else {
		$msg = "";
	}
	return $msg . PHP_EOL . PHP_EOL;
}