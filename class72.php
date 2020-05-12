<?php

//Class 7.2

//Write Mode
 
$filename = "file2.txt";
//$existingData = file_get_contents( $filename ); //Keep previous data
/*
$fp = fopen( $filename, 'w' ); //'w' = file open in blank mode delete previous data
fwrite( $fp, $existingData );
fwrite( $fp, "Mercury\n" );
fwrite( $fp, "Venus\n" );
fwrite( $fp, "Earth\n" );
fclose( $fp );
*/


//Append Mode
$fp = fopen( $filename, 'a' ); //'a' = file open with existing data
//fwrite( $fp, $existingData );
fwrite( $fp, "Mercury\n" );
fwrite( $fp, "Venus\n" );
fwrite( $fp, "Earth\n" );
fclose( $fp );


