<?php
$inputString = "Hello, World!";
$reversedString = "";

for ($i = strlen($inputString) - 1; $i >= 0; $i--) {
    $reversedString .= $inputString[$i]; 
}

echo "Original String: $inputString\n";
echo "Reversed String: $reversedString\n";
?>
