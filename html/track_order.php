<!doctype html>
<html>
<head>
<title>track_order</title>
<link type="text/css" rel="stylesheet" href="../css/home.css">
<link type="text/css" rel="stylesheet" href="../css/track.css">
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
h4,input{
font-size:20px;
}

</style>
<style>
table{
margin:auto;
}
</style>
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
<li><a href="login_home.php"><i class="fa fa-home"></i>home</a></li>
<li><a href="food_menu.php">food menu</a></li>
<li><a href="my_orders.php">my_orders</a></li>

<li><a href="track_order.php">track order</a></li>
</ul>
</div>
</nav>

<div id="loc" class="col-md-12 well"><b>Home / Track Order</b>  
<?php 
if(isset($_GET['mes']))
{
$mes=$_GET['mes'];
echo '<b style="float:right;  font-size:30px;">'.$_GET['mes'].'</b>';
}
?>
</div>

<div id="contain">
<div id="lft">
<img src="../images/track.gif" id="limage">
</div>
<fieldset id="register">


<form action="track_order.php" method="post" autocomplete="off">

<table style="border-collapse:separate; border-spacing:10px;" border="0">

<tr>
<td> <center><h1 Style="font-family: 'Kalam', ;">Track <i class="fa fa-truck"></i></h1><center></td>
</tr>
<tr>
<td><h4>Order Number</h4></td>
</tr>
<tr>
<td><input type="text" placeholder="Your Order Number" class="text" name="oid"></td>
</tr>
<tr>
<td colspan="2" align="left"><input type="submit"  value="check status" class="btn" id="trck"></td>
<td></td>
</tr>
</table>
</form>


</fieldset>

<?php

include "database.php";

if(isset($_POST["oid"]))
{
$oid=$_POST["oid"];

$sql="select * from status s inner join user u on s.uid=u.uid and status='ordered' and order_id='$oid'";

$res=$con->query($sql);
if($res->num_rows>0)
{
      $i=0;
	  
        while($row=$res->fetch_assoc())
		{
		$i=$i+1;
		
		echo '
		<br/>
		<br/>
		<br/>
		<br/>
		<table border="0"  class="table table-hover" >
		<thead>
		<tr><thcolspan="3"><center><b style="font-size:40px; text-align:center;">User Details</b></center></th></tr>
		
		<th><b class="normal">slno:</b></th>
		<th><b class="normal">order_id:</b></th>
		<th><b class="normal">uid:</b></th>
		<th><b class="normal">status:</b></th>
		<th><b class="normal">date:</b></th>
		<th><b class="normal">name:</b></th>
		<th><b class="normal">time:</b></th>';
		?>
		
		<?php
		$oid=$row['order_id'];
		
		$sql2="select * from dilvery where oid='$oid'";
		
		$res2=$con->query($sql2);
		
		if($res2->num_rows>0)
		{
		 echo '<th><b class="normal"> deliver-name:</b></th>
		<th><b class="normal">mobile no:</b></th>';
		
		}
		?>
		<?php
		echo '
			
		</thead>
		<tbody>
		<tr>
		<td>'.$i.'
		</td>
		<td>'.$row['order_id'].'</td>
	    <td>'.$row['uid'].'</td>
		<td style="color:sucess;">'.$row['status'].'</td>
		<td>'.$row['date'].'</td>
	    <td>'.$row['fname'].'</td>
		<td>'.$row['time'].'</td>';
		
		
		
		$oid=$row['order_id'];
		
		$sql2="select * from dilvery where oid='$oid'";
		
		if($res2=$con->query($sql2))
		{
			$row2=$res2->fetch_assoc();
		echo'<td>'.$row2['dname'].'</td>
	    <td>'.$row2['dmob'].'</td>
		
		</tr>';
		}
	

		}
		
		
}		
		

else
{
	echo 'no records found';
}	
}

?>
</tbody>
</table>
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
<td><a href="my_orders.php">My order</a></td>
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