<?php

function distance_between_two_point($x1, $y1, $x2, $y2)
{	
	if ($x1 == null || $y1 == null 
	 || $x2 == null || $y2 == null) {
		$msg = "";
	} else if ($x1 !== 'x' || $y1 !== 'x' 
	|| $x2 !== 'x' || $y2 !== 'x') {
		$X1 = $x1;
		$Y1 = $y1;
		$X2 = $x2;
		$Y2 = $y2;

		$theDistance = (float)sqrt(pow(($X2 - $X1), 2) + pow(($Y2 - $Y1), 2));

		$msg = "The distance is $theDistance.";
	} else {
		$msg = "";
	}
	return $msg . PHP_EOL . PHP_EOL;
}