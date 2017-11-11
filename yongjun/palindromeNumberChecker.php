<?php
// check if input is Palindrome number (mirror)

require('library/isPalindrome.php');
echo system('clear');
echo 'I will check if your input is Palindrome number' . PHP_EOL;
$input = readline('input = ');

while ($input != 'x' && $input != 'X') {
	echo system('clear');
	$status = isPalindrome($input);
	$status = $status ? '' : ' not';
	echo "$input, is$status a Palindrome number" . PHP_EOL;
	$input = readline("Try another input, or enter x to exit" . PHP_EOL);
}