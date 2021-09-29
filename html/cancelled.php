<!DOCTYPE html>

<?php
include "database.php";
?>
<html>
<head>
<title>food_category</title>
<link type="text/css" rel="stylesheet" href="../css/style.css">
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


<body id="body">

<div id="dash">
 <div id="head">
 <b id="heading" align="center">food ordering!!</b>
 
 <div id="lft">
 
 <div id="admin_pic">
 <img src="../images/admin.gif"  width="100%" height="200px">
 </div>
  
<div class="col-md-12" id="lft1">
<ul class="navbar nav ">
  <li><a href="auto.php"><i class="fa fa-tachometer" id="bel1"></i>dashboard</a></li>
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
	<li><a href="cancelled.php">cancelled</a></li>
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
  </li>
</div>

   


   </div>
   </div>
  <div id="cover">
   <div class="col-md-12 well" id="nav"><b id="heading1">Admin_Login / Add Food </b> </div>
  
 <div id="flex">
 
 <center><h1 class="normal1"> Details of order NOT Confirmed</h1><center>

		
		<table border="0"  class="table table-hover" >
		<thead>
		<tr><thcolspan="3"><center><b class="heading">User Details</b></center></th></tr>
		
		<th><b class="normal">slno:</b></th>
		<th><b class="normal">name:</b></th>
		<th><b class="normal">Order id:</b></th>
		<th><b class="normal">order-date:</b></th>
		<th><b class="normal">Action:</b></th>
		<th><b class="normal">Action:</b></th>
		</thead>
		<tbody>
		<?php
		
		$sql="select * from status s,user u where  u.uid=s.uid and status='cancelled' ";
        $res=$con->query($sql);
		
         $i=0;
        while($row=$res->fetch_assoc())
		{
		$i=$i+1;
		
		echo '
		<tr>
		<td>'.$i.'
		</td>
		<td>'.$row['fname'].'</td>
	    <td>'.$row['order_id'].'</td>
		 <td>'.$row['date'].'</td>
		<td>
		<form action="report.php" method="post">
		<input type="hidden" value="'.$row["order_id"].'" name="oid">
		<input type="hidden" value="'.$row["uid"].'" name="uid">
		<input type="submit" value="view" class="btn btn-primary btn-lg"  id="veiw1" />
		</form>
		</td>
		<td>
		<form action="invoice.php" method="post">
        <input type="hidden" value="'.$row["uid"].'" name="uid">
        <input type="submit" name="save" value="invoice" class="btn btn-primary btn-lg"  id="veiw1">
		</form>
		</td></tr>
		
		
		
		';
		}
	?>
        </tbody>
		
		</table>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
</div>
	
 
 
 
 
 
 
 </div>
   

   

	
       

          
   
 </div>






















</body>
</html>