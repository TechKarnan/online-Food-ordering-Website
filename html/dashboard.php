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



$sq3="select * from status where status='dilvery'";
   
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
 <b id="heading" align="center">food ordering!!</b><a href="report.html"><i class="fa fa-bell" id="bel"></i></a>
 
 <div id="lft">
 
 <div id="admin_pic">
 <img src="../images/admin.gif"  width="100%" height="600px">
 </div>
  
<div class="col-md-12" id="lft1">
<ul class="navbar nav ">
  <li><a href="dashboard.html"><i class="fa fa-tachometer" id="bel1"></i>dashboard</a></li>
  <li><a href="sample1.html">Reg Users</a></li>
  
  <li>
  <a href="#lists" data-toggle="collapse">Food category  <i class="fa fa-plus" id="bel1"></i></a>
  <ul class="nav collapse" id="lists">
  <li><a href="Food_category.html">Food Category</a></li>
  <li><a href="#">Manage Food Category</a></li>
  </ul>
  </li>
  
  <li>
  <a href="#lists1" data-toggle="collapse">Food Menu <i class="fa fa-plus" id="bel1"></i> </a>
  <ul class="nav collapse" id="lists1">
  <li><a href="add_food.html"> Add Food</a></li>
  <li><a href="#">Manage Food</a></li>
  </ul>
  </li>
  
  <li>
  <a href="#lists2" data-toggle="collapse">Orders  <i class="fa fa-plus" id="bel1"></i></a>
  <ul class="nav collapse" id="lists2">
  <li><a href="#"> Not confirmed Yet</a></li>
  <li><a href="#">Order Confirmed</a></li>
   <li><a href="#">Food Being Prepared</a></li>
    <li><a href="#">Food Pickup</a></li>
	 <li><a href="#">Food dilvery</a></li>
	  <li><a href="#">cancelled</a></li>
	   <li><a href="#">all orders</a></li>
  </ul>
  </li>
  
  

  <li>
  <a href="#lists3" data-toggle="collapse">Report <i class="fa fa-plus" id="bel1"></i></a>
  <ul class="nav collapse" id="lists3">
  <li><a href=""> sales Report</a></li>
  <li><a href="#">order count</a></li>
   <li><a href="#">B/w Dates</a></li>
  </ul>
  </li>
  
  <li><a href="#">Search</a></li>
</ul>
</div>


   


   </div></div>
  <div id="cover">
  
  <div id="cover1">
  
  <div class="a">
  <table border="0" width="100%" height="360px">
  <tr><td>TOTAL ORDER<hr></td></tr>
  <tr><td><?php echo "<b class='text' style='font-size:120px'>$total<b>";?></td></tr>
  </table>
  </div>
 
  <div class="a">
  <table border="0" width="100%" height="360px">
  <tr><td>NEW ORDER<hr></td></tr>
  <tr><td><?php echo "<b class='text' style='font-size:120px'>$ordered<b>";?></td></tr>
  </table>
  </div>
  
   <div class="a">
  <table border="0" width="100%"height="360px">
  <tr><td>CONFIRMED ORDER<hr></td></tr>
  <tr><td><?php echo "<b class='text' style='font-size:120px'>$confirmed<b>";?></td></tr>
  </table>
  </div>
 
 
  </div>
  
  
  
  
  <div id="cover2">
  
  
  
  <div class="a">
  <table border="0" width="100%" height="360px">
  <tr><td>FOOD BEING PREPARED<hr></td></tr>
  <tr><td><?php echo "<b class='text' style='font-size:120px'>$prepaing<b>";?></td></tr>
  </table>
  </div>
 
  <div class="a">
  <table border="0" width="100%" height="360px">
  <tr><td>FOOD PICKUP<hr></td></tr>
  <tr><td><?php echo "<b class='text' style='font-size:120px'>$pickup<b>";?></td></tr>
  </table>
  </div>
  
   <div class="a">
  <table border="0" width="100%" height="360px">
  <tr><td>TOTAL FOOD DELIVER<hr></td></tr>
  <tr><td><?php echo "<b class='text' style='font-size:120px'>$dilvery<b>";?></td></tr>
  </table>
  </div>
  
 </div>
 
 
 
  <div id="cover3">
  
  
  <div class="a">
  <table border="0" width="100%" height="360px">
  <tr><td>CANCELLED ORDER<hr></td></tr>
  <tr><td><?php echo "<b class='text' style='font-size:120px'>$cancelled<b>";?></td></tr>
  </table>
  </div>
  
 
 
  <div class="a">
  <table border="0" width="100%" height="360px">
  <tr><td>TOTAL REG.USER<hr></td></tr>
  <tr><td><?php echo "<b class='text' style='font-size:120px'>$user<b>";?></td></tr>
  </table>
  </div>
  
  

  <div class="a" style="background-color:#eceff1;">
   <table border="0" width="100%" height="360px">
  <tr><td></td></tr>
  <tr><td></td></tr>
  </table>
  </div>
  </div>
  

  </div>
   

   


	
       

  </div>
  


















</body>
</html>