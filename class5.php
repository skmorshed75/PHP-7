<?php
include_once "class5f.php";

// $task = 'encode';
// if(isset($_GET['task']) && $_GET['task'] != ''){
//     $task = $_GET['task'];
// }

$task = 'encode';
if ( isset( $_GET['task'] ) && $_GET['task'] != '' ) {
	$task = $_GET['task'];
}

$key = "abcdefghijklmnopqrstuvwxyz1234567890";


// echo '<pre>';
// print_r($keyOriginal);
// echo '</pre>';

// if('key' == $task){
//     $keyOriginal = str_split($key);
//     shuffle($keyOriginal);
//     $key = join('', $keyOriginal);
// } else if (isset($_REQUEST['key']) && $_REQUEST['key'] != ''){
//     $key = $_POST['key'];
// }


$key = 'abcdefghijklmnopqrstuvwxyz1234567890';
if ( 'key' == $task ) {
	$key_original = str_split( $key );
	shuffle( $key_original );
	$key = join( '', $key_original );
}else if(isset($_POST['key']) && $_POST['key']!=''){
    $key = $_POST['key'];
}



$scrambledData = '';
if('encode' == $task) {
    $data = $_POST['data'] ?? '';
    if($data != ''){
        $scrambledData = scrambleData($data, $key);
    }
}


if('decode' == $task) {
    $data = $_POST['data'] ?? '';
    if($data != ''){
        $scrambledData = decodeData($data, $key);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Scrambler</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <style>
        body{margin-top:30px}
        h1 {color:magenta}
        #data {height:150px}
        #result{height:150px}

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <h1 class = "">Data Scrambler</h1>
                <p>Use this application to scramble your data</p>
                <p>
                    <a href="class5.php?task=encode">Encode</a> |
                    <a href="class5.php?task=decode">Decode</a> |
                    <a href="class5.php?task=key">Generate Key</a>              
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-3">
                <div class="form-area">
                    <form method="POST" action="class5.php<?php if('decode'== $task) { echo "?task=decode"; } ?>">
                        <div class="form-group">
                            <label for="key">Key</label>                            
                            <input type="text" name="key" id="key" class="form-control" <?php displayKey($key); ?>>
                        </div>
                        <div class="form-group">
                            <label for="data">Data</label>                            
                            <textarea name="data" id="data" class = "form-control" cols="30" rows="10"><?php if(isset($_POST['data'])){echo $_POST['data'];} ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="result">Result</label>                            
                            <textarea name="result" id="result" class="form-control" cols="30" rows="10"><?php echo $scrambledData; ?></textarea>
                            
                        </div>
                        <button class="btn btn-primary" >Do It for Me</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>