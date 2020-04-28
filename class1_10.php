<?php
//PHP 7.0 LWHH 25/04/2020
//Class 1.10

$fname = "Isaac";
$lname = "Newton";
//Variable Swaping
printf('His name is %2$s %1$s', $lname, $fname); //%2 = 2nd variable, %1 = 1st variable, $s = string
echo "\n";
printf('The binary equivalent of %1$d is %1$b',12);


$n = 45.126;
echo "\n";
printf("%.2f",$n); //.2f = 2 digit after decimal
echo "\n";

$m = 123; //0123
$n = 27; //0027
printf("%04d \n",$m); //%04d placeholder 4 digit decimal
printf("%04d \n",$n); //%04d placeholder 4 digit decimal


$m = 123.3253; //0123.33
$n = 27.155; //0027.16
printf("%07.2f \n",$m); //%07.2f placeholder 7 digit including 2 digit after decimal
printf("%07.2f \n",$n);

