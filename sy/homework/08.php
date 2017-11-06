<?php
//PHP103 Homework 4
//Show leap year form 0 to an input

require ('library/f_echo.php');

function leapYearFinder($inputYrs) {
	if ($inputYrs % 4 == 0) {
		if ($inputYrs % 100 == 0 && $inputYrs % 400 !== 0) {
			$result = " normal year.";
		}else {
			$result = "leap year. ";
		}
	}else {
		$result = "normal year. ";
	}
	return $result;
}

f_echo ("Welcome to leap year finder.  ");

$inputYrs = readline("  Enter seaching year : ");
$result = leapYearFinder($inputYrs);
f_echo ('This is ' . $result);
f_echo ('Thanks for using. ');