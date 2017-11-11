<?php

function electricity_bill_calculator($inputUnit)
{
	if ($inputUnit !== 'x') {
		$charge1     = 1.2;
		$charge2     = 1.5;
		$charge3     = 1.8;
		$charge4     = 2;
		$minimumBill = 100;

		if ($inputUnit <= 0) {
			$msg = "REJECT!";
		} else if ($inputUnit < 84) {
			$billFee = $minimumBill;
		} else if ($inputUnit < 200) {
			$billFee = $inputUnit * $charge1;
		} else if ($inputUnit < 400) {
			$billFee = $inputUnit * $charge2;
		} else if ($inputUnit < 600) {
			$billFee = $inputUnit * $charge3;
		} else if ($inputUnit > 600) {
			$billFee = $inputUnit * $charge4;
		}

		if ($billFee > 400) {
			$surchargeBill = ($billFee * 0.15) + $billFee;
			$msg = "Your bill is $" . number_format((float)$surchargeBill, 2, '.', '') . ".";
		} else {
			$msg = "Your bill is $" . number_format((float)$billFee, 2, '.', '') . ".";
		}
	} else {
		$msg = "";
	}
	return $msg . PHP_EOL . PHP_EOL;
}