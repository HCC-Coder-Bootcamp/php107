<?php

require ('../library/smallest_number.php');
$array = [];
for ($i = 0; $i < 11; $i++) {
	$array[] = readline("add 11 number - ");
	echo "contains : " . PHP_EOL;
    print_r($array);
}
$smallest = smallest_number($array);

echo "$smallest is smallest number";