
<?php
include "database.php";
session_start();
$uid=$_SESSION['uid'];

?>


<!DOCTYPE html>
<html>
<head>
<title>order_details</title>
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


<body>

<div id="dash">
 <div id="head">
 <b id="heading" align="center">food ordering!!</b>
 
 <div id="lft">
 
 <div id="admin_pic">
 <img src="../images/admin.gif"  width="100%" height="600px">
 </div>
  
<div class="col-md-12" id="lft1">
<ul class="navbar nav ">
  <li><a href="#">dashboard</a></li>
  <li><a href="#">Reg Users</a></li>
  
  <li>
  <a href="#lists" data-toggle="collapse">Food category</a>
  <ul class="nav collapse" id="lists">
  <li><a href="#">Food Category</a></li>
  <li><a href="#">Manage Food Category</a></li>
  </ul>
  </li>
  
  <li>
  <a href="#lists1" data-toggle="collapse">Food Menu</a>
  <ul class="nav collapse" id="lists1">
  <li><a href="#"> Add Food</a></li>
  <li><a href="#">Manage Food</a></li>
  </ul>
  </li>
  
  <li>
  <a href="#lists2" data-toggle="collapse">Orders</a>
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
  
  

  <li><a href="#">Reports</a></li>
  <li>
  <a href="#list10" data-toggle="collapse">settings<i class="fa fa-plus" id="bel1"></i></a>
  <ul class="nav collapse" id="list10">
  <li><a href="logout.php">Logout</a></li>
  <li><a href="admin_change.php">settings</a></li>
  </ul>
  </li
</ul>
</div>


   


   </div>
   </div>
  <div id="cover">
   <div class="col-md-12 well" id="nav"><b id="heading1">Admin_Login / Add Food </b> </div>
  
 <div id="flex">
 
          <center><h1 class="normal1"> Details of registered food </h1><center>

		
		<table border="0"  class="table table-hover" >
		<thead>
		<tr><thcolspan="3"><center><b class="heading">Food Details</b></center></th></tr>
		
		
		<th><b class="normal">Sl_no:</b></th>
		<th><b class="normal">Food_id:</b></th>
		<th><b class="normal">Food_cat</b></th>
		<th><b class="normal">Food_name:</b></th>
		<th><b class="normal">image:</b></th>
		<th><b class="normal">Price:</b></th>
		<th><b class="normal">description:</b></th>
		<th><b class="normal">Action:</b></th>
		</thead>
		<tbody>
		<?php
		
		$sql="select * from main ";
        $res=$con->query($sql);
		
         $i=0;
        while($row=$res->fetch_assoc())
		{
		$i=$i+1;
		$iname=$row['iname'];
		
		echo "
		<tr>
		<td>".$i."
		</td>
		<td>".$row['fid']."</td>
	    <td>".$row['fcat']."</td>
		<td>".$row['fname']."</td>
		<td><img src='database/images/".$iname."' height='200px'  width='400px'></td>
        <td>".$row['price']."</td>
		<td>".$row['hint']."</td>
	    <td>
		<form action='add_food1.php' method='post'>
		<input type='hidden' value='".$row["fid"]."' name='fid'>
		<input type='submit' value='Edit' class='btn btn-primary btn-lg'  id='veiw1' />
		</form>
		</td>
		
		
		</tr>
		
		";
		}
	?>
        </tbody>
		
		</table>
 
 
 
 
</div>
	<?php
	if(isset($_GET['mes']))
		  {
			  $mes=$_GET['mes'];
			  
		       if($mes==1)
			   {
				   ?>
				  <script>alert("food item added")</script>
			       <?php
			   }
			   
			   
			  else
			  {
				  
			      ?>
				  <script>alert("something went wrong")</script>
				  <?php
			  }
		
	
		
		  }
	
	
	
	?>
 
 
 
 
 
 
 
 </div>
   

   

	
       

          
   
 </div>






















</body>
</html>