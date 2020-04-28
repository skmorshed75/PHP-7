<?php
//PHP 7.0 LWHH 27/04/2020
//Class 1.23

// Show 10 to 1 and 1 - 10 side by side
for($i = 10; $i > 0; $i--) {
    echo PHP_EOL;
    echo $i." : ".(11-$i);
}

//OR

// Show 10 to 1 and 1 - 10 side by side MULTIPLE ASSIGNMENT / STEPPING
for($i = 10, $j = 1; $i > 0; $i--, $j++) {
    echo PHP_EOL;
    echo $i." : ".($j);
}

