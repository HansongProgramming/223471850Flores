<?php
  for ($var1 = 1;$var1 <= 50 ; $var1++)  {
    if ($var1%3 ==0 && $var1%5 == 0) {
      echo "Fizz Buzz \n";
    }
    elseif ( $var1 % 3 == 0) {
       echo "Fizz \n";
    }
    elseif ($var1 % 5 ==  0) {
      echo "Buzz \n"; 
    }
    else {
       echo $var1 . "\n";
    }
  }
?>