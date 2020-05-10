<?php

//Class 6.6

$string = "The quick brown Fox fox jumps over the lazy dog.";

//echo $string[11];
//echo strpos($string, "fox");
//echo stripos($string, "fox");
//echo stripos($string, "fox",17);


//Search from left
// $offset = stripos($string, "The");

// if($offset !== false){
//     echo "\nWord was found\n";
// } else {
//     echo "\nWord was not found\n";
// }



//Search from right
$offset = strripos($string, "quick");
echo PHP_EOL;
echo $offset;
