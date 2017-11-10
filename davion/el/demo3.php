<?php

require('library/sum.php');
require('library/nicer_echo.php');

$results = [];

$results[] = sum(1, 2);
$results[] = sum(3, 4);
$results[] = sum(3, 5);
$results[] = sum(9, 2);
$results[] = sum(4, 10);


// SUM ARRAY
require('library/sum_array.php');

$sum_array_result = sum_array($results);
nicer_echo($sum_array_result);
