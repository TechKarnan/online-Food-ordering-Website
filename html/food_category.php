




<!DOCTYPE html>
<html>
<head>
<title>food_category</title>
<link type="text/css" rel="stylesheet" href="../css/food_category.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">




<script type="text/javascript">
function preback(){ window.history.forward(); }
setTimeout("preback()",0);
window.onunload=function(){null};
</script>



</head>


<body>

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
   <div class="col-md-12 well" id="nav"><b>Admin/Add Food Category</b></div>
  
  <div id="flex" class="well">
	   
		<div id="food_category">
		
		
		<form method="post" action="database/add_category.php">
		<table border="0" id="t2">
		<tr><td><b class="heading">Food Category</b></td></tr>
		<tr><td><input type="text" class="t" placeholder="food category" name="cat"></td></tr>
		<tr><td align="center"  colspan="1"><input type="submit" class="btn btn-danger btn-lg" id="add2" value="Add"></td>
		</tr>
		<tr><td align="center"><input type="submit" class="btn btn-danger btn-lg" id="add2" value="delete" name="delete"></td></tr>
		
		<?php 
		if(isset($_GET['mes']))
		{   
	        $mes1=$_GET["mes"];
	        echo "<h4>$mes1</h4>";
		}
		?>
			</td></tr>
		</table>
		</form>
		</div> 
  
  
  
  
  </div>
   

   

	
       

          
   
 </div>






















</body>
</html>