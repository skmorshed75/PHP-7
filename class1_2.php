<?php
//PHP 7.0 LWHH 24/04/2020
//Class 1.1

$name = 'Bangladesh';
$age = 18;

$word = "age";

echo $$word;

echo "\n"; //Insert new line
echo "Hello ".$name;

echo "\n";

echo "Hello $name";
//or 
echo "\n";
echo "Hello {$name}";
echo "\n";
echo 'Hello $name'; //Will not work, because PHP does not treat as variable within ''

$question = "How are you?";
echo "Hello {$name}, {$question}\n";


