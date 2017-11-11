<?php

function second_to_time($sec){

$hour = (string)((int)($sec / 60 / 60));

$min = (string)((int)($sec / 60 % 60));

$second = (string)($sec % 60); 

$hourAns = $hour . " Hour ";

$minAns = $min . " minutes ";

$secAns = $second . " second ";

return [
	'hour' => $hourAns,
	'min' => $minAns,
	'sec' => $secAns,
];

}