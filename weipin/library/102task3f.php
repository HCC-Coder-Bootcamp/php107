<?php 

	function convert($inputHour, $inputMin) {
		
		$cal = $inputHour * 60;
	
		$total = $cal + $inputMin;

		return [ 
			'ans' => $total , 
		];

	}

 ?>