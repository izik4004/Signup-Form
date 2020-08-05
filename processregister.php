<?php



print_r($_POST);


$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$favorite_color = $_POST ['favorite_color'];
$department = $_POST ['department'];

?>
//Validating
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
        background-color: <?php echo $favorite_color ?>
    }
  
    </style>
</body>
</html>