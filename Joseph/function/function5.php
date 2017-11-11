<?php

require('../library/php102H6.php');

do {
	$input = readline('Please enter 5 digits number.(enter x to quit)' . PHP_EOL);
	echo reverse_five_digits($input);
} while ($input !== 'x');