<?php

require('../library/php103T3.php');

$userName  = readline('What is your name?' . PHP_EOL);

do {
	$timeInput = readline('Please enter the international time.(enter x to quit)' . PHP_EOL);
	echo greeting_machine($userName, $timeInput);
} while ($timeInput !== 'x');