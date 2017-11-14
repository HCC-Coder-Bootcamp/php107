<?php 
	
  function prime_number($input){

  $status = "a";
  $loop_prime_min = 2;
  $loop_prime_max = 4;

	while ($loop_min < $loop_prime_max) {

		$loop_prime_max--;

		if ($input == $loop_prime_max) {
			$status = "a";
			
		}else if ($input % $loop_prime_max == 0 || $input == 1) {
			$status = "not a";
		}
	}

	return $status;

}