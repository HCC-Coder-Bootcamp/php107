<?php 

	require('library/103task5f.php');

	do {

		echo PHP_EOL ."Validator" . PHP_EOL;

		$inputClass = readline( "Class: " . PHP_EOL );

		if ( $inputClass != 'x' ) {

			$inputScore = (int)readline( "Score: " . PHP_EOL );

			if ( $inputScore != 'x' ) {

				$ans = check( $inputClass, $inputScore );

				echo $ans['message'] . PHP_EOL;

			}

		}

	} while ( $inputClass != 'x' && $inputScore != 'x' && $inputClass != 'X' && $inputScore != 'X' );

 ?>