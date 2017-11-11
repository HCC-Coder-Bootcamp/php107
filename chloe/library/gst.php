<?php  

function gst($input_amount)
{
	$GST = 0.06;

	$GST_Amount = (float)($input_amount * 0.06);

	echo "GST: Rm" . number_format((float)$GST_Amount,2,'.',',') . PHP_EOL;

	$TotalAmount = $input_amount + $GST_Amount;

	echo "Total: Rm" . number_format($TotalAmount,2,'.','');
}
	