<?php 

	function check( $inputClass, $inputScore ) {
	
		if ( $inputClass == 'a' || $inputClass == 'A' ) {
	
			if ( $inputScore >= 80 ) {
	
				$message = "***Pass***";

				$result = [ 'message' => $message , ];

			}
	
			else {
	
				$message = "***Fail***";

				$result = [ 'message' => $message , ];
	
			}
	
		}

		else if ( $inputClass == 'b' || $inputClass == 'B' ) {
	
			if ( $inputScore >= 70 ) {
	
				$message = "***Pass***";

				$result = [ 'message' => $message , ];
	
			}
	
			else {
	
				$message = "***Fail***";

				$result = [ 'message' => $message , ];
	
			}
	
		}

		else if ( $inputClass == 'c' || $inputClass == 'C' ) {
	
			if ( $inputScore >= 60 ) {
	
				$message = "***Pass***";

				$result = [ 'message' => $message , ];
	
			}
	
			else {
	
				$message = "***Fail***";

				$result = [ 'message' => $message , ];
	
			}
	
		}

		else if ( $inputClass == 'd' || $inputClass == 'D' ) {
	
			if ( $inputScore >= 50 ) {
	
				$message = "***Pass***";

				$result = [ 'message' => $message , ];
	
			}
	
			else {
	
				$message = "***Fail***";

				$result = [ 'message' => $message , ];
	
			}
	
		}

		return $result;
	
	}

 ?>