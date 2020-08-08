<?php

$fnameErr = $lnameErr= $emailErr = $fcolorErr= $departmentErr= $passwordErr = $genderErr ='';
$fname = $lname = $email = $fcolor = $department = $password = $gender = "";
//firstname validation



    if (empty($_POST["fname"])) {
      $fnameErr = "First name is required";
    } else {
      $name = test_input($_POST["fname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
        $fnameErr = "Only letters and white space allowed";
        $error = true;
      }
    }
    
    if (empty($_POST["lname"])) {
        $lnameErr = "Last name is required";
      } else {
        $name = test_input($_POST["lname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
          $lnameErr = "Only letters and white space allowed";
          
        }
    }

    //email validation
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        
      }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
      } else {
        $passwordErr = test_input($_POST["password"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$password)) {
          $passwordErr = "Only letters and white space allowed";
          $error = true;
        }
    }
    
   
    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  
  


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  
  

    
  };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Sign-Up Form</title>
</head>
<style type="text/css">
        .error{ color: red; }
        .success{ color: green; }
    </style>

<body>

<div class="container">
    <div class="col-8">
        <h2>Sign-Up</h2>
    </div>
    <div class="col-10">
        <p><strong>Welcome, Please Register</strong></p>
    </div>
    <hr/>
    <div class="col-10">
        <p>All Fields are required</p>
    </div>
   
    <div class="col-8">

        <form method="POST" action="processregister.php" >
      
            <p>
                <label>First Name</label><br />
                <input  type="text" class="form-control" name="fname" placeholder="First Name"/>                             
                <span class="error"><?php echo $fnameErr; ?></span>
                    <?php
                    if (empty($_POST["fname"])) {
                        $fnameErr = "First name is required";
                    } else {
                        $name = test_input($_POST["fname"]);
                        // check if name only contains letters and whitespace
                        if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
                        $fnameErr = "Only letters and white space allowed";
                        }
                    }
                    ?>

            <p>
                <label>Last Name</label><br />
                <input type="text" class="form-control" name="lname" placeholder="Last Name" required />
                <span class="error"><?php echo $lnameErr; ?></span>
            </p>
            <p>
                <label>Email</label><br />
                <input type="text" class="form-control" name="email" placeholder="Email" required/>
               <span class="error"><?php echo $emailErr; ?></span>
           
            </p>

            <p>
                <label>Password</label><br />
                <input type="text" class="form-control" name="password" placeholder="Password" required/>                    
                <span class="error"><?php echo $passwordErr; ?></span>
            </p>
        
            <p>
                <label>Date of Birth</label><br />
                <input type="date" class="form-control" name="dob" id="datepicker"/>  
            </p>
            <p>
            <label>Department</label><br />
                <select class="form-control" name="department"/>
                    <option value="">Select One</option>
                    <option
                   >IT</option>
                    <option
                    
                               
                    >HR</option>
                    <option
                   
                    
                    >Stuff</option>
                    </select>
                </p>
                <p>
                <p>
                <label>Favorite Colour</label><br />
                <input type="color"  name="fcolor" />
                Click on the box to choose your favorite colour
            </p>
            <p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male">
                <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female">
                <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                     
                <p>
                <button class="btn btn-sm btn-success" type="submit" name="submitted">Register</button>
                </p>
         
        </form>

    </div>

</div>

