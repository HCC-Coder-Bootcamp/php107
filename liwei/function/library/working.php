<?php
	
	function working_time($work_time){ 

	$part_time= $work_time*10;

	$full_time= (($work_time-40)*40)+2000;

	return [
		'full' => $full_time,
		'part' => $part_time,
	];
/////
	

}