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
                <h1>Our First Form</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim expedita incidunt voluptate ex quasi provident ipsam cum dolorum, possimus aliquid.</p>
                <form action="" method ="POST">
                    <div class = "form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" class = "form-control" placeholder = "First Name">
                    </div>

                    <div class = "form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" class = "form-control" placeholder = "Last Name">
                    </div>

                    <button class = "btn btn-primary" type = "submit">Submit</button>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-6 offset-3">
                <div class="output">
                    <p>
                        <?php if(isset($_POST['fname']) && !empty($_POST['fname'])) : ?>
                            First Name :<b> <?php echo $_POST['fname'] ; ?></b></br>
                        <?php endif; ?>
                        <?php if(isset($_POST['lname']) && !empty($_POST['lname'])) : ?>
                            Last Name : <?php echo $_POST['lname']; ?></br>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <style>
    
    </style>
</body>
</html>