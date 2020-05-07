<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>PHP 7 Class 4.2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="output">
                    <p>
                        <?php
                        $fname = '';
                        $lname = '';                
                        ?>
                        <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
                            //$fname = htmlspecialchars($_REQUEST['fname']) ;
                            $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
                        } ?>                            
                        <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                            //$lname = htmlspecialchars($_REQUEST['lname']);
                            $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
                        } ?>
                    </p>
                    <p>
                    First Name : <?php echo $fname; ?></br>
                    Last Name : <?php echo $lname; ?> </br>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-3">
                <h1>Our First Form</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim expedita incidunt voluptate ex quasi provident ipsam cum dolorum, possimus aliquid.</p>
                <form action="" method ="POST">
                    <div class = "form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" class = "form-control" value ="<?php echo $fname; ?>">
                    </div>

                    <div class = "form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" class = "form-control" value = "<?php echo $lname; ?>">
                    </div>

                    <button class = "btn btn-primary" type = "submit">Submit</button>
                </form>
            </div>
        </div>

    </div>
    <style>
    
    </style>
</body>
</html>