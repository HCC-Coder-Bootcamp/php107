<?php 	

require ('library/SmallestNumber.php');

$arrayNO = [];

for ($i=0; $i < 11; $i++) { 
	$arrayNO[] = readline('No: ');
	echo "Array of number: " . PHP_EOL;
	print_r($arrayNO);
}

$minimum = SmallestNumber($arrayNO);
echo $minimum;
