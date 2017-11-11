<?php  

function number($input_1 , $input_2 , $input_3)
{
	if ($input_1 > $input_2) {
			if ($input_1 > $input_3) {
				echo "one is the largest no" . PHP_EOL;}
			else
				echo "three is the largest no" . PHP_EOL;
				}	
			
		else 
		{
			if ($input_2 > $input_3){
				echo "two is the largest no" . PHP_EOL;
			}
			else
				echo "three is the largest no" . PHP_EOL;
		}
}
