
<!DOCTYPE html>
<html>
<head>
	<title>GoResume</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resume_style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    body{
    /*background: url("https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80");*/
    background-size: cover;
    background: linear-gradient(50deg, rgb(59, 58, 58) 20px, rgb(204, 204, 255));
    margin: 0%;
    
    scrollbar-width: thin;
}
.topnav {
    
    background-color: #230c33;
    position: fixed;
    top: 0;
    width: 100%;
    
}

.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 10px 20px;
    text-decoration: none;
    font-size: 20px;
}

.topnav a:hover, .dropdown:hover .dropbtn {
    background-color: #73648A;
    color: black;
}

.topnav a.active {
    background-color: #b27c66;
    color: #453750;
}
.social_media{
	border: solid black 2vw;
	font-family: 'Times New Roman', Times, serif;
	float: left;
    color: #f2f2f2;
    text-align: center;
    list-style: none;
    font-size: 3vw;
    
    margin: 5vw;
}
.footerbg{
	background-color: black;
}
    </style>
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
					<a class="dropdown-item" href="templates.php">CSE/ISE</a>
					<a class="dropdown-item" href="templates.php">ECE/EEE</a>
					<a class="dropdown-item" href="templates.php">MECH / CIVIL</a>
				  </div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="About.php">About Us</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				  </li>
				<li class="nav-item" style="float: right;">
					<a class="nav-link" href="Login1.php" >Sign-In</a>
				  </li>
				  <li class="nav-item" style="float: right;border-right:1px solid #bbb;">
					<a class="nav-link" href="register1.php" >Sign-Up</a>
				  </li>
			 
			</div>
	</header><br><br><br><br>
	
	<footer id="contact">
		<p style="font-family:'Times New Roman', Times, serif; font-size: 3vw;">Follow us on social media for more updates</p>
		<ul>
			<li class="social_media"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAb1BMVEU7V53///8gRZUyUZrn6vKKl785VZxAW6Dh5O5yg7QmSZbR1uUxUJojR5Y2U5vx8vdbcKqyutSXosVidq3a3urM0uPCyd6ps9B7i7n09vrx9Pm4wNikrs1MZKRYbqp/j7tqfbGapsiPnMIAMY0VP5JdM9iBAAAD+UlEQVR4nO3dbVOjMBSG4fDSUEISXtRatta67v7/37hF7eiMs5iKyTmHee4Zx08i13RIhACq7K1mqCu1lqp6aC4w9fqtr5z1mnrHfiztrav6D8K2M+vRXdKmay/CsiiodydKRVG+ClvrqfclUt62L8JunZ/gVNFNwt5Q70fETH8WVusbZN7TVaYaR70XUXONGiz1TkTNDqpe60D6mq/Vqg/D6UCk3gOEEEIIIYQQQgghhMjz1hr3ofz8ZZwxxlpbFFr2NUJ9tvmbzf2u2ZbjmGXZOI6/2rLc3jZ3u0P/MGz2N0dtnZPJ9NYdN7sy+7p2q+QRtc0f70N0b0vY0tLGDuE8eUJtdH8NT5zQ2vsrfbKEOj+NVwMlCQvffO2RLDRP3/EJEubD94BihPm1Q6g0Yb77LlCIcAFQhtBdPwvKEprNAqAEoX9cAhQg1KZdudB9e54QIvTdMiB/Yb5dubA4LQSyF7qrzucFCpd/hNyFi49C7kK9dCBlLzSH1QuXA3kLi/3ahWbBaaEMoVv2Nzd/4cLTJgFC+3ydpd3eNp+65bz2dMVhOB5ORzstjX6OMVC50D9otntnJK74ahsIHHKhDw/qYxjwRuyzg0UdBKzlPncWNpQeBD86GLYaKvQQfCnoxOIg9iA8Z+4ChE+Sn410IUu+Vt4s+F7IhL8VPM6ECXeSD0OVB1xIvJc7Gaow4e/VC59XL9xInvAhhFBAEELIPwgh5B+EEPIPQgj5ByGE/INQhlD/vzChndnCy1aoq2YyIUI9t4UpWqMPW+VdUkl72T9wHXtJd6sX9rQXxRMIid+fm0C4p51OEggfaVfBEwiJl/njC0fiVfD4Qup1/vhC6nX++ELqdf74QupV8PhC6lum4guPxKdP8YXUd3lHF7bUN4VFF96uXkg9HcYXPlDfMhVdSH4pLrrwhvoO4uhC8v+uEls4Ug800YUl9WQRXdis/jOkfxgjtpD+HunYwj31ZBFd2FFPFtGF1L7oQvrpMLaQ+lJifCHxytqUfyq3MwUg5n6+JD93mohupj8Bq9ynvzMbYACcbx33YswFIYT8gxBC/kEIIf8ghJB/EELIPwgh5B+EEPIPQgj5ByGE/IMQQv5BCCH/IISQfxBCyD8IIeQfhBDyD0II+QchhPyDEEL+QQgh/yCEkH8QQsg/CCHkH4QQ8g9CCPmXUEj01rNUQl2pmuZlRKmEvlZE76ZPJbSDamjeZJNK6BpF9PrBREJdZSrrSV7Wk0ho+rMw6yimnTTCossmYWsJhtMkQm/bF2FW2vSfYgphYadfMgmztkv+auz4Qm26NrsIs6yvnPUplXGF2ltX9a9bUZfNNUNd/SThi+IKq3poLlv5B3kiS8fmdy97AAAAAElFTkSuQmCC" height="50" width="50"> Facebook</li>
			<li class="social_media"><img src="https://assets.teenvogue.com/photos/573b7d4e0e9d16a80fb5f9c0/master/pass/instagram-hack.jpg" height="50" width="50"> Instagram</li>
			<li class="social_media"><img src="https://static01.nyt.com/images/2014/08/10/magazine/10wmt/10wmt-superJumbo-v4.jpg" height="50" width="50"> Twitter</li>
		</ul>
	</footer>

</body>
</html>