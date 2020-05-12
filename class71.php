<?php

//Class 7.1

$filename = "file1.txt";
//echo getcwd();

if ( is_readable( $filename ) ) {
    $fp = fopen( $filename, 'r' ); //'r' = read mode

    while ( $line = fgets( $fp ) ) {
        echo $line;
    }

    echo PHP_EOL;

    //rewind($fp); starts from begining
    fseek( $fp, 15 ); //starts from 3rd line after 15 chars
    while ( $line = fgets( $fp, 5 ) ) { //seek 5 chars
        echo $line . "-";
    }

    fclose( $fp );

    $data = file( $filename );
    echo PHP_EOL;
    echo $data[2];
    print_r( $data );

    echo "\n";
    $data = file_get_contents( $filename );
    echo $data;
}