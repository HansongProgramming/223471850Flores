<?php
$n = 10; // Change this to generate more or fewer Fibonacci numbers
$fibonacci = [];
$a = 0;
$b = 1;

$count = 0;
while ($count < $n) {
    $fibonacci[] = $a; 
    $next = $a + $b; 
    $a = $b; 
    $b = $next; 
    $count++; 
}

echo "Fibonacci sequence:\n";
foreach ($fibonacci as $number) {
    echo $number . "\n";
}
?>
