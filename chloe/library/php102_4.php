<?php 

	function convert_time($taskSeconds)
	{
		$Hour = (int)($taskSeconds / 3600);
		 	
	 	$Minutes = (int)(($taskSeconds % 3600) / 60);

		$Seconds = (int)($taskSeconds % 60);

		return [
			'hr' => $Hour,
			'mins' => $Minutes,
			'sec' => $Seconds,
		];
	}


	 	
	
		// echo (int)(string)$Hour . 'hour '. $Minutes . 'min ' . $Seconds . 'sec ' . PHP_EOL;
		 	
  	