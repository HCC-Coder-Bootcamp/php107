<?php

function smallest_number($array){

$smallest = null;

//////get largest value
foreach ($array as $index => $number) {
	if  ($number > $smallest) {
		 $smallest = $number;
	}	
}

//////get smallest value
foreach ($array as $index => $number) {
	if  ($smallest > $number) {
		 $smallest = $number;
	}
}

return $smallest;

}