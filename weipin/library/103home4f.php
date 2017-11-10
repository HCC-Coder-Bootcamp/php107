<?php 

	function detect($input) {

		$cal400 = $input % 400;

		$cal100 = $input % 100;

		$cal4 = $input % 4;

		if ( $cal400 == 0 ) {

			$message = "This year is leap year";

			$result = [ 'detect' => $message , ];

		}

		else if ( $cal100 == 0 ) {

			$message = "This year is not leap year";

			$result = [ 'detect' => $message , ];

		}

		else if ( $cal4 == 0 ) {

			$message = "This year is leap year";

			$result = [ 'detect' => $message , ];

		}

		else {
	
			$message = "This year is not leap year";
	
			$result = [ 'detect' => $message , ];
	
		}

		return $result;

	}

 ?>