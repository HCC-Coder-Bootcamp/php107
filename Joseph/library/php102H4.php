<?php

function money_note_calculation($inputAmount)
{
	if ($inputAmount !== 'x') {
		$noteHundred = (int)($inputAmount / 100);
		$noteFifty   = (int)(($inputAmount % 100) / 50);
		$noteTwenty  = (int)((($inputAmount % 100) % 50) / 20);
		$noteTen     = (int)(((($inputAmount % 100) % 50) % 20) / 10);
		$noteFive    = (int)((((($inputAmount % 100) % 50) % 20) % 10) / 5);
		$noteTwo     = (int)(((((($inputAmount % 100) % 50) % 20) % 10) % 5) / 2);
		$noteOne     = (int)(((((($inputAmount % 100) % 50) % 20) % 10) % 5) % 2);

		$msg = "$noteHundred pcs RM 100" . PHP_EOL . "$noteFifty pcs RM 50" . PHP_EOL . "$noteTwenty pcs RM 20" . PHP_EOL . "$noteTen pcs RM 10" . PHP_EOL . "$noteFive pcs RM 5" . PHP_EOL . "$noteTwo pcs RM 2" . PHP_EOL . "$noteOne pcs RM 1" . PHP_EOL . PHP_EOL;
	} else {
		$msg = "";
	}
	return $msg;
}