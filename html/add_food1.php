




<?php
include "database.php"; 
?>


<!DOCTYPE html>
<html>
<head>
<title>updatefood</title>
<link type="text/css" rel="stylesheet" href="../css/add_food.css">
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
 <b id="heading" align="center">food ordering!!</b>
 
 <div id="lft">
 
 <div id="admin_pic">
 <img src="admin.gif"  width="100%" height="200px">
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
 
		<div id="food_category">
		
	
		<?php 
		$fid=$_POST['fid'];
		
		$sql1="select * from main where fid=$fid ";
		$res1=$con->query($sql1);
		$row1=$res1->fetch_assoc();
		
		
		
		
		 echo '<form method="post" enctype="multipart/form-data" action="database/update.php">
		<table border="2" id="t9" height="200px">
		<tr><td><b class="heading">Food category</b></td>
		<td>';
		?>
		
		<select id="food_cat" name="fcat" ><option><b></b></option>
		<?php
		$sql="select category from category";
		
		$res=$con->query($sql);
	
		
		while($row=$res->fetch_assoc())
		{
			echo "<option>".$row["category"]."</option>";
		}
		?>
		
		</select>
		</td>
        </tr>
		
		<?php
		
		echo '<tr>
		<td><b class="heading">Item Name:</b></td>
		<td><input type="text" class="t" name="fname" value='.$row1["fname"].'></td>
		</tr>
		<tr>
		<td><b class="heading">Description:</b></td>
		<td><textarea id="area" name="hint"  value='.$row1["hint"].'></textarea></td>
		</tr>
		
		
		
		
		<tr>
		<td id="image" colspan="2"> 
		<div id="picb">
		<img id="preimage" width="200px" height="200px"/>
		</div>
		</td>
		</tr>
		
		
		<tr>
		
		<td><b class="heading">image:</b></td>
		<td><input type="file" class="t" name="image" onchange="loadfile(event)">
		
	    </td>
		
		
		</tr>
		
		<td><b class="heading">price</b></td>
		<td><input type="text" class="t" name="price" value='.$row1["price"].'></td>
		</tr>
		<tr>
		
		
		
		
		<tr>
		<td colspan="2">
		<select id="food_cat" name="image">
		<option>main<option>
		<option>page1<option>
        </select>
		</td>
		</tr>
		
		
		
		
		<td colspan="2" align="center" >
		<input type="hidden" value='.$_POST['fid'].' name="fid">
		<input type="submit"  class="btn btn-danger" value="update" id="b1" name="update">
		</td>
		
		</tr>
		
		</table>
		</form>';
		?>
		<?php
          if(isset($_GET['mes']))
		  {
			  ?>
				  <script>alert("food item updated!")</script>
			       <?php 
		  }
		?>
		
		
		
		</div>
	
 
 
 
 
 
 
 </div>
   

   

	
       

          
   
 </div>



<script>
function loadfile(event)
{
	var output=document.getElementById("preimage");
	output.src=URL.createObjectURL(event.target.files[0]);
};
</script>


















</body>
</html>