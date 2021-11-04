<?php
 session_start();
 require 'dbconfig/config.php'
?>
<!DOCTYPE html>
<?php
            if(isset($_POST['login']))
            {
              $email= $_POST['email'];
              $password = $_POST['password'];
              $query = "select * from userinfo WHERE email='$email' AND password= '$password'";

              $query_run = mysqli_query($con,$query);
              if(mysqli_num_rows($query_run)>0)
              {
                
                $_SESSION['email']=$email;
                
                header('location:logged.php');
              }
              else
              {
                echo '<script type="text/javascript"> alert("Invalid Credentials")</script>';
              }
            }
          ?>
<html>
<head>
  <title>GoResume</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/Login_design.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head> 

        <body> 
          <header style="font-family: 'Times New Roman', Times, serif;">
            <div class="topnav" style="list-style: none;" id="navbarNavDropdown">
                  
                  <li>	
                    <a class="active" href="home1.php" >Home </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="templates.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Templates
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: black;">
                    <a class="dropdown-item" href="#">CSE/ISE</a>
                    <a class="dropdown-item" href="#">ECE/EEE</a>
                    <a class="dropdown-item" href="#">MECH / CIVIL</a>
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
        <!--<p1 style="font-size: 75px; font-family: Helvetica; color:#FFFFFF;" {text-align: center;}><b>CST Resume maker</b></p1>-->
        <div class="bg">
          <form action = "login1.php" method="post" style="font-size: 40px; font-family:'Times New Roman', Times, serif; margin-top: 100px; color:#FFFFFF;"  >LOGIN!!
            <div class = "form-group">
              <label style="font-size: 30px; font-family:'Times New Roman', Times, serif; color:#000000;"><b>E-mail</b></label><br>
              <input type="text" name="email" class="form-control" placeholder="Enter e-mail" required style="font-size: 20px;">
            </div>
            <div class = "form-group">
              <label style="font-size: 30px; font-family:'Times New Roman', Times, serif; color:#000000;"><b>Password</b></label><br>
              <input type="password" name= "password" class="form-control" placeholder="Enter Password"  required style="font-size: 20px;">
            </div>
            <div class="checkbox">
              <label style="border-radius:4px; font-size: 20px; font-family: Arial;">
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            <input name="login" class="btn btn-default" style="border-radius:4px; font-size: 18px; font-family: Arial;" type="submit" value="Login">
            <button class="btn btn-default" type="button" style="border-radius:4px; font-size: 18px; font-family: Arial;" class="cancelbtn" >Cancel</button>
            <br>
            <span style="border-radius:4px; font-size: 18px; font-family: Arial;color: rgb(192, 18, 18);"><a href="#" style="color:rgb(192, 18, 18) ;">Forgot password?</a></span>
            <br>
          </form><br><br>
        
            
          

          </div>
          
</body>
</html>