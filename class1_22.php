<?php
//PHP 7.0 LWHH 27/04/2020
//Class 1.22

for($i=1; $i<=10; $i+=1) {
    echo $i;
    echo PHP_EOL; //LINE BREAK
}

echo "\n";
for($i=1; $i<20; $i+=2) {
    echo $i;
    echo PHP_EOL; //LINE BREAK
}


for($i=1; $i<10; $i++) {
    //echo $i;
    echo PHP_EOL; //LINE BREAK
    for($j=0; $j<$i; $j++) {
        //echo $j;
        echo "*";
    }
}

//echo "\n"; or
echo PHP_EOL;
$i = 0;
while($i <10){
    $i++;
    //echo $i.PHP_EOL;
    echo $i." ";
}

echo PHP_EOL;
$i = 0;
do{
    $i++;
    echo $i." ";
} while($i < 10);

echo "Go To \n";
$i = 0;
a: $i++;
echo $i." ";
if($i<10)goto a;