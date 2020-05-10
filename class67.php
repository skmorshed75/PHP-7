<?php

//Class 6.7

$string = "The quick Brown brown Fox fox jumps over the lazy dog.";

$strReplace = str_replace("brown","Brown",$string); //Case sensitive
echo $strReplace;

echo PHP_EOL;

// $strReplace = str_ireplace("brown","Green",$string); //Case insensitive
// echo $strReplace;

$strReplace = str_ireplace("brown","Green",$string,$count); //Case insensitive with count
echo $strReplace;

echo PHP_EOL;

//echo "Total replace : ".$count; or
echo "Total replacement : {$count}"; 

echo PHP_EOL;
$string = str_ireplace(array("brown","fox"), array("red","cat"), $string, $count); //Multi replacement using array
echo $string;
