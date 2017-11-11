<?php 

require ('library/php103_5.php');

	$input_class = readline('class?' . PHP_EOL);
	$input_score = readline('score? ' . PHP_EOL);
	$result = validator($class);
	