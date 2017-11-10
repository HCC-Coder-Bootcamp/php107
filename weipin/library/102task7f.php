<?php 

	function gst($input) {
				
		$gst = $input * 0.06;
			
		$total = $input + $gst;

		return [
			'gst' => $gst , 
			'total' => $total ,
		];
		
	}

 ?>