<?php

//Class 6.8
//TRIM, LTRIM, RTRIM

$string = "  The quick \n";
//$string = trim($string); //Remove nonprintable character

$string = trim($string," "); //Remove White space only
echo $string;
echo "data";
