<?php
//PHP 7.0 LWHH 27/04/2020
//Class 1.29

//FIBUNACCI SERIES 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2584

$veryOld = 0;
$old = 1;
$new = 1;
for ($i = 0; $i < 10; $i++) {
    echo $veryOld. " ";
    $old = $new;
    $new = $old + $veryOld;
    $veryOld = $old;
}

?>
LOOP :
initial
v = 0
o = 1
n = 1

1st loop
v = 1
o = 1
n = 1

2nd loop
v = 1
o = 1
n = 2

3rd loop
v = 2
o = 2
n = 3

4th loop
v = 3
o = 3
n = 5
