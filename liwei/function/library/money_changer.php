<?php

function money_changer($amount){

$amount100 = (int)($amount / 100);

$amount50 = (int)(($amount-$amount100*100) / 50);

$amount20 = (int)(($amount-$amount100*100-$amount50*50) / 20);

$amount10 = (int)(($amount-$amount100*100-$amount50*50-$amount20*20) / 10);

$amount5 = (int)(($amount-$amount100*100-$amount50*50-$amount20*20-$amount10*10) / 5);

$amount2 = (int)(($amount-$amount100*100-$amount50*50-$amount20*20-$amount10*10-$amount5*5) / 2);

$amount1 = (int)($amount-$amount100*100-$amount50*50-$amount20*20-$amount10*10-$amount5*5-$amount2*2);

return [
  'amount100' => $amount100,
  'amount50' => $amount50,
  'amount20' => $amount20,
  'amount10' => $amount10,
  'amount5' => $amount5,
  'amount2' => $amount2,
  'amount1' => $amount1,
];

}
