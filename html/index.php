

<?php
session_start();
include "database.php";
 $_SESSION['no']=0;

?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>home page</title>
<link type="text/css" rel="stylesheet" href="../css/home.css">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">



<style>
<?php
$sql1="select *from banner";
$res1=$con->query($sql1);
$row1=$res1->fetch_assoc();
echo '
#image
{
	height:380px;
	width:100%;
	background:url("database/images/'.$row1['bname'].'");
	background-size:cover;
	
}';
?>


</style>



</head>













<body>
<nav id="nav">
<div id="banner">
<a href="index.html">Food ordering System</a>
</div>
<div id="navbar">
<ul>
<li><a href="sign_up.php"><i class="fa fa-user">New User</i></a></li>
<li><a href="sign_in.php"><i class="fa fa-users">User Login</i></a></li>
<li><a href="admin.php"><i class="fa fa-address-book">Admin Login</i></a></li>
</ul>
</div>
</nav>



<?php

$sql="select *from main";
$res=$con->query($sql);
$i=0;

while($row=$res->fetch_assoc())
{
	$name[$i]=$row['fname'];
	$iname[$i]=$row['iname'];
	$price[$i]=$row['price'];
	$hint[$i]=$row['hint'];
	
	
	$i=$i+1;
}
 
?>

<div id="image" >

</div>
<div id="menu">
<div style="line-height:50px">
<center><h3>Popular Delicious Foods here:All over</h3></center>
<hr>
</div>
<div id="head">
<center>
<b><h1>Popular This Month In Your City</h1><b>
<b><h5>The easiest way to get your favourite food</h5><b>
</center>
</div>

<div id="container1">
<?php echo '<div class="a"><img src="database/images/'.$iname[0].'" height="200px"  width="100%">
<b style="color:#FF4500;"><h2>'.$name[0].'</h2></b>
<b><h4>'.$hint[0].'</h4></b>
<b class="rate">'.$price[0].'</b> 
<a href="#" class="square_btn" onclick="val()">Order Now</a>
</div>';
?>

<?php echo '<div class="a"><img src="database/images/'.$iname[1].'" height="200px"  width="100%">
<b style="color:#FF4500;"><h2>'.$name[1].'</h2></b>
<b><h4>'.$name[1].'</h4></b>
<b class="rate">'.$name[1].'</b> 
<a href="#" class="square_btn" onclick="val()">Order Now</a>
</div>';
?>

<?php echo '<div class="a"><img src="database/images/'.$iname[2].'" height="200px"  width="100%">
<b style="color:#FF4500;"><h2>'.$name[2].'</h2></b>
<b><h4>'.$name[2].'</h4></b>
<b class="rate">'.$price[2].'</b> 
<a href="#" class="square_btn" onclick="val()">Order Now</a>
</div>'?>
</div>


<div id="container2">

<?php echo '<div class="a"><img src="database/images/'.$iname[3].'" height="200px"  width="100%">
<b style="color:#FF4500;"><h2>'.$name[3].'</h2></b>
<b><h4>'.$name[3].'</h4></b>
<b class="rate">'.$price[3].'</b> 
<a href="#" class="square_btn" onclick="val()">Order Now</a>
</div>'
?>

<?php echo '<div class="a"><img src="database/images/'.$iname[4].'" height="200px"  width="100%">
<b style="color:#FF4500;"><h2>'.$name[4].'</h2></b>
<b><h4>'.$name[4].'</h4></b>
<b class="rate">'.$price[4].'</b> 
<a href="#" class="square_btn" onclick="val()">Order Now</a>
</div>'
?>

<?php echo '<div class="a"><img src="database/images/'.$iname[5].'" height="200px"  width="100%">
<b style="color:#FF4500;"><h2>'.$name[5].'</h2></b>
<b><h4>'.$name[5].'</h4></b>
<b class="rate">'.$price[5].'</b> 
<a href="#" class="square_btn" onclick="val()">Order Now</a>
</div>'
?>

</div>

<div id="container3">

<?php echo '<div class="a"><img src="database/images/'.$iname[6].'" height="200px"  width="100%">
<b style="color:#FF4500;"><h2>'.$name[6].'</h2></b>
<b><h4>'.$name[6].'</h4></b>
<b class="rate">'.$price[6].'</b> 
<a href="#" class="square_btn" onclick="val()">Order Now</a>
</div>'
?>

<?php echo '<div class="a"><img src="database/images/'.$iname[7].'"  height="200px"  width="100%">
<b style="color:#FF4500;"><h2>'.$name[7].'</h2></b>
<b><h4>'.$name[7].'</h4></b>
<b class="rate">'.$price[7].'</b> 
<a href="#" class="square_btn" onclick="val()">Order Now</a>
</div>'
?>

<?php echo '<div class="a"><img src="database/images/'.$iname[8].'" height="200px"  width="100%">
<b style="color:#FF4500;"><h2>'.$name[8].'</h2></b>
<b><h4>'.$name[8].'</h4></b>
<b class="rate">'.$price[8].'</b> 
<a href="#" class="square_btn" onclick="val()">Order Now</a>
</div>'
?>


</div>

<script>
function val()
{
	alert("please login using email-id and password");
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
<th>emp_login</th>
</tr>
</thead>

<tbody>
<tr>

<td><a href="#">about us</a></td>
<td><a href="track_order.php">track order</a></td>
<td><a href="#">My order</a></td>
<th> <a href ="admin.php">Login</a></th>
<td><a href="emp_login.php">Emp_Login</a></td>
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