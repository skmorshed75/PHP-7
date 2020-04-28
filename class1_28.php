<?php
//PHP 7.0 LWHH 27/04/2020
//Class 1.28

for ($i = 0; $i <100; $i++){
    echo $i." ";
    //echo $j < 100 ? $j." " :'';
    if ($i == 6) {
        break;
    }
}

echo "\n===================\n";

for ($i = 20; $i < 50; $i++ ) {
    if($i % 13 == 0) {
        echo $i;
        echo PHP_EOL;
        break;
    }
}

echo "\n===================\n";

for ($i = 20; $i < 30; $i++){
    if($i < 27){
        echo "Below 27 : ".$i;
        echo PHP_EOL;
        continue;
    }
    echo "Over 27 : ".$i;
    echo PHP_EOL;
}
