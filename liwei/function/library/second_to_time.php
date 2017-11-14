<?php

function second_to_time($sec){

$hour = (string)((int)($sec / 60 / 60));

$min = (string)((int)($sec / 60 % 60));

$second = (string)($sec % 60); 

$hour_result = $hour . " Hour ";

$min_result = $min . " minutes ";

$sec_result = $second . " second ";

return [
	'hour' => $hour_result,
	'min' => $min_result,
	'sec' => $sec_result,
];

}