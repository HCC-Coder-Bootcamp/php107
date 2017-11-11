<?php 

	function smallest( $number1, $number2, $number3 ) {

		if ($number1 <= $number2 && $number1 <= $number3 ) {
	
			$ans = $number1;
	
			$result = [ 'smallest' => $ans , ];
	
		}
	
		else if ($number2 <= $number1 && $number2 <= $number3 ) {
	
			$ans = $number2;
	
			$result = [ 'smallest' => $ans , ];
	
		}
	
		else if ($number3 <= $number1 && $number3 <= $number2 ) {
	
			$ans = $number3;
	
			$result = [ 'smallest' => $ans , ];
	
		}

		return $result;
	
	}

 ?>