<?php

function smallest_number($array){

$smallest = null;
foreach ($array as $index => $number) {
	if ($number > $smallest) {
		$smallest = $number;
	}	
}
foreach ($array as $index => $number) {
if ($smallest > $number) {
		$smallest = $number;
	}
}

return $smallest;

}