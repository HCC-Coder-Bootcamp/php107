<?php 

	function conversionUSD($inputUSD) {
	
		$cal = $inputUSD * 4.19;
	
		return [ 'MYR' => $cal , ];
	
	}

	function conversionMYR($inputMYR) {
	
		$cal = $inputMYR / 4.19;
	
		return [ 'USD' => $cal , ];
	
	}

 ?>