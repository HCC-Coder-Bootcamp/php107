<?php
//PHP 103 Tasks 4
//Redar distance detector
/* Accept input x and y of enemy position.
	Assume mine at input x and y.
	show warning if enemy is close to mine not more than 10.
	beep if the distance is close to 2.
*/

require('library/f_echo.php');

function enemy_point ($enemy_point_x, $enemy_point_y) {
	$enemy_point = sqrt(pow($enemy_point_x,2) + pow($enemy_point_y,2));
	return $enemy_point;
}

function mine_point ($mine_point_x, $mine_point_y) {
	$mine_point = sqrt(pow ($mine_point_x,2) + pow($mine_point_y, 2));
	return $mine_point;
}

function distance_detec ($mine_point, $enemy_point) {
	$distance = $mine_point - $enemy_point;
	return $distance;
}

$enemy_point_x = readline('  Enter enemy point X : ');
$enemy_point_y = readline('  Enter enemy point Y : ');
$mine_point_x = readline('  Enter mine point X : ');
$mine_point_y = readline('  Enter mine point Y : ');

	$enemy_point = enemy_point($enemy_point_x, $enemy_point_y);
	$mine_point = mine_point($mine_point_x, $mine_point_y);
	$distance = distance_detec($mine_point, $enemy_point);

	if ($distance <= 2 || $distance <= -2) {
		f_echo ("You be attacked!!! " . "\x07" . "\x07" . "\x07");
	} else if ($distance <= 10 || $distance <= -10) {
		f_echo ("Enemy is coming! ");
	} else {
		f_echo ("Searching...");
	}