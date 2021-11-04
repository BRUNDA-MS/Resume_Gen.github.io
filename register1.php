<?php
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
        <title>GoResume</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="register_design.css">
</head>
    <body>
    <header style="font-family: 'Times New Roman', Times, serif;">
            <div class="topnav" style="list-style: none;" id="navbarNavDropdown">
                  
                  <li>	
                    <a class="active" href="home1.php" style=" background-color: #b27c66;
    color: #453750;" >Home </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Templates
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: black;">
                    <a class="dropdown-item" href="templates.php">CSE/ISE</a>
                    <a class="dropdown-item" href="templates.php">ECE/EEE</a>
                    <a class="dropdown-item" href="templates.php">MECH / CIVIL</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                  <li class="nav-item" style="float: right;">
                    <a class="nav-link" href="Login1.php" >Sign-In</a>
                    </li>
                    <li class="nav-item" style="float: right;border-right:1px solid #bbb;">
                    <a class="nav-link" href="register1.php" >Sign-Up</a>
                    </li>
                 
                </div>
            </header>
        <div class="container" style="justify-content: center;">
            <h2 style="color: #FFFFFF; font-family: 'Times New Roman', Times, serif; font-size: 8vh;">Register here!</h2>
          <form action = "register1.php" method="post">
            <div class="form-group">
              <label style="color: #FFFFFF; font-family: 'Times New Roman', Times, serif;">Name:</label><br>
              <input class="form-group" placeholder="Enter name" name="name" style="width: 200px; border-radius: 8px;"><br>
              <label style="color: #FFFFFF; font-family: 'Times New Roman', Times, serif;">Email:</label><br>
              <input type="email" class="form-group"  placeholder="Enter email" name="email" style="width: 200px; border-radius: 8px;"><br>
              <label style="color: #FFFFFF; font-family: 'Times New Roman', Times, serif;">Password:</label><br>
              <input type="password" class="form-group"  placeholder="Enter password" name="password" style="width: 200px; border-radius: 8px;"><br>
              <label style="font-family: 'Times New Roman', Times, serif;">Confirm password:</label><br>
              <input type="password" class="form-group" placeholder="Confirm password" name="cpassword" style="width: 200px; border-radius: 8px;"><br>
            </div><br>
            <input name="submit_btn" class="btn btn-default" style="border-radius:4px; font-size: 18px; font-family: 'Times New Roman', Times, serif;float:right;" type="submit" value="Create Acoount"><br><br>
            <button class="btn btn-default" type="button" style="border-radius:4px; font-size: 18px; font-family: 'Times New Roman', Times, serif;float:right;" ><a href="login1.php">Login</a></button><br><br>
          </form>
         <?php
            if(isset($_POST['submit_btn']))
            {
                //echo '<script type="text/javascript"> alert("Signup clicked") </script>';
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];
                

                if($password==$cpassword)
                {
                    $query = "select * from userinfo WHERE email='$email'";
                    $query_run = mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                        echo '<script type="text/javascript">alert("User exists try other name")</script>';
                    }
                    else{
                        $query = "insert into userinfo values('$name','$email','$password')";
                        $query_run = mysqli_query($con,$query);
                        if($query_run)
                        {
                          echo '<script type="text/javascript"> alert("User registered..Go and login")</script>';

                        }
                        else
                        {
                            echo '<script type="text/javascript"> alert("Error")</script>';
                        }
                    }
                }
                else{
                    echo '<script type="text/javascript"> alert("password and confirm password dont match")</script>';
                }
            }
          ?>
          </div>
    </body>
</html>