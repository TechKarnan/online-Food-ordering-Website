
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
<<li><a href="login_home.html"><i class="fa fa-home"></i>home</a></li>
<li><a href="food_menu.html">food menu</a></li>
<li><a href="my_orders.html">my_orders</a></li>
<li><a href="cart.html">cart</a></li>
<li><a href="track_order.html">track order</a></li>
</ul>
</div>
</nav>

<div id="loc" class="col-md-12 well"> <b>Home/sign_in/cart</b>
</div>


<div id="container">



<div id="cart">
<div id="lft">
<iframe name="frm"  id="frm1" src="star1.php">
</iframe>

<div id="btn">
<a href="star1.php" target="frm" class="btn btn-danger " ><b>first</b></a>
<a href="#"  class="btn btn-info"><b><< prev </b></a>
<a href="#"  class="btn btn-info"><b>next >></b></a>
<a href="#"  class="btn btn-info"><b>last</b></a>
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
<table border="1" class="table  table-hover well " width="100px" height="600px">
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
<table border="1" class="table  table-hover well " width="100px" height="600px">
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
<?php
if(isset($_GET["mes"]))
{
 echo $_GET["mes"];
}
?>

<center><h4><b>Total</b></h4></center>

</div>
</div>































<div id="footer">


<center><h1> Easy 3 step Order</h1></center>
<table style="border-collapse:separate; border-spacing:50px;">
<thead>
<tr>
<th>Food ordering</th>
<th>About Us</th>
<th>My Account</th>
<th>Track Order</th>
<th>Admin</th>
</tr>
</thead>

<tbody>
<tr>
<td><a href="#">order Delivery</a></td>
<td><a href="#">about us</a></td>
<td><a href="#">my profile</a></td>
<td><a href="#">track order</a></td>
<td><a href="#">login</a></td>
</tr>
<tr>
<td></td>
<td><a href="#">contact us</a></td>
<td><a href="#">My cart </a></td>
</tr>
<tr>
<td></td>
<td></td>
<td><a href="#">My order</a></td>
</tr>
</tbody>
</table>
</div>


</body>




</html>