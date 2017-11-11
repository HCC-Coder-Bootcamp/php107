<?php 

/**
 * show odd number from 0 ~ n , n is input
 */

// $i += $i;
function prime($i)
{

	$i = 1;
	while ( $i <= $n ) {
		if ( $i % 2 == 1 ) {
			echo "$i, ";
		}
		$i ++;
	}

}
