<?php 

	require('library/103task2f.php');

	do {
		
		echo PHP_EOL . "Number categoriser" . PHP_EOL;
		
		$input = readline('Input a number: ' . PHP_EOL);
		
		if ( $input != 'x' ) {
			
			if ( $input == 0 ) {
				echo "Reject" . PHP_EOL . PHP_EOL;
			}

			$ans = check($input);

			echo $ans['message'] . PHP_EOL;

			$ans1 = check1($input);
			
			echo $ans1['message1'] . PHP_EOL . PHP_EOL;
			
		}

	} while ( $input != 'x' );

 ?>