<?php 
	function reverse_numb($input){
	$input_number = $input;
	$total = 0;
	while ($input != 0) {
		$total = ($total + ($input % 10)) * 10;
		$input = ($input - ($input % 10)) / 10;		
	} 
	return [
		'input' => $input_number,
		'total' => $total,
	];
}