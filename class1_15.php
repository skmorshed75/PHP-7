<?php
//PHP 7.0 LWHH 25/04/2020
//Class 1.15



$n = 12;
if(12 == $n){
    echo "Twelve";
} else if (10 == $n) {
    echo "Ten";
} else {
    echo "A Number";
}

echo "\n";

//OR
//TERNERY OPERATOR AND NESTED TERNERY OPERATOR
//$numberInWord = (12 == $n) ? "Twelve" : "A Number";
$n = 13;
$numberInWord = (12 == $n) ? "Twelve" : ((10 === $n) ? "Ten" : "A Number"); //RESULT SHOWS WRONG IF USE 10
echo "Ternery One : ". $numberInWord;

echo "\n";

$n = 6;
if($n % 2 == 0){
    echo "Even Number";
} else {
    echo "Odd Number";
}

echo "\n";

//ternery operator
$result = ($n % 2 == 0) ? "{$n} is an Even Number" : "{$n} is a Odd Number";
echo "Ternery Result : ".$result;