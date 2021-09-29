<?php
include "database.php";
session_start();
?>
<!doctype html>
<html>
<head>
<title>food_menu</title>
<link type="text/css" rel="stylesheet" href="../css/food_menu.css">
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













<body>
<nav id="nav" class="col-md-12">
<div id="banner">
<a href="index.html">Food ordering System</a>
</div>
<div id="navbar">
<ul>
<<li><a href="login_home.html"><i class="fa fa-home"> home </i></a></li>
<li><a href="food_menu.html">food menu</a></li>
<li><a href="my_orders.php">my_orders</a></li>
<li><a href="cart.html">cart</a></li>
<li><a href="track_order.html">track order</a></li>
</ul>
</div>
</nav>


<div id="loc" class="col-md-12 well"> <b>Home/Food_Menu</b>  <?php
if(isset($_GET['mes']))
{
$mes=$_GET['mes'];
echo '<b style="float:right;">'.$_GET['mes'].'</b>';
}
?>
</div>

<div id="container">
<div id="lft">
<table border="0" class="table  table-hover " width="300px" height="700px">
<thead>
<tr><td id="head">Food Categories<i class="fa fa-utensils"></i></td></tr>
</thead>
<tbody>

<?php

$sql="select category from category";

$res=$con->query($sql);
if($res->num_rows>0)
{

$i=1;
while($row=$res->fetch_assoc())
{
	
	echo "<tr><td><a href='page1.php?mes=$i' target='frm'>".$row["category"]."</a></td></tr>";
	$i=$i+1;
}

}
?>
</tbody>
</table>
</div>

<?php
if(isset($_SESSION['fid']))
{
$fid=$_SESSION['fid'];

}

?>

<div id="menu">
<iframe name="frm"  id="frm1" src="page1.php">
</iframe>
<div id="page">
<a href="page1.php" target="frm" class="btn btn-danger"><b>first</b></a>
<a href="page2.php?lfid=<?php echo $fid;?> " target="frm" class="btn btn-info"><b>page 2 </b></a>
<a href="page3.php?lfid=<?php echo $fid;?>  " target="frm"   class="btn btn-info"><b>page 3</b></a>
<a href="page4.php?lfid=<?php echo $fid;?>  " target="frm"  class="btn btn-info"><b>page 4</b></a>
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
<th>Food ordering</th>
<th>About Us</th>
<th>My Account</th>
<th>Track Order</th>
<th>Admin</th>
</tr>
</thead>

<tbody>
<tr>
<td><a href="cart.html">order Delivery</a></td>
<td><a href="#">about us</a></td>
<td><a href="#">my profile</a></td>
<td><a href="track order.html">track order</a></td>
<th> <a href = "adminn.php">login</a></th>
</tr>
<tr>
<td></td>
<td><a href="#">contact us</a></td>
<td><a href="cart.html">My cart </a></td>
</tr>
<tr>
<td></td>
<td></td>
<td><a href="my_orders.html">My order</a></td>
</tr>
</tbody>
</table>
</div>
</body>
</html>