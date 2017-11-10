<?php 

	require('library/102task3f.php');

	do {

		echo PHP_EOL . "Convert hour to minute" . PHP_EOL ;

		$inputHour = (int)readline("Input Hour: " . PHP_EOL);
	
		if ( $inputHour != 'x' ) {
	
			$inputMin = (int)readline("Input Minutes: " . PHP_EOL);

			if ( $inputMin != 'x' ) {
	
				$ans = convert($inputHour, $inputMin);
	
				echo "Answer: " . $ans['ans'] . " Minutes" . PHP_EOL . PHP_EOL;
	
			}
	
		}
	
	} while ( $inputHour != 'x' && $inputMin != 'x' && $inputHour != 'X' && $inputMin != 'X' );


 ?>