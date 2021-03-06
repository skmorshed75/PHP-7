<?php
//15.2 - Dependency Injection or Inversion of Control

interface BaseStudent{
    function displayName();
}

class Student implements BaseStudent{
    private $name;
    function __construct($name){
        $this->name = $name;            
    }

    function displayName() {
        echo 'Hello From '.$this->name;
    }
}

class ImproveStudent implements BaseStudent{
    private $name;
    private $title;
    function __construct($name,$title){
        $this->name = $name; 
        $this->title = $title;
    }

    function displayName() {
        echo "Hello From {$this->title}. {$this->name}";
    }
}

// class StudentManager {
//     function introduceStudent($name) {
//         $st = new Student($name);
//         $st->displayName();
//     }
// }

class StudentManager {
    function introduceStudent(BaseStudent $student) {
        $student->displayName();
    }
}
$d = new dateTime();

$st = new Student("John Doe");
$ist = new ImproveStudent("John Doe","Mr");
$sm = new StudentManager();
//$sm->introduceStudent("John Doe");
$sm->introduceStudent($ist);
