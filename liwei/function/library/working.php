<?php
	
	function working_time($WorkingTime){ 

	$PartTime= $WorkingTime*10;

	$FullTime= (($WorkingTime-40)*40)+2000;

	return [
		'full' => $FullTime,
		'part' => $PartTime,
	];
/////
	

}