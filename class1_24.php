<?php
//PHP 7.0 LWHH 27/04/2020
//Class 1.24

//FACTORIAL OF 6 = 6*5*4*3*2*1

$n = 6;
for ($i = $n, $factorial = 1; $i > 1; $i--){
    //$factorial = $factorial * $i;
    $factorial *= $i;
}
printf("Factorial of %d is %d",$n,$factorial);
