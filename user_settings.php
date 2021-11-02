<?php
    session_start();
    require 'dbconfig/config.php'
?>
<!DOCTYPE html>
<html>
<head>
        <title>Settings</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="logged.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
</head>
    <body>
        <header style="font-family: 'Times New Roman', Times, serif;">
	<div class="topnav" style="list-style: none;" id="navbarNavDropdown">
			  
				<li>	
				  <a class="active" href="home1.php" >Home </a>
				</li>
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Templates
				  </a>
				  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: black;">
					<a class="dropdown-item" href="#">CSE/ISE</a>
					<a class="dropdown-item" href="#">ECE/EEE</a>
					<a class="dropdown-item" href="#">MECH / CIVIL</a>
				  </div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#Aboutus">About Us</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				  </li>
				<li class="nav-item" style="float: right;">
					<a class="nav-link" href="home1.php" >Sign-Out</a>
				  </li>
				  <li class="nav-item dropdown" style="float:right;">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $_SESSION['name'] ?>
				  </a>
				  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: black;">
					<a class="dropdown-item" href="logged.php">My Templates</a>
					<a class="dropdown-item" href="user_settings.php">Settings</a>
				  </div>
				</li>
			</div>
	</header><br><br><br><br>
    <h1 style="font-size: 30px; font-family:'Times New Roman', Times, serif; color:#000000;"><?php echo $_SESSION['name'] ?></h1><br>
    <h2 style="font-size: 25px; font-family:'Times New Roman', Times, serif; color:#000000;"><b>Profile Settings:</b></h2><br><br>
    <form action="user_settings.php" method="post">
    <div class="form-group">
    <ul style="list-style:none;">
    
        <li><label style="font-size: 20px; font-family:'Times New Roman', Times, serif; color:#000000;"><b>Enter new e-mail:</b></label><br>
        <input type="text" name="email"  placeholder="Enter e-mail" style="font-size: 20px;">
            <input name="save" class="btn btn-default" style="border-radius:4px; font-size: 18px; font-family: 'Times New Roman', Times, serif; margin-left: 5%;" type="submit" value="Save"></li><br><br>
        
            <li><label style="font-size: 20px; font-family:'Times New Roman', Times, serif; color:#000000;"><b>Enter new password:</b></label><br>
            <input type="password" name="password"  placeholder="Enter new password" style="font-size: 20px;">
            <input name="save1" class="btn btn-default" style="border-radius:4px; font-size: 18px; font-family: 'Times New Roman', Times, serif; margin-left:5%;" type="submit" value="Save"></li>
            <br>
        </ul>
        <input id="savefinal" name="saved" class="btn btn-default" style="border-radius:4px; font-size: 18px; font-family: 'Times New Roman', Times, serif; margin-left:2%;margin-top:10%;" type="button" value="Save Changes">
        <button class="btn btn-default" type="button" style="border-radius:4px; font-size: 18px; font-family: 'Times New Roman', Times, serif; margin-left:5%; margin-top:10%;" ><a style="color:black;" href="logged.php">Cancel</a></button><br><br>
</div>
    </form>

   <script type='text/javascript'>
    document.getElementById('savefinal').addEventListener('click',function(){
        Swal.fire(
  'Saved!',
  'Have a good day',
  'Changes'
)
    })
    
</script>



        <?php
            if(isset($_POST['save']))
            {
                $email= $_POST['email'];
               
                $name = $_SESSION['name'];
                $sql = "update userinfo set email = '$email' WHERE name='$name'";
                $sql_run = mysqli_query($con, $sql);
                echo "<script type='text/javascript'>Swal.fire('E-mail updated')</script>";
            }
            else if(isset($_POST['save1']))
            {
                $password = $_POST['password'];
                $name = $_SESSION['name'];
                $sql = "update userinfo set password = '$password' WHERE name='$name'";
                $sql_run = mysqli_query($con, $sql);
                echo "<script type='text/javascript'>Swal.fire('Password updated')</script>";
            } 
            
        ?>
</body>

</html>
