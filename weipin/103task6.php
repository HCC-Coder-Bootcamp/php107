<?php 

	require('library/103task6f.php');

	do{

		echo PHP_EOL . "Pay salary calculator" . PHP_EOL;

		$input = (int)readline( "Your work time: " . PHP_EOL );

		if ( $input != 'x' ) {
			
			$ans = pay($input);

			echo "Salary: " . $ans['salary'] . PHP_EOL . PHP_EOL;
		
		}
	
	} while ( $input != 'x' && $input != 'X' );

 ?>