<?php
// reverse 5 number

require('library/lcm.php');
echo system('clear');
echo 'I will find the lcm of your inputs' . PHP_EOL;
$input1 = readline('1st input = ');
$input2 = readline('2nd input = ');

while ($input1 != 'x' && $input1 != 'X' && $input2 != 'x' && $input2 != 'X') {
	$LCM = lcm($input1, $input2);
	echo "The LCM of $input1 and $input2 is $LCM" . PHP_EOL;
	echo 'Continue enter your input or enter x to exit' . PHP_EOL;
	$input1 = readline('1st input = ');
	if ($input1 == 'x' || $input1 == 'X')break;
	$input2 = readline('2nd input = ');
}
