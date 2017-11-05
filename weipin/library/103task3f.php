<?php 

	function find( $number1, $number2, $number3 ) {
		
		if ( $number1 >= $number2 && $number1 >= $number3 ) {
		
			$message = "The largest number is $number1";
		
			return array( 'message' => $message , );
		
		}

		else if ( $number2 >= $number1 && $number2 >= $number3 ) {
		
			$message = "The largest number is $number2";
		
			return array( 'message' => $message , );
		
		}

		else if ( $number3 >= $number1 && $number3 >= $number2 ) {
		
			$message = "The largest number is $number3";
		
			return array( 'message' => $message , );
		
		}

	}

 ?>