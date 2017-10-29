<?php

function distance_between_two_point($input1, $input2, $input3, $input4)
{	
	if ($input1 == null || $input2 == null 
	 || $input3 == null || $input4 == null) {
		echo "";
	} else if ($input1 !== 'x' || $input2 !== 'x' 
	|| $input3 !== 'x' || $input4 !== 'x') {
		$X1 = $input1;
		$Y1 = $input2;
		$X2 = $input3;
		$Y2 = $input4;

		$theDistance = (float)sqrt(pow(($X2 - $X1), 2) + pow(($Y2 - $Y1), 2));

		echo "The distance is $theDistance." . PHP_EOL . PHP_EOL;
	} else {
		echo "";
	}
}