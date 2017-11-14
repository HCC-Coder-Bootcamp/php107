<?php

require('../library/money_changer.php');

$amount = readline('Please insert an amount' . PHP_EOL);

$distribute_money = money_change($amount);

echo "the amount of RM100 is " .((string)$distribute_money['amount100']) . " pcs" . PHP_EOL; 

echo "the amount of RM50 is " . ((string)$distribute_money['amount50']) . " pcs" . PHP_EOL; 

echo "the amount of RM20 is " . ((string)$distribute_money['amount20']) . " pcs" . PHP_EOL; 

echo "the amount of RM10 is " . ((string)$distribute_money['amount10']) . " pcs" . PHP_EOL; 

echo "the amount of RM5 is " . ((string)$distribute_money['amount5']) . " pcs" . PHP_EOL; 

echo "the amount of RM2 is " . ((string)$distribute_money['amount2']) . " pcs" . PHP_EOL; 

echo "the amount of RM1 is " . ((string)$distribute_money['amount1']) . " pcs" . PHP_EOL; 
