<?php
//Class 6.5

$string = "Hello World, How are you";
$parts = explode(" ",$string);
print_r($parts);

echo PHP_EOL;

//$original = join(", ", $parts);
$original = implode(" ", $parts);
echo $original;

$parts2 = str_split($string);
print_r($parts2)."\n";

//slice with multi delemeter ie. space and ,
$parts3 = strtok($string," ,");
while ($parts3 !== false){
    echo $parts3."\n";
    $parts3 = strtok(" ,");
}

//slice with preg_split() function
echo PHP_EOL;
$parts4 = preg_split("/ |, /",$string);
print_r($parts4);
