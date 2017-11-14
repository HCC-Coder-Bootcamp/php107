<?php

  require('../library/second_to_time.php');

  $sec = readline('insert second' . PHP_EOL);

  $time_change_result = second_to_time($sec);

  echo "It's " . ((string)$time_change_result['hour'] . $time_change_result['min'] . $time_change_result['sec']) . PHP_EOL; 