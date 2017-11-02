<?php 

function reverse($number){

$number1 = (int)(((($number % 10000) % 1000) % 100) % 10);

$number2 = (int)(((($number % 10000) % 1000) % 100) / 10);

$number3 = (int)((($number % 10000) % 1000) / 100);

$number4 = (int)(($number % 10000) / 1000);

$number5 = (int)($number / 10000);

return [
	'number1' => $number1,
	'number2' => $number2,
	'number3' => $number3,
	'number4' => $number4,
	'number5' => $number5,
];
}