<?php

function time_greeting($time){

$time_min = $time % 100;

$time_process = $time - $time_min - 100;

$time_hour = (($time_process / 100) % 12 ) + 1;

return [

	'min' => $time_min,
	'hour' => $time_hour,

];

}