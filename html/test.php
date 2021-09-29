<?php
session_start();


   if($_SESSION['apass']==0)
   {
	  header("location:admin.php");
   }
?>




<?php
include "database.php";
?>
  
<?php
$sql="select * from status where status='ordered'";
   
$res1=$con->query($sql);
   
$ordered=$res1->num_rows;
   


$sq2="select * from status where status='confirmed'";
   
$res2=$con->query($sq2);
   
$confirmed=$res2->num_rows;



$sq3="select * from status where status='dilvered'";
   
$res3=$con->query($sq3);
   
$dilvery=$res3->num_rows;


$sq4="select * from status where status='preparing'";
   
$res4=$con->query($sq4);
   
$prepaing=$res4->num_rows;


$sq5="select * from status where status='ready'";
   
$res5=$con->query($sq5);
   
$pickup=$res5->num_rows;







$sq6="select * from status where status='cancelled'";
   
$res6=$con->query($sq6);
   
$cancelled=$res6->num_rows;



$sq7="select * from user ";
   
$res7=$con->query($sq7);
   
$user=$res7->num_rows;


$sq8="select * from status ";
   
$res8=$con->query($sq8);
   
$total=$res8->num_rows;
   







?>











<!DOCTYPE html>
<html>
<head>
<title>admin_dash_board</title>
<link type="text/css" rel="stylesheet" href="../css/dashboard.css">
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

<div id="dash">
 <div id="head">
 <b id="heading" align="center">food ordering!! </b><a href="order_details.php"><i class="fa fa-bell" id="bel"><b></b></i></a>



 <div id="lft">
 
 <div id="admin_pic">
 <img src="../images/admin.gif"  width="100%" height="200px">
 </div>
  
<div class="col-md-12" id="lft1">
<ul class="navbar nav ">
  <li><a href="dashboard.php"><i class="fa fa-tachometer" id="bel1"></i>dashboard</a></li>
  <li><a href="regusers.php">Reg Users</a></li>
  
  <li>
  <a href="#lists" data-toggle="collapse">Food category  <i class="fa fa-plus" id="bel1"></i></a>
  <ul class="nav collapse" id="lists">
  <li><a href="Food_category.php"> add Food Category</a></li>

  </ul>
  </li>
  
  <li>
  <a href="#lists1" data-toggle="collapse">Food Menu <i class="fa fa-plus" id="bel1"></i> </a>
  <ul class="nav collapse" id="lists1">
  <li><a href="add_food.php"> Add Food</a></li>
  <li><a href="food_details.php">Manage Food</a></li>
  </ul>
  </li>
  
  <li>
  <a href="#lists2" data-toggle="collapse">Orders  <i class="fa fa-plus" id="bel1"></i></a>
  <ul class="nav collapse" id="lists2">
  <li><a href="order_details.php"> Not confirmed Yet</a></li>
  <li><a href="confirmed.php">Order Confirmed</a></li>
   <li><a href="prepare.php">Food Being Prepared</a></li>
   <li><a href="pickup.php">Food Pickup</a></li>
    <li><a href="delivered.php">Food dilvery</a></li>
	<li><a href="cancelled">cancelled</a></li>
	<li><a href="all_orders.php">all orders</a></li>
  </ul>
  </li>
  
  

  <li>
  <a href="#lists3" data-toggle="collapse">delivery employees <i class="fa fa-plus" id="bel1"></i></a>
  <ul class="nav collapse" id="lists3">
  <li><a href="add_emp.php"> Add emp</a></li>
   <li><a href="assign.php">assign</a></li>
   <li><a href="delivery.php"> Delivery Emp Details</a></li>
  </ul>
  </li>
  
  <li>
  <a href="#list10" data-toggle="collapse">settings<i class="fa fa-plus" id="bel1"></i></a>
  <ul class="nav collapse" id="list10">
  <li><a href="logout.php">Logout</a></li>
  <li><a href="admin_change.php">settings</a></li>
  <li><a href="banner.php">banner change</a></li>
  </ul>
  </li
</ul>
</div>

</div>
  </div>
   
  <div id="cover">
  <div id="auto">

</div>
</div>
  
  
  
  <script>
$(document).ready(function()
{
	setInterval(function(){
	$("#auto").load("dash.php")
	refresh();
},1000);
});
</script>
<script>
function loadDoc() {
	setInterval(function(){ var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("bel").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "noti.php", true);
  xhttp.send();
		},1000);
 
}
loadDoc();
</script>

















</body>
</html>