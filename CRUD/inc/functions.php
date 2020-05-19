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
                <td><?php printf( '<a href="/php7lwhh/crud/index.php?task=edit&id=%s">Edit</a> | <a href= "/php7lwhh/crud/index.php?task=delete&id=%s">Delete</a>', $student['id'], $student['id'] );?></td>
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
        $newId = count( $students ) + 1;
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