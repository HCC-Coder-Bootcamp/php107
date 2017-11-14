<?php 
	require('../library/reverse_number.php');
	
	$input = readline("Palindrome Checker : ");

	$palindrome_number_result = reverse_number($input);

	if ($palindrome_number_result['total'] / 10 == $palindrome_number_result['input']) {

		echo $palindrome_number_result['input'] . " is palindrome number.";	

	}else{

		echo $palindrome_number_result['input'] . " is not palindrome number.";

	}
