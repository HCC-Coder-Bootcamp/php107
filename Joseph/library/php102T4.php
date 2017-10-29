<?php

function time_convert($total_time)
{
	if ($total_time !== 'x') {
		$seconds = $total_time;

		$leftSeconds  = (int)$seconds % 60;
		$totalSeconds = (int)$seconds - $leftSeconds;

		$leftMinutes  = (int)$totalSeconds % 3600;
		$totalMinutes = (int)$leftMinutes / 60;

		$hour = (int)($totalSeconds / 3600);

		echo "There is $hour hour $totalMinutes minutes and $leftSeconds seconds." . PHP_EOL;
	} else {
		echo "";
	}
}