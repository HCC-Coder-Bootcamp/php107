<?php  

function SmallestNumber($arrayNo)
{

	$min = $arrayNo[0];
	foreach ($arrayNo as $index => $number) {
		if ($number < $min) {
			$min = $number;
		}	
	}
	return $min;
}
	