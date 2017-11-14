<?php 

function day($days) {

	$days = $days % 365 % 30;
    	return print_r($days) . PHP_EOL;
}

function month($months) {

	$months = ($months % 365 / 30);
    	return print_r((int)$months) . PHP_EOL;
}

function year($years) {
	
	$years = ($years / 365);
	return print_r((int)$years) . PHP_EOL;
}

