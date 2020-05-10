<?php

//Class 6.1

$name = "Rakib";
//$string1 = 'My name is $name \n \t New data'; //$name \n \t not work
//$string1 = "My name is $name \n \t New data"; //OR
$string1 = "My name is {$name} \n \t New data";

echo $string1;

echo "\n";
echo "\n";

//HEREDOC
$heredoc = <<<EOD
HTML Text with multiple line
Data 2
New Line {$name} \n
More Text
EOD;

echo $heredoc;


//NOWDOC
$nowdoc = <<<'EOD'
HTML Text with multiple line
Data 2
New Line {$name} \n BUT NO VARIABLE WORKS
More Text
EOD;

echo $nowdoc;