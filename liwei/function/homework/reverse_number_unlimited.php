<?php 
	require('../library/reverse_number.php');
	
	$input = readline("Palindrome Checker : ");

	$reverse = reverse_numb($input);

	if ($reverse['total'] / 10 == $reverse['input']) {

		echo $reverse['input'] . " is palindrome number.";	

	}else{

		echo $reverse['input'] . " is not palindrome number.";

	}
