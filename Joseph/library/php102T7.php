<?php

function gst_calculation($input_amount)
{
	if ($input_amount !== 'x') {
		$GST = 0.06;

		$gstAmount = (float)($input_amount * $GST);

		$totalAmount = (float)($input_amount + $gstAmount);

		$msg = "The GST is MYR" . number_format((float)$gstAmount, 2, '.', '') . PHP_EOL . "The total amount is MYR" . number_format((float)$totalAmount, 2, '.', '');
	} else {
		$msg = "";
	}
	return $msg . PHP_EOL . PHP_EOL;
}