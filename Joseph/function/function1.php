<?php

require('../library/php102T4.php');

do {
	time_convert($input = readline("How many seconds? " . PHP_EOL));
} while ($input !== 'x');