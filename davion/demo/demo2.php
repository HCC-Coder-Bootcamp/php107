<?php 
	
function leap_year($current_years) {

	if ($current_years != 0) {

		$leap_years = $current_years % 400 == 0;
		$normal_years = $current_years % 100 == 0 || $current_years % 4 != 0;
		$leap_years = $current_years % 4 == 0;

		if ($current_years == $normal_years ) {
			echo 'is a normal year';
			return print_r($current_years);

		} elseif ($current_years == $leap_years) {
			echo 'is a leap year';
			return print_r($current_years);
		}
	}
} 


