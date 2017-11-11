<?php

require('../library/php105T3.php');

do {
	$currentYear = readline('What is the current year?(enter x to quit)' . PHP_EOL);
	if ($currentYear !== 'x') leap_year_calculator($currentYear) . PHP_EOL;
} while ($currentYear !== 'x');