<?php
  for ($var = 1; $var <= 10; $var++) {
      if ( $var ==5) {
        continue;
      }
            if ( $var ==8) {
      break;
      }
            echo $var;
  }
?>