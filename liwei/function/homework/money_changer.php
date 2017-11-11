<?php

require('../library/money_changer.php');

$amount = readline('Please insert an amount' . PHP_EOL);

$money = money_changer($amount);

echo "the amount of RM100 is " .((string)$money['amount100']) . " pcs" . PHP_EOL; 

echo "the amount of RM50 is " . ((string)$money['amount50']) . " pcs" . PHP_EOL; 

echo "the amount of RM20 is " . ((string)$money['amount20']) . " pcs" . PHP_EOL; 

echo "the amount of RM10 is " . ((string)$money['amount10']) . " pcs" . PHP_EOL; 

echo "the amount of RM5 is " . ((string)$money['amount5']) . " pcs" . PHP_EOL; 

echo "the amount of RM2 is " . ((string)$money['amount2']) . " pcs" . PHP_EOL; 

echo "the amount of RM1 is " . ((string)$money['amount1']) . " pcs" . PHP_EOL; 
