<?php

require ('../library/smallest_number.php');
$smallest_array = [];
for ($i = 0; $i < 11; $i++) {
	$smallest_array[] = readline("add 11 number - ");
	echo "contains : " . PHP_EOL;
    print_r($smallest_array);
}
$smallest = smallest_number($array);

echo "$smallest is smallest number";