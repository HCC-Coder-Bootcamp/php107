<?php 

	function validator($class)
	{

		if ($class == 'a') {
			if ($score >= 80) {
				$ans = 'passed';
			}else {
				$ans = 'falied';
			}
		} else if ($class == 'b') {
			if ($score >= 70) {
				$ans = 'passed';
			} else {
				$ans = 'falied';
			}
		} else if ($class == 'c') {
			if ($score >= 60) {
				$ans = 'passed';
			} else {
				$ans = 'falied';
			}
		} else if ($class == 'd') {
			if ($score >= 50) {
				$ans = 'passed';
			} else {
				$ans = 'falied';
			}
		} else {
			$ans = 'ERROR';
			}
		echo "$ans";
	}