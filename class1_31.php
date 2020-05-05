<?php
//PHP 7.0 LWHH 28/04/2020
//Class 1.31

//null coalescing Operator newly introduced in PHP 7

$default_lat = 23.9;
$default_lon = 90.85;

//$user_lat;
$user_lat = 38.84; //if change

//Ternery Operator
$lat = isset($user_lat) ? $user_lat : $default_lat;
echo $lat;

echo "\n==============================\n";
//Null Coalese Operator
$lat = $user_lat ?? $default_lat;
echo $lat;

echo "\n==============================\n";
if (isset($user_lat)){
    $lat = $user_lat;
} else {
    $lat = $default_lat;
}
echo $lat;

