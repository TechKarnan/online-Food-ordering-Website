<?php
include "database.php";
?>

<!doctype html>
<html>
<head>
<title>search results</title>
<link type="text/css" rel="stylesheet" href="../css/cart1.css">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

</head>













<body>
<nav id="nav" class="col-md-12">
<div id="banner">
<a href="index.html">Food ordering System</a>
</div>
<div id="navbar">
<ul>
<li><a href="login_home.php"><i class="fa fa-home"> home</i></a></li>
<li><a href="food_menu.php">food menu</a></li>
<li><a href="my_orders.php">my_orders</a></li>

<li><a href="track_order.php">track order</a></li>
</ul>
</div>
</nav>

<div id="loc" class="col-md-12 well"> <b>Home/My_Orders</b>
</div>

<div id="container">
<div id="dlimage">

</div>
<div id="lft1">
<table border="0" class="table  table-hover " width="300px" height="500px">
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
	
	echo "<tr><td><a href='f1.php' >".$row["category"]."</a></td></tr>";
	$i=$i+1;
}

}
?>




</tbody>
</table>
</div>

<div id="order">
<?php




if(isset($_GET['search']))
	
{


	
	      $key=$_GET['search'];
    

	$sql="select * from add_food where fname like '%{$_GET["search"]}%' or keyword like'%{$_GET["search"]}%'"; 
	
	$res=$con->query($sql);
 
 if($res->num_rows>0)
    {
	
	
	 for($i=1;$i<=1;$i++)
        {
             if($row=$res->fetch_assoc())
                {
		 
		               $_SESSION['fid']=$row['fid'];

                       echo "<div id='contianer1' class='col-md-4 well'>
 
                       <div class='a'>
	                   <img width='100%' height='300px' src='data:image;base64,{$row['image']}'>
                       <b style='color:#FF4500;'><h2>".$row['fname']."</h2></b>
                       <b><h4>".$row["hint"]."</h4></b>
                       <b class='rate'>".$row["price"]."</b> 
	   
                       <a href='database/order.php?fid=".$row["fid"]."' class='square_btn' target='cart.php' >Order Now</a>
                       </div>
     
	                   </div>";
                }
	    }
    }	
 


 
}
?>


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
<td><a href="track_order.html">track order</a></td>
<th> <a href = "admin.html">login</a></th>
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