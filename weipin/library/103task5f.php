<?php 

	function check( $inputClass, $inputScore ) {
	
		if ( $inputClass == 'a' || $inputClass == 'A' ) {
	
			if ( $inputScore >= 80 ) {
	
				$message = "***Pass***";

				return array( 'message' => $message , );

			}
	
			else {
	
				$message = "***Fail***";

				return array( 'message' => $message , );
	
			}
	
		}

		else if ( $inputClass == 'b' || $inputClass == 'B' ) {
	
			if ( $inputScore >= 70 ) {
	
				$message = "***Pass***";

				return array( 'message' => $message , );
	
			}
	
			else {
	
				$message = "***Fail***";

				return array( 'message' => $message , );
	
			}
	
		}

		else if ( $inputClass == 'c' || $inputClass == 'C' ) {
	
			if ( $inputScore >= 60 ) {
	
				$message = "***Pass***";

				return array( 'message' => $message , );
	
			}
	
			else {
	
				$message = "***Fail***";

				return array( 'message' => $message , );
	
			}
	
		}

		else if ( $inputClass == 'd' || $inputClass == 'D' ) {
	
			if ( $inputScore >= 50 ) {
	
				$message = "***Pass***";

				return array( 'message' => $message , );
	
			}
	
			else {
	
				$message = "***Fail***";

				return array( 'message' => $message , );
	
			}
	
		}
	
	}

 ?>