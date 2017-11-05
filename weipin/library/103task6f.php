<?php 

	function pay($input) {

		if ( $input < 0 ) {
			
			$salary = "Invalid input";

			return array( 'salary' => $salary , );

		}

		else if ( $input > 0 && $input < 160 ) {
			
			$salary = $input * 10;
			
			return array( 'salary' => $salary  , );
		
		}

		else if ( $input == 160 ) {

			$salary = "$2000";

			return array( 'salary' => $salary , );
		
		}

		else if ( $input > 160 && $input < 672 ) {

			$cal = ( $input - 160 ) * 40 ;

			$salary = $cal + 2000;

			return array( 'salary' => $salary , );

		}

		else {
			
			$salary = "I think you are a robot";

			return array( 'salary' => $salary , );

		}
	
	}

 ?>