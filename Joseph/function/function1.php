<?php

require('../library/php102T4.php');

do {
	$input = readline("How many seconds?(enter x to quit) " . PHP_EOL);
	echo time_convert($input);
} while ($input !== 'x');