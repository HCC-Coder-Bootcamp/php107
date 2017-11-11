<?php

function hcf($a, $b)
{
	$i = 1;
	while ($i <= $a) {
		$j = 1;
		if ($a % $i == 0) {
			while ($j <= $b) {
				if ($b % $j == 0) {
					if($i == $j) $HCF = $i;
				}
				$j++;
			}
		}
		$i++;
	}
	return $HCF;
}