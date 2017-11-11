<?php 

	function pay($input) {

		if ( $input < 0 ) {
			
			$salary = "Invalid input";

			$result = [ 'salary' => $salary , ];

		}

		else if ( $input > 0 && $input < 160 ) {
			
			$salary = $input * 10;
			
			$result = [ 'salary' => $salary  , ];
		
		}

		else if ( $input == 160 ) {

			$salary = "$2000";

			$result = [ 'salary' => $salary , ];
		
		}

		else if ( $input > 160 && $input < 672 ) {

			$cal = ( $input - 160 ) * 40 ;

			$salary = $cal + 2000;

			$result = [ 'salary' => $salary , ];

		}

		else {
			
			$salary = "I think you are a robot";

			$result = [ 'salary' => $salary , ];

		}

		return $result;
	
	}

 ?>