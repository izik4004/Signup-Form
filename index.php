<?php




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
<body>
    
</body>
</html>
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
                <input  
                <?php              
                    if(isset($_SESSION['first_name'])){
                        echo "value=" . $_SESSION['first_name'];                                                             
                    }                
                ?>
                type="text" class="form-control" name="first_name" placeholder="First Name" />
            </p>
            <p>
                <label>Last Name</label><br />
                <input
                <?php              
                    if(isset($_SESSION['last_name'])){
                        echo "value=" . $_SESSION['last_name'];                                                             
                    }                
                ?>
                type="text" class="form-control" name="last_name" placeholder="Last Name"  />
            </p>
            <p>
                <label>Email</label><br />
                <input
                
                <?php              
                    if(isset($_SESSION['email'])){
                        echo "value=" . $_SESSION['email'];                                                             
                    }                
                ?>

                type="text" class="form-control" name="email" placeholder="Email"  />
            </p>

            <p>
                <label>Password</label><br />
                           
            <input type="password" class="form-control" name="password" placeholder="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{15,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 15 or more characters" required>
            </p>
        
            <p>
                <label>Date of Birth</label><br />
                <input 
                
                <?php              
                  if(isset($_SESSION['dob'])){
                      echo "value=" . $_SESSION['dob'];                                                             
                  }                
                ?>
                type="date" class="form-control" name="dob" id="datepicker"/>
                
            </p>
            <p>
            <label>Department</label><br />
                <select class="form-control" name="department" >
                    <option value="">Select One</option>
                    <option
                    <?php              
                        if(isset($_SESSION['department']) && $_SESSION['department'] == 'IT'){
                            echo "selected";                                                           
                        }                
                    ?>
                    
                    >IT</option>
                    <option
                    <?php              
                        if(isset($_SESSION['department']) && $_SESSION['department'] == 'HR'){
                            echo "selected";                                                           
                        }                
                    ?>
                               
                    >HR</option>
                    <option
                    <?php              
                        if(isset($_SESSION['department']) && $_SESSION['department'] == 'Stuff'){
                            echo "selected";                                                           
                        }                
                    ?>
                    
                    
                    >Stuff</option>
                    </select>
                </p>
                <p>
                <p>
                <label>Favorite Colour</label><br />
                <input
                <?php              
                    if(isset($_SESSION['favorite_color'])){
                        echo "value=" . $_SESSION['favorite_color'];                                                             
                    }                
                ?>
                type="color" class="form-control" name="favorite_color" placeholder="favorite_color"  />
            </p>
            <p>
                <label>Gender</label><br />
                <input type="checkbox" id="male" name="male" value="male">
                <?php if (isset($gender) && $gender=="male") echo "checked";?>
                <label for="male">Male</label>
                <input type="checkbox" id="female" name="female" value="female">
                <?php if (isset($gender) && $gender=="female") echo "checked";?>
                <label for="female"> Female</label><br>
        
                
            </p>

                </p>           
                <p>
                <button class="btn btn-sm btn-success" type="submit">Register</button>
                </p>
            <p>
                    <a href="forgot.php">Forgot Password</a><br />
                    
            </p>
        </form>

    </div>

</div>