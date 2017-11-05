<?php 

	function gst($input) {
				
		$gst = $input * 0.06;
			
		$total = $input + $gst;

		return array(
			'gst' => $gst , 
			'total' => $total ,);
		
	}

 ?>