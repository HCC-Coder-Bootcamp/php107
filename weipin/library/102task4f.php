<?php 

	function convert($input) {
		
		$seconds = $input % 60;
	
		$cal = $input - $seconds;
	
		$cal1 = $cal % 3600;
	
		$min = $cal1 / 60;
	
		$hour = $cal / 3600;

		return array( 
			'hour' => $hour ,
			'minutes' => $min ,
			'seconds' => $seconds , );
			
	}


 ?>