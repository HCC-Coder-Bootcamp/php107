<?php

function time_greeting($Time){

$TimeMin = $Time % 100;

$TimeProcess = $Time - $TimeMin - 100;

$TimeHour = (($TimeProcess / 100) % 12 ) + 1;

return [

	'min' => $TimeMin,
	'hour' => $TimeHour,

];

}