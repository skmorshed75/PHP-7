<?php
//PHP 7.0 LWHH 24/04/2020
//Class 1.4
/**
 * Integer INT
 * Double / FLOAT
 * Bolean
 * Null
 * String
 * Array
 * Object
 * Resource
 * 
 */

$name = "Neptune";
//var_dump($name);
$age = 12;
//var_dump($age);
$value = 14.213;
//var_dump($value);

var_dump($name, $age, $value);

$result = true;
var_dump($result);

$name = "earth";
//echo "We live on $name";
//echo 'We live on {$name}'; //php treats the variable within single quote as string
echo "We're live on {$name}";
echo "\n";
echo 'We\'re live on'.$name."\n";
printf("We are live on %s",$name);

echo "\n";
$fname = "Isaac";
$lname = "Newton";
//printf("His name is %s %s",$fname, $lname); //%s is placeholder
printf("His %s name is %s %s","Full", $fname, $lname); //%s is placeholder
echo "\n";


$planet1 = "Mercury";
$planet2 = "Jupiter";
echo "The smallest Planet is ".$planet1." and the biggest planet is ".$planet2."\n";
echo "The smallest Planet is {$planet1} and the biggest planet is {$planet2}\n";
printf("The smallest planet is %s and the biggest planet is %s\n", $planet1, $planet2);
printf("The smallest planet is %s and the biggest planet is %s\n", strtoupper($planet1), strrev($planet2));