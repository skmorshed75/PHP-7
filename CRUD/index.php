<?php
//Class 8.2
require_once "inc/functions.php";

$info = '';
$task = $_GET['task'] ?? 'report';
$error = $_GET['error'] ?? '0';

//Class 8.6
if('delete' == $task){
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
    if ($id >0){
        deleteStudent($id); //FUNCTION
        header('location:/php7lwhh/crud/index.php?task=report');
    }
}
//End Class 8.6

if ( 'seed' == $task ) {
    seed();
    $info = "Seeding is completed.";
}

//Class 8.3
$fname ='';
$lname= '';
$roll='';

if(isset($_POST['submit'])){
    $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
    $roll = filter_input(INPUT_POST,'roll',FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);

    if($id) {
        //UPDATE EXISTING DATA
        if($fname != '' && $lname != '' && $roll != '') {
            $result = updateStudent($id, $fname, $lname, $roll);
            if($result) {
                header('location:/php7lwhh/crud/index.php?task=report'); //AVOID PAGE RESUBMISION
            } else {
                $error = 1;
            }
        }
    } else {
        //ADD NEW DATA
        if($fname != '' && $lname != '' && $roll != ''){
            $result = addStudent($fname, $lname, $roll);
            if($result) {
                header('location:/php7lwhh/crud/index.php?task=report'); //AVOID PAGE RESUBMISION
            } else {
                $error = 1;
            }
        }

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>

    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <style>
        body {
            margin-top : 30px;
        }
        table {
            width : 100%;
        }

        th:first-child {
           width: 50%;
        }
        
        th:last-child {
           width: 25%;
        }

        tr {
            border-bottom: 1px solid #ddd;
            height: 35px;
        }

        blockquote {
            color: red; font-weight:700; font-size:18px;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <h2>Project - 2 CRUD</h2>
            <p>A sample project to perform CRUD operations using plain files and PHP</p>
            <?php include_once 'inc/templates/nav.php';?>
            <hr/>
            <?php
            if ( $info != '' ) {
                echo "<p>{$info}</p>";
            }
            ?>
        </div>
    </div>
    <?php if ( '1' == $error ): ?>
        <div class="row">
            <div class="col-6 offset-3">
                <blockquote>
                    Duplicate Roll Number.
                </blockquote>
            </div>
        </div>
    <?php endif; ?>

    <?php if ( 'report' == $task ): ?>
        <div class="row">
            <div class="col-6 offset-3">
                <?php generateReport();?>
                <!-- <div>
                    <pre>
                        <?php //printRaw(); //FUNCTION for checking through print_r ?> 
                    </pre>
                </div> -->
            </div>
        </div>
    <?php endif; ?>
    <?php 
    //Class 8.3
    if ( 'add' == $task ): 
    ?>
        <div class="row">
            <div class="col-6 offset-3">
                <form action="/php7lwhh/crud/index.php?task=add" method="POST">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control" value = <?php echo $fname; ?>>
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control" value = <?php echo $lname; ?>>
                    </div>

                    <div class="form-group">
                        <label for="roll">roll</label>
                        <input type="number" name="roll" id="roll" class="form-control" value=<?php echo $roll; ?>>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
                </form>
            </div>
        </div>
    <?php 
    endif;
    ?>

    <?php
    //Class 8.5
    
    if ( 'edit' == $task ): 
        $id = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_STRING );   
        $student = getStudent( $id );
        if ( $student ):
            ?>
            <div class="row">
                <div class="col-6 offset-3">
                    <form method="POST">
                        <input type="hidden" name="id" value=<?php echo $id; ?>>
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" class="form-control" value = <?php echo $student['fname']; ?>>
                        </div>

                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control" value = <?php echo $student['lname']; ?>>
                        </div>

                        <div class="form-group">
                            <label for="roll">roll</label>
                            <input type="number" name="roll" id="roll" class="form-control" value=<?php echo $student['roll']; ?>>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    </form>
                </div>
            </div>
        <?php
        endif;
    endif;
    ?>
</div>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>