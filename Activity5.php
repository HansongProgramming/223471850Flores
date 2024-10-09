<?php
  $var = 0;
  $counter = 0;
  while ($counter <= 100) {
    $var += $counter;
    $counter++;
  }
  echo "The sum of numbers from 1 to 100 is: ". $var;
?>