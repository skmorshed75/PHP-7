<?php

//Class 7.7

//Data process in Serialized Array

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

//SAVE DATA IN A TEXT FILE IN SERIALIZE WAY
$data = serialize($students);
file_put_contents($filename,$data,LOCK_EX);

//RETRIEVE DATA FROM SAVED FILE
$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);


//DELETE DATA FROM SAVED FILE
unset($allStudents[2]);
$data = serialize($allStudents);
file_put_contents($filename,$data,LOCK_EX);


//ADD NEW STUDENT
$student = array(
    'fname' => 'Kamal',
    'lname' => 'Ahmed',
    'age' => 13,
    'class' => 5,
    'roll' => 63
);

array_push($allStudents, $student);
$data = serialize($allStudents);
file_put_contents($filename, $data, LOCK_EX);
