<?php

function time_greeting($time){

$internation_time_change_min = $time % 100;

$time_process_to_hour = $time - $time_min - 100;

$internation_time_change_hour = (($time_process_to_hour / 100) % 12 ) + 1;

return [

	'min' => $internation_time_change_min,
	'hour' => $internation_time_change_hour,

];

}