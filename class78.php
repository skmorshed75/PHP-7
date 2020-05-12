<?php

//Class 7.8

//Data process in JSON data

$filename = "file3.txt";
$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age'   => 12,
        'class' => 7,
        'roll'  => 11,
    ),
    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age'   => 11,
        'class' => 7,
        'roll'  => 13,
    ),
    array(
        'fname' => 'Afifa',
        'lname' => 'Morshed',
        'age'   => 12,
        'class' => 7,
        'roll'  => 14,
    ),

    array(
        'fname' => 'Monavi',
        'lname' => 'Morshed',
        'age'   => 13,
        'class' => 8,
        'roll'  => 1,
    ),

);

//SAVE JSON DATA IN FILE
$encodeData = json_encode( $students );
file_put_contents( $filename, $encodeData, LOCK_EX );

//RETRIEVE DATA FROM TXT FILE
$data = file_get_contents( $filename );
$allStudents = json_decode( $data ); //Display as object
$allStudents = json_decode( $data, true ); //Display as Array
print_r( $allStudents );

//To see the data from Object
//echo $allStudents[0]->fname;

//To see the data from Array
echo $allStudents[0]['fname'];
