<?php 

	require('library/102task4f.php');

	do {

		$input = readline("Input Seconds: " . PHP_EOL);

		if ($input != 'x') {
	
			$ans = convert($input);

		echo "Answer: " . (int)$ans['hour'] . "hour " . (int)$ans['minutes'] . "minutes " . (int)$ans['seconds'] . "seconds" . PHP_EOL . PHP_EOL;

		}

	} while ( $input !== 'x' )

 ?>