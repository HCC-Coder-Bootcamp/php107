<?php 

	function smallest( $number1, $number2, $number3 ) {

		if ($number1 <= $number2 && $number1 <= $number3 ) {
	
			$ans = $number1;
	
			return array( 'smallest' => $number1 , );
	
		}
	
		else if ($number2 <= $number1 && $number2 <= $number3 ) {
	
			$ans = $number2;
	
			return array( 'smallest' => $number2 , );
	
		}
	
		else if ($number3 <= $number1 && $number3 <= $number2 ) {
	
			$ans = $number3;
	
			return array( 'smallest' => $number3 , );
	
		}
	
	}

 ?>