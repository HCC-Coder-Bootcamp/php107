<?php

function sum_array($array) {

    $sum = 0;
    foreach($array as $item) {
        $sum += $item;
    }

    return $sum;
}
