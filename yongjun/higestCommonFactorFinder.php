<?php
// reverse 5 number

require('library/hcf.php');
echo system('clear');
echo 'I will find the hcf of your inputs' . PHP_EOL;
$input1 = readline('1st input = ');
$input2 = readline('2nd input = ');

while ($input1 != 'x' && $input1 != 'X' && $input2 != 'x' && $input2 != 'X') {
	$HCF = hcf($input1, $input2);
	echo "The HCF of $input1 and $input2 is $HCF" . PHP_EOL;
	echo 'Continue enter your input or enter x to exit' . PHP_EOL;
	$input1 = readline('1st input = ');
	if ($input1 == 'x' || $input1 == 'X')break;
	$input2 = readline('2nd input = ');
}
