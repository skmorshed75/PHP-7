<?php

define( 'DB_NAME', 'C:/xampp/htdocs/PHP7LWHH/CRUD/data/db.txt' );
function seed() {
    $data = array(
        array(
            'id'    => 1,
            'fname' => 'Kamal',
            'lname' => 'Ahmed',
            'roll'  => '11',
        ),
        array(
            'id'    => 2,
            'fname' => 'Jamal',
            'lname' => 'Ahmed',
            'roll'  => '9',
        ),
        array(
            'id'    => 3,
            'fname' => 'Abul',
            'lname' => 'Hossain',
            'roll'  => '12',
        ),
        array(
            'id'    => 4,
            'fname' => 'Md.',
            'lname' => 'Jabir',
            'roll'  => '7',
        ),
        array(
            'id'    => 5,
            'fname' => 'Monavi',
            'lname' => 'Morshed',
            'roll'  => '1',
        ),
        array(
            'id'    => 6,
            'fname' => 'Afifa',
            'lname' => 'Morshed',
            'roll'  => '2',
        ),
    );

    $serializedData = serialize( $data );
    file_put_contents( DB_NAME, $serializedData, LOCK_EX );
}

//ALL STUDENTS MENU IS PRESSED
function generateReport() {
    $serializedData = file_get_contents( DB_NAME );
    $students = unserialize( $serializedData );
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th>Action</th>
        </tr>
        <?php
        foreach ( $students as $student ) {
            ?>
            <tr>
                <td><?php printf( '%s %s', $student['fname'], $student['lname'] );?></td>
                <td><?php printf( '%s', $student['roll'] );?></td>
                <td><?php printf( '<a href="/php7lwhh/crud/index.php?task=edit&id=%s">Edit</a> | <a class = "delete" href= "/php7lwhh/crud/index.php?task=delete&id=%s">Delete</a>', $student['id'], $student['id'] );?></td>
            </tr>
            <?php
        }
    ?>
    </table>
    <?php
}

//ADD NEW STUDENTS
function addStudent( $fname, $lname, $roll ) {
    $found = false;
    $serializedData = file_get_contents( DB_NAME );
    $students = unserialize( $serializedData );
    foreach ($students as $_student) {
        if ($_student['roll'] == $roll) {
            $found = true;
            break;
        }
    }

    if(!$found) {
        $newId = getNewId($students);
        $student = array(
            'id'    => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'roll'   => $roll,
        );
        array_push( $students, $student );

        $serializedData = serialize( $students );
        file_put_contents( DB_NAME, $serializedData, LOCK_EX );
        return true;
    }
    return false;
}

//FIND STUDENT ID WHILE PRESS EDIT / UPDATE
function getStudent( $id ) {
    $serialziedData = file_get_contents( DB_NAME );
    $students       = unserialize( $serialziedData );
    foreach ( $students as $student ) {
        if ( $student['id'] == $id ) {
            return $student;
        }
    }

    return false;
}

//UPDATE STUDENT
function updateStudent( $id, $fname, $lname, $roll ) {
    $found          = false;
    $serialziedData = file_get_contents( DB_NAME );
    $students       = unserialize( $serialziedData );
    foreach ( $students as $_student ) {
        if ( $_student['roll'] == $roll && $_student['id'] != $id ) {
            $found = true;
            break;
        }
    }
    if ( ! $found ) {
        $students[ $id - 1 ]['fname'] = $fname;
        $students[ $id - 1 ]['lname'] = $lname;
        $students[ $id - 1 ]['roll']  = $roll;
        $serializedData               = serialize( $students );
        file_put_contents( DB_NAME, $serializedData, LOCK_EX );

        return true;
    }

    return false;
}



//Class 8.6
//DELETE STUDENTS ID
function deleteStudent($id) {
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);

    foreach($students as $offset=>$student) {
        if($student['id'] == $id) {
            unset($students[$offset]);
        }
    }
    $serializedData = serialize($students);
    file_put_contents(DB_NAME, $serializedData, LOCK_EX);
}


//FUNCTION FOR CHECKING ID THROUGH PRINT_R
function printRaw() {
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    print_r($students);
}

function getNewId($students){
    $maxId = max(array_column($students,'id'));
    return $maxId+1;
}