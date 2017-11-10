<?php

require('library/sum.php');
require('library/nicer_echo.php');

$results = [];

$results[] = sum(1, 2);
$results[] = sum(3, 4);
$results[] = sum(3, 5);
$results[] = sum(9, 2);
$results[] = sum(4, 10);

print_r($results);