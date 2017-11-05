<?php 

	function check($input) {

		if ( $input > 0 ) {
				
			$message = "This number is positive";

			return array( 'message' => $message , );

		}

		else {
				
			$message = "This number is negative";
			
			return array( 'message' => $message , );

		}

	}

	function check1($input) {
	
		$cal = $input % 2;
	
		if ( $cal == 0 ) {

			$message1 = "This number is even";

			return array( 'message1' => $message1 , );

		}

		else{

			$message1 = "This number is odd";

			return array( 'message1' => $message1 , );

		}

	}

 ?>