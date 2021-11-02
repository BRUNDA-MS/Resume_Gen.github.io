<?php
    session_start();
    require 'dbconfig/config.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Page</title>
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
                  <?php 
                $var= $_SESSION['email'];
                $query = "select * from userinfo WHERE email='$var'";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result))
                 {
                     $_SESSION['name'] =$row['name'];
                     
                    echo $row['name'];
                }
        ?>
				  </a>
				  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: black;">
					<a class="dropdown-item" href="logged.php">My Templates</a>
					<a class="dropdown-item" href="user_settings.php">Settings</a>
				  </div>
				</li>
			</div>
	</header>
    <br><br><br><br><br>
    <div>
    <h1>Hello</h1>
       
	</div>
    
</body>
    </html>