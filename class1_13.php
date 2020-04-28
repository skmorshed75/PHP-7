<?php
//PHP 7.0 LWHH 25/04/2020
//Class 1.13

//LEAP YEAR CALCULATION

$year = 2020;
if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0 ){
    echo "{$year} is a leap year 1";
} elseif ($year % 4 == 0 && $year % 100 == 0) {
    echo "{$year} is NOT a leap year 1";
} elseif ($year % 4 == 0) {
    echo "{$year} is a leap year 2";
} else {
    echo "{$year} is not a leap year 2";
}
echo "\n";

//OR
$year = 2020;
if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "{$year} is a leap year";    
} else {
    echo "{$year} is not a leap year";    
}