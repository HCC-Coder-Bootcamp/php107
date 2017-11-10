<?php 

	require('library/103home2f.php');

	do {

		echo PHP_EOL . "Find the smallest number" . PHP_EOL ;

		$number1 = (int)readline( "Number1: " . PHP_EOL );

		if ( $number1 != 'x' ) {
			
			$number2 = (int)readline( "Number2: " . PHP_EOL );

			if ($number2 != 'x') {
			
				$number3 = (int)readline( "Number3: " . PHP_EOL );

				if ($number3 != 'x') {

					$ans = smallest( $number1, $number2, $number3 );

					echo "The smallest number is " . $ans['smallest'] . PHP_EOL . PHP_EOL;
			
				}
	
			}
	
		}
		
	} while ( $number1 != 'x' && $number2 != 'x' && $number3 != 'x' && $number1 != 'X' && $number2 != 'X' && $number3 != 'X' ) ;		

 ?>