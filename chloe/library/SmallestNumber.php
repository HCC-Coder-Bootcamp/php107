<?php  

function 

	$arrayNO = [];

	for ($i=0; $i < 11; $i++) { 
		$arrayNO[] = readline('No: ');
		echo "Array of number: " . PHP_EOL;
		print_r($arrayNO);
	}

		$min = $arrayNO;
		foreach ($arrayNO as $index => $number) {
			if ($number < $min) {
					$min = $number;
				}	
			}