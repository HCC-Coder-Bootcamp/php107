<?php  

function number($input_1 , $input_2 , $input_3)
{
	if ($input_1 > $input_2) {
			if ($input_1 > $input_3) {
				return $input_1;
				// echo "one is the largest no" . PHP_EOL;
			}
			else{
				return $input_3;
				// echo "three is the largest no" . PHP_EOL;
			}
	}	
			
	else 
	{
		if ($input_2 > $input_3){
			return $input_2;
			// echo "two is the largest no" . PHP_EOL;
		}
		else
			return $input_3;
			// echo "three is the largest no" . PHP_EOL;
	}
}
