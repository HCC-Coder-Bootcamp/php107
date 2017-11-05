<?php 

	require('library/102task7f.php');

	do {

		$input = readline( "Price: " . PHP_EOL );

		if ( $input != 'x' ) {

			$ans = gst($input);

			echo "GST: " . $ans['gst'] . PHP_EOL . "Total: " . $ans['total'] . PHP_EOL . PHP_EOL;

		}

	} while ($input != 'x');

 ?>