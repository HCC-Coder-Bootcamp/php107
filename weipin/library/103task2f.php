<?php 

	function check($input) {

		if ( $input > 0 ) {
				
			$message = "This number is positive";

			$result = [ 'message' => $message , ];

		}

		else {
				
			$message = "This number is negative";
			
			$result = [ 'message' => $message , ];

		}

		return $result;

	}

	function check1($input) {
	
		$cal = $input % 2;
	
		if ( $cal == 0 ) {

			$message1 = "This number is even";

			$result1 = [ 'message1' => $message1 , ];

		}

		else{

			$message1 = "This number is odd";

			$result1 = [ 'message1' => $message1 , ];

		}

		return $result1;

	}

 ?>