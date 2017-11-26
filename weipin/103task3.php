<?php 

	require('library/103task3f.php');

	do{

		echo PHP_EOL . "Find the largest 3 numbers" . PHP_EOL;

		$number1 = readline( "Number1: " . PHP_EOL );

		if ( $number1 != 'x' ) {
	
			$number2 = readline( "Number2: " . PHP_EOL );

			if ( $number2 != 'x' ) {

				$number3 = readline( "Number3: " . PHP_EOL );

				if ( $number3 != 'x' ) {
			
					$ans = find( $number1, $number2, $number3 );
			
					echo $ans['message'] . PHP_EOL . PHP_EOL;
			
				}
	
			}

		}


	} while ( $number1 != 'x' && $number2 != 'x' && $number3 != 'x' )

 ?>