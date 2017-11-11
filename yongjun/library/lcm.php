<?php

function lcm($a, $b)
{
	$LCM = $a * $b;
		$i = $b;
		while ($i > 1) {
			$LHS = $a * --$i;
			$j = $a;
			while ($j > 1) {
				$RHS = $b * --$j;
				if($LHS == $RHS)$LCM = $LHS;
			}
		}
	return $LCM;
}