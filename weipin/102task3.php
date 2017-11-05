<?php 

	require('library/102task3f.php');

	do {
		$inputHour = (int)readline("Input Hour: " . PHP_EOL);
	
		if ( $inputHour != 'x' ) {
	
			$inputMin = (int)readline("Input Minutes: " . PHP_EOL);
	
			$ans = convert($inputHour, $inputMin);
	
			echo "Answer: " . $ans['ans'] . " Minutes" . PHP_EOL . PHP_EOL;
	
		}
	
	} while ( $inputHour != 'x' );


 ?>