<?php

$char = '*';
$height = 5;

echo "Perulangan Segitiga Sama Sisi\n";

for($i = 1; $i <= $height; $i++) {
    for($j = 1; $j <= $height - $i; $j++) {
        echo " ";
    }

    for($j = 1; $j <= (2 * $i - 1); $j++) {
        echo $char;
    }
    
    echo "\n";
}

echo "\nPerulangan Segitiga Sama Sisi Terbalik\n";

for($i = $height; $i >= 1; $i--) {
    for($j = 1; $j <= $height - $i; $j++) {
            echo " ";
        }
    
    for($j = 1; $j <= (2 * $i - 1); $j++) {
            echo $char;
        }
        
        echo "\n";
    }
    
?>