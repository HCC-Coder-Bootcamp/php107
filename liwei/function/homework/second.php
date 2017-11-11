<?php

  require('../library/second_to_time.php');

  $sec = readline('insert second' . PHP_EOL);

  $time = second_to_time($sec);

  echo "It's " . ((string)$time['hour'] . $time['min'] . $time['sec']) . PHP_EOL; 