<!doctype html>
<html>
<head>
<title>signup</title>
<link type="text/css" rel="stylesheet" href="../css/sign_up.css">
<link type="text/css" rel="stylesheet" href="../css/home.css">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
<meta charset="utf-8">
<meta name="veiwport" content="width=device-width,initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">

</head>













<body>
<nav id="nav">
<div id="banner">
<a href="index.html">Food ordering System</a>
</div>
   <div id="navbar" >
    <ul>
       <li><a href="index.php">home</a></li>
       
       <li><a href="sign_up.php">sign up</a></li>
       <li><a href="sign_in.php">sign in</a></li>
       
   </ul>
  </div>
</nav>
<div id="loc" class="col-md-12 well"><b id="b1">Home /Sign Up</b>
</div>

 <div id="contain">
<div id="lft">
<img src="../images/signup.jpeg" id="limage">
</div>
     <div id="a1">
	   <div id="user_login">	
			<center><h1>Register Here</h1></center>
           



		   <form action="database/sign_up.php" method="post" autocomplete="off">
			 <table style="border-collapse:separate; border-spacing:20px;" width="100%" border="0">
				<tr>
				<td>First name:</td>
				<td>Last name:</td>
				</tr>
				<tr>
				<td><input type="text" name="fname" class="text" placeholder="first name" required></td>
				<td><input type="text" name="lname"  class="text" placeholder="last name" required></td>
				</tr>
			    <tr>
				<td>Email id:</td>
				<td>Mobile no:</td>
                </tr>
                <tr>
				<td><input type="text"  class="text" placeholder="email-id" name="umail" onchange="validate()" id="mail" required></td>
				<td><input type="number"  class="text" placeholder="mobile-no" name="mob" required></td>
                </tr>	
                <tr>
				<td>Password:</td>
				<td>Repeat Password:</td>
                </tr>
                <tr>
				<td><input type="password"  class="text" placeholder="password" name="upass" required></td>
				<td><input type="password"  class="text" placeholder="re-type" required></td>
                </tr>
				 <tr>
				<td><input id="submit" type="submit" value="Rigster" class="btn btn-primary btn-lg"></td>
				<td><a href="sign_in.php" id="login" class="btn btn-danger btn-lg">Login</a></td>
                </tr>
				
			    </table>
            </form>
            
			<?php
			if(isset($_GET['mes']))
			{
				echo $_GET['mes'];
			}
			?>
            			
	   </div>
	 </div>  
	   </div>
  </div>




<script>

function validate()
{
	var result=document.getElementById("mail").value;
	var r=result.search(/[a-zA-Z]+@gmail|yahoo.com/i);
	if(r<0)
	{
	alert("pease enter valid E-Mail id");
	}
}

</script>















<div id="footer">
<style>
table
{
margin:auto;
}
</style>

<center><h1> Easy 3 step Order</h1></center>
<table style="border-collapse:separate; border-spacing:50px;">
<thead>
<tr>

<th>About Us</th>
<th>My Account</th>
<th>Track Order</th>
<th>Admin</th>
</tr>
</thead>

<tbody>
<tr>

<td><a href="#">about us</a></td>
<td><a href="track_order.php">track order</a></td>
<td><a href="#">My order</a></td>
<th> <a href = "admin.php">login</a></th>
</tr>
<tr>
<td></td>
<td><a href="#">contact us</a></td>

</tr>

</tbody>
</table>
</div>
</body>
</html>