<?php

function leap_year_calculator($current_year)
{
	if ($current_year !== 'x') {
		$year = 0;
		$return_year = [];

		while ($year <= $current_year) {
			
			if ($year % 400 == 0) {
				$return_year[] = $year;
			} else if ($year % 100 == 0) {

			} else if ($year % 4 == 0) {
				$return_year[] = $year;
			}
			$year++;
		}
	} else {

	}
	print_r($return_year);
}