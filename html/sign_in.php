<?php
include "database.php";
?>





<!doctype html>
<html>
<head>
<title>sign_in</title>
<link type="text/css" rel="stylesheet" href="../css/home.css">
<link type="text/css" rel="stylesheet" href="../css/sign_in.css">

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
<style>
table
{
margin:auto;
}
</style>

<script type="text/javascript">
function preback(){ window.history.forward(); }
setTimeout("preback()",0);
window.onunload=function(){null};
</script>



</head>













<body>
<nav id="nav">
<div id="banner">
<a href="index.html">Food ordering System</a>
</div>
<div id="navbar">
<ul>
<li><a href="index.php">home</a></li>

<li><a href="sign_up.php">sign up</a></li>
<li><a href="sign_in.php">sign in</a></li>

</ul>
</div>
</nav>
<div id="loc" class="col-md-12 well "><b id="b1">Home/Sign_in</b>
</div>
<div id="lft">
<img src="../images/login.gif" id="limage" class="image-thumbnail">
</div>




<div id="contain">


<div id="a1">
<div id="register">
<center><h1>Login</h1></center>



<form action="database/sign_in.php" method="post" autocomplete="off">
<table style="border-collapse:separate; border-spacing:10px;" border="0">
<tr>
<td>registered email-id or mobile number</td>
</tr>
<tr>
<td><input type="text" placeholder="registered email-id or mobile number" class="text" name="umail" id="mail" onchange="validate()"></td>
</tr>
<tr>
<td>password</td>
</tr>
<tr>
<td><input type="password" placeholder="password" class="text" name="upass"></td>
</tr>
<tr>
<td><button type="submit" class="btn btn-primary btn-lg" id="submit1" name="submit" onclick="validate();">login</button></td>
<td><a href="sign_up.html" class="btn btn-danger btn-lg" id="login">register</a></td>
</tr>
</table>
</form>

<?php
if(isset($_GET["mes"]))
{
	$mes=$_GET["mes"];
	if($mes==1)
	{
        echo "<script> alert('please enter valid email and password')</script>";
    }
   else
    {
	    echo "<script> alert('please fill all fields')</script>";
    }
}
?>

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




</div>
</div>
</div>













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