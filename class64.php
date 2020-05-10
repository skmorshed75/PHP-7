<?php
//Class 6.4

//Reverse String

$string = "Hello World";
$length = strlen($string)-1;
//echo $length;

for ($i = $length; $i>=0; $i--){
    echo $string[$i];
}

echo PHP_EOL;
echo PHP_EOL;

//OR
$length = strlen($string);
for ($i=1; $i<=$length; $i++){
    echo $string[$i*-1];
}

//OR

echo PHP_EOL;
echo strrev($string); //str revers

