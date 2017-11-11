<?php 
	
  function prime_number($input){

  $status = "a";
  $total = 2;
  $prime = 4;

	while ($total < $prime) {

		$prime--;

		if ($input == $prime) {
			$status = "a";
			
		}else if ($input % $prime == 0 || $input == 1) {
			$status = "not a";
		}
	}

	return $status;

}