<?php
	
	function working_time_salary($work_time_input){ 

	$part_time_salary= $work_time_input*10;

	$full_time_salary= (($work_time_input-40)*40)+2000;

	return [
		'full' => $full_time_salary,
		'part' => $part_time_salary,
	];
/////
	

}