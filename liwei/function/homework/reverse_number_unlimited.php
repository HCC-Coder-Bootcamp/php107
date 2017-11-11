<?php 
	require('../library/reverse_number.php');
	
	$input = readline("Palindrome Checker : ");

	$palindrome_number = reverse_numb($input);

	if ($palindrome_number['total'] / 10 == $palindrome_number['input']) {

		echo $palindrome_number['input'] . " is palindrome number.";	

	}else{

		echo $palindrome_number['input'] . " is not palindrome number.";

	}
