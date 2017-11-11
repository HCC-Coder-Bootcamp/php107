<?php

require('../library/php103H5.php');

echo "Hi user! This is a electricity bill calculator." . PHP_EOL .
"Let me know how many unit do you spend a month, 
and I will let you know the bill." . PHP_EOL . PHP_EOL;

do {
	$inputUnit = readline('How many unit do you spend for this month?(enter x to quit)' . PHP_EOL);
	echo electricity_bill_calculator($inputUnit);
} while ($inputUnit !== 'x');