<?php 

require ('library/gst.php');

	$input_amount = (float)readline('Your payment'. PHP_EOL);

	$result = gst($input_amount);

