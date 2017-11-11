<?php

require('../library/php102T7.php');

do {
	$input = readline('How much do you spend? (enter x to quit) MYR' . PHP_EOL);
	echo gst_calculation($input);
} while ($input !== 'x');