<?php 

  require('../library/prime_number.php');
	
  	$input = readline();

  	$prime = prime_number($input);
	
	echo "$input is $prime prime number";

  