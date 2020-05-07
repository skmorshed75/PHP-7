<?php
header('X-XSS-Protection:0');
include_once "functions.php";

// if($_FILES['photo']['type']=='image/png' || $_FILES['photo']['type']=='image/jpg' || $_FILES['photo']['type']=='image/jpeg'){
//     move_uploaded_file($_FILES['photo']['tmp_name'], "files/".$_FILES['photo']['name']);
// }
//OR
$allowedTypes = array(
    'image/png',
    'image/jpg',
    'image/jpeg'
);
//5*1024b*1024 kb = 5mb
if($_FILES['photo']){
    if(in_array($_FILES['photo']['type'], $allowedTypes) !== false && $_FILES['photo']['size'] < 5*1024*1024) {
        move_uploaded_file($_FILES['photo']['tmp_name'], "files/".$_FILES['photo']['name']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>PHP 7 Class 4.4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <h1>Our First Form</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim expedita incidunt voluptate ex quasi provident ipsam cum dolorum, possimus aliquid.</p>
                <pre>
                    <?php
                    print_r($_POST);
                    print_r($_FILES);
                    ?>
                </pre>
                <form action="" method = "POST" enctype = "multipart/form-data">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" class = "form-control" id="fname">
                    </div>
                    
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" class = "form-control" id="lname">
                    </div>

                    <div class="form-group">
                        <label for="photo">Photo</label></br>
                        <input type="file" name="photo" id="photo">
                    </div>
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>
    <style>
    
    </style>
</body>
</html>