<?php

function greeting_machine($userName, $timeInput)
{
	if ($timeInput !== 'x') {
		$remainingMinutes = $timeInput % 100;

		if ($remainingMinutes >= 60 || $timeInput < 0 ||
			$timeInput >= 2400) {
			$greeting = "ERROR!" . PHP_EOL . PHP_EOL;
		} else {
			
			if ($timeInput < 0600) {
				$greeting = "Please have a rest, $userName" . PHP_EOL . PHP_EOL;
			} else if ($timeInput < 1200) {
				$greeting = "Good Morning, $userName" . PHP_EOL . PHP_EOL;
			} else if ($timeInput < 1600) {
				$greeting = "Good Afternoon, $userName" . PHP_EOL . PHP_EOL;
			} else if ($timeInput < 2200) {
				$greeting = "Good Evening, $userName" . PHP_EOL . PHP_EOL;
			} else
				$greeting = "Good Night, $userName" . PHP_EOL . PHP_EOL;
		}
	} else {
		$greeting = "";
	}
	return $greeting;
}