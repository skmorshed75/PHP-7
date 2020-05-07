<?php
header('X-XSS-Protection:0');
include_once "functions.php";
$fruits = ["mango","apple","banana","peas","Orange","Lemon"];
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
                <p>
                    <?php
                    //print_r($_POST);
                    //$sfruits = isset($_POST['fruits']) ? $_POST['fruits']: array();
                    //OR
                    //$sfruits = $_POST['fruits'] ?? array(); //nol colesce operator
                    $sfruits = filter_input(INPUT_POST,'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY); //SANITIZE
                    if(count($sfruits) > 0) {
                        echo "You have selected : ".join(", ",$sfruits);
                    }

                    ?>
                </p>
                <form action="" method = "POST">
                <label>Select Some Fruits</label>
                <select class="form-control" name="fruits[]" id="fruits" style = "height:200px" multiple>
                    <option value="" selected disabled >Select Some Fruits</option>
                    <?php displayOptions($fruits, $sfruits); ?>
                </select>
                </br>
                <button class="btn btn-success" type="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>
    <style>
    
    </style>
</body>
</html>