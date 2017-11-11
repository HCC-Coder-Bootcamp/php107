<?php

require('../library/php105T2.php');

do {
	$input = readline('Please enter a number, and I will factorial it for U.(enter x to quit)' . PHP_EOL . PHP_EOL);
	echo factorial($input);
} while ($input !== 'x');