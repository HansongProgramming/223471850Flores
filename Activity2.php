<?php
  do {
    echo "Enter Password: ";
    $var = fgets (STDIN);
    if ($var != "password123") {
      continue; 
    }
    else {break;}
  } 
  while (1>0);
  echo "Access Granted.";
?>