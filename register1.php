<?php
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register/ Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="bg">
          <form action = "register1.php" method="post" style="font-size: 40px; font-family:'Times New Roman', Times, serif; margin-top: 100px; color:#FFFFFF;"  >LOGIN!!
            <div class = "form-group">
              <label style="font-size: 30px; font-family:'Times New Roman', Times, serif; color:#000000;"><b>Username</b></label><br>
              <input name = "username" type="text" class="form-control" placeholder="Enter Username" required style="font-size: 20px;" >
            </div>
            <div class = "form-group">
              <label style="font-size: 30px; font-family:'Times New Roman', Times, serif; color:#000000;"><b>Password</b></label><br>
              <input name = "password" type="password" class="form-control" placeholder="Enter Password" required style="font-size: 20px;" ><br>
              <labe style="font-size: 30px; font-family:'Times New Roman', Times, serif; color:#000000;"><b>Confirm Password</b></label><br>
              <input name = "cpassword" type="password" class="form-control" placeholder="Enter Password" required style="font-size: 20px;">
            </div>
            <input name = "submit_btn" class="btn btn-default" style="border-radius:4px; font-size: 18px; font-family: Arial;" type="submit" value="Register">
            <button class="btn btn-default" type="button" style="border-radius:4px; font-size: 18px; font-family: Arial;" class="cancelbtn" >Cancel</button>
            <br>
          </form><br><br>
          <?php
            if(isset($_POST['submit_btn']))
            {
                //echo '<script type="text/javascript"> alert("Signup clicked") </script>';
                $username = $_POST['username'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];

                if($password==$cpassword)
                {
                    $query = "select * from userinfo WHERE username='$username'";
                    $query_run = mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                        echo '<script type="text/javascript">alert("User exists try other name")</script>';
                    }
                    else{
                        $query = "insert into userinfo values('$username','$password')";
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