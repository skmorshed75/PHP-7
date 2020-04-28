<?php
//PHP 7.0 LWHH 27/04/2020
//Class 1.26

//PRINT 0 TO 100 WHICH CAN BE DIVIDED BY 7

for ($i = 0; $i <100; $i++){
    //if($i % 7 == 0) echo $i." ";
    //if($i % 11 == 0) echo $i."\n";
    //if($i % 11 == 0) echo $i." ";

    //OR

    //echo $i % 7 == 0 ? $i." ":'';
    //echo $i % 11 == 0 ? $i." ":'';
}

// OR

for ($i = 0, $j = 0; $i < 100; $i += 7, $j += 11) {
    echo $i." ";
    echo $j < 100 ? $j." " :'';
}
