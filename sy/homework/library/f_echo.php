<?php

function f_echo($str) {
	echo PHP_EOL;
	echo str_pad(' +', 50, '+') . PHP_EOL;
	echo '|' . str_pad(' ', 49, ' ') . '|' . PHP_EOL;
	echo '|' . str_pad(" $str", 49, ' ') . '|' . PHP_EOL;
	echo '|' . str_pad(' ', 49, ' ') . '|' . PHP_EOL;
	echo str_pad(' +', 50, '+') . PHP_EOL;
	echo PHP_EOL;

}