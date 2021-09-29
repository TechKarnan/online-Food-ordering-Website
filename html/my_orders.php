
<?php
include "database.php";
session_start();
$uid=$_SESSION['uid'];
?>
<!doctype html>
<html>
<head>
<title>my_orders</title>
<link type="text/css" rel="stylesheet" href="../css/my_orders.css">
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
table
{
margin:auto;
}

</style>


</head>








</body>



<nav id="nav" class="col-md-12">
<div id="banner">
<a href="index.html">Food ordering System</a>
</div>
<div id="navbar">
<ul>
<<li><a href="login_home.php"><i class="fa fa-home"></i>home</a></li>
<li><a href="food_menu.php">food menu</a></li>
<li><a href="my_orders.php">my_orders</a></li>

<li><a href="track_order.php">track order</a></li>
</ul>
</div>
</nav>

<div id="loc" class="col-md-12 well" width="30px"><b>Home/sign_in/cart</b>
</div>


<div id="container">



<div id="cart">
<div id="lft">
<iframe name="frm"  id="frm1" src="booked.php">
</iframe>

<div id="btn">


</div>
</div>

</div>


<div id="rft">

<?php

$sql="select * from cart where uid=$uid";
 
 $res=$con->query($sql);
if($row=$res->fetch_assoc())
{
	echo '<form method="post" action="database/cart.php">
<table border="1" class="table  table-hover well " width="100px" height="300px">
<thead>
<tr><td id="head"><b>Your cart Shopping<b><i class="fa fa-shopping-cart"></i></td></tr>
</thead>
<tbody>
<tr><td><input type="text" class="text"  name="flat"   value='.$row['flat'].' > </td></tr>
<tr><td><input type="text" class="text"  name="street" value='.$row['street'].'  > </td></tr>
<tr><td><input type="text" class="text"  name="area"   value='.$row['area'].'  > </td></tr>
<tr><td><input type="text" class="text"  name="city"   value='.$row['city'].'  > </td></tr>
<tr><td><input type="text" class="text"  name="land"   value='.$row['land'].' > </td></tr>
<tr><td><input type="text" class="text"  name="pin"    value='.$row['pin'].' > </td></tr>

<tr><td align="center"><input type="submit" class="btn btn-primary" id="place" value="Place Your Order" ></td></tr>
</tbody>
</table>
</form>';
	
	
	
}
else
{

echo '<form method="post" action="database/cart.php">
<table border="1" class="table  table-hover well " width="100px" height="100px">
<thead>
<tr><td id="head"><b>Your cart Shopping<b><i class="fa fa-shopping-cart"></i></td></tr>
</thead>
<tbody>
<tr><td><input type="text" class="text" placeholder="Flat No 123" name="flat"></td></tr>
<tr><td><input type="text" class="text" placeholder="Street ABC" name="street"></td></tr>
<tr><td><input type="text" class="text" placeholder="XYZ Area" name="area"></td></tr>
<tr><td><input type="text" class="text" placeholder="city" name="city"></td></tr>
<tr><td><input type="text" class="text" placeholder="Landmark" name="land"></td></tr>
<tr><td><input type="text" class="text" placeholder="pincode" name="pin"></td></tr>

<tr><td align="center"><input type="submit" class="btn btn-primary" id="place" value="Place Your Order" ></td></tr>
</tbody>
</table>
</form>';
}
?>




 <div id="auto">
<script>
$(document).ready(function()
{
	setInterval(function(){
	$("#auto").load("cash.php");
	refresh();
},1000);
});
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
<table style="border-collapse:separate; border-spacing:50px;" >
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

<td align="center"><a href="#">about us</a></td>
<td align="center"><a href="track_order.php">track order</a></td>
<td align="center"><a href="my_orders.php">My order</a></td>
<th> <a href = "admin.php">login</a></th>
</tr>
<tr>
<td></td>
<td align="center"><a href="#">contact us</a></td>

</tr>

</tbody>
</table>
</div>


</body>




</html>