<?php

require('../library/php102H4.php');

do {
	$input = readline('What is your amount?(enter x to quit) RM' . PHP_EOL);
	echo money_note_calculation($input);
} while ($input !== 'x');