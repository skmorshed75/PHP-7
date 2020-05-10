<?php

//Class 6.11
//SSCANF();

$name = "Abul Hossain 01234567891";
$parts = sscanf($name, "%s %s %11d");//First Name Last Name, Mobile Number
print_r($parts);

sscanf($name, "%s %s %11d", $fname, $lname, $mobile);
echo $lname;

$hexColor = "#FF2F44"; //HEXA DECIMAL CODE
sscanf($hexColor, "#%2x%2x%2x", $red, $green, $blue);
echo $blue;
