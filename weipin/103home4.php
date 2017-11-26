<?php 

	require('library/103home4f.php');

	do {

		echo PHP_EOL . "Leap year detector" . PHP_EOL;

		$input = (int)readline( "Year: " . PHP_EOL );

		if ( $input != 'x' ) {
		
			$ans = detect($input);

			echo $ans['detect'] . PHP_EOL . PHP_EOL;
	
		}

	} while ( $input != 'x' );

 ?>