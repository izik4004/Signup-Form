<?php



if(isset($_POST['submitted'])) {
    
$fname = $_POST ['fname'];
$lname = $_POST ['lname'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$fcolor = $_POST ['fcolor'];
$department = $_POST ['department'];

}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style type ="text/css">
    body {
        background-color: <?php echo $fcolor ?>
    }
  
    </style>

    
</body>
</html>