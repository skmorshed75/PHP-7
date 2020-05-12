<?php

//Class 7.6

//Data process in file in different way

$filename = "file2.txt";
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

//Keep data in a file
/*
$fp = fopen($filename,"w");
foreach($students as $student) {
$data = sprintf("%s,%s,%s,%s,%s\n",$student['fname'],$student['lname'], $student['age'], $student['class'], $student['roll']);
fwrite($fp, $data);
}
fclose($fp);
 */

//OR CSV FORMAT
/*
$fp = fopen( $filename, 'w' );
foreach ( $students as $student ) {
fputcsv( $fp, $student );
}
*/

//Read data from a file
/*
$fp = fopen($filename,'r');
while($data = fgets($fp)) {
$student = explode(",",$data);
//print_r($student);
printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
}
fclose($fp);
 */

//OR

$fp = fopen( $filename, 'r' );
while ( $student = fgetcsv( $fp ) ) {
    printf( "Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4] );
}
fclose( $fp );

//ADD NEW DATA WITH EXISTING DATA APPEND
/*
$student = array(
    'fname' => 'Mawa',
    'lname' => 'Khatun',
    'age'   => 11,
    'class' => 6,
    'roll'  => 2,
);
$fp = fopen( $filename, 'a' ); //append mode
fputcsv( $fp, $student );
fclose( $fp );
*/


//DELETE DATA FROM FILE
$data = file($filename);
print_r($data);

unset($data[1]);
$fp = fopen($filename,"w");
foreach($data as $line) {
    if(!empty($line)){
        fwrite($fp, $line)."\n";
    }
}
fclose($fp);


