<?php
include "database.php";
session_start();

$uid=$_POST['uid'];
$oid=$_POST['oid'];
echo $uid;
?>
<!DOCTYPE html>
<html>
<head>
<title>report</title>
<link type="text/css" rel="stylesheet" href="../css/report.css">
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
       <div id="cover">
	    <div class="col-md-12 well" id="nav"><b id="heading1">Admin_Login / Report</b></div>
		<div id="food_category">
		
		
		
		<table border="1" id="t2" >
		<tr><td align="center" colspan="6"><b class="heading">Order Details</b></td></tr>
		<tr>
		<td><b class="normal">sl no:</b></td>
		<td><b class="normal">Food category</b></td>
		<td><b class="normal">Food name:</b></td>
		<td><b class="normal">Food image:</b></td>
		<td><b class="normal">quantity:</b></td>
		<td><b class="normal">price:</b></td>
		</tr>
		
		
		<?php
		$sql4="select * from dashboard d inner join add_food a on d.fid=a.fid and uid=$uid ";
		$res4=$con->query($sql4);
		
		$sql7=" select  sum(d.price) as total from dashboard d inner join add_food a on d.fid=a.fid and uid=$uid";
        $res7=$con->query($sql7);
		$row7=$res7->fetch_assoc();
		
	
		$i=0;
			while($row4=$res4->fetch_assoc())
		{
		 
		$i=$i+1;
		echo "
		<tr>
		<td><b class='normal'>".$i."</b></td>
		<td><b class='normal'>".$row4['fcat']."</b></td>
		<td><b class='normal'>".$row4['fname']."</b></td>
		<td><img width='400px' height='300px' src='data:image;base64,{$row4['image']}'/></td>
		<td><b class='normal'></b></td>
		<td><b class='normal'>".$row4['price']."</b></td>
		</tr>
		
		
		";
		}
		
		?>
		<?php
		echo '<tr>
		<td colspan="5"><b class="normal">grand total:</b></td>
		<td>'.$row7["total"].'</td>
		</tr>';
	
		?>
			</table>
		<?php
		
		$sql1="select * from user where uid=$uid";
		$res1=$con->query($sql1);
		$row1=$res1->fetch_assoc();
		
		
		$sql2="select * from cart where uid=$uid";
		$res2=$con->query($sql2);
		$row2=$res2->fetch_assoc();
		
	    $sql3="select * from status where uid='$uid' and status='ready' and order_id='$oid'";
		$res3=$con->query($sql3);
		$row3=$res3->fetch_assoc();
		
		
		
		 $sql4="select * from status where uid='$uid' and status='ordered' and order_id='$oid'";
		$res4=$con->query($sql4);
		$row4=$res4->fetch_assoc();
		
		
		
		
		?>
		
		
		
		
		
		
		<?php
		
		echo '<table border="1" id="t1" >
		<tr><td align="center" colspan="2"><b class="heading">User Details</b></td></tr>
		<tr>
		<td><b class="normal">Order Number:</b></td>
		<td>'.$row3["order_id"].'</td>
		</tr>
		<tr>
		<td><b class="normal">first name:</b></td>
		<td> '.$row1["fname"].'</td>
		</tr>
		<tr>
		<td><b class="normal">last name:</b></td>
		<td>'.$row1["lname"].'</td>
		</tr>
		<tr>
		<td><b class="normal">email id:</b></td>
		<td>'.$row1["umail"].'</td>
		</tr>
		<tr>
		<td><b class="normal">mobile number:</b></td>
		<td>'.$row1["mob"].'</td>
		</tr>
		<tr>
		<td><b class="normal">flat no/building no:</b></td>
		<td>'.$row2["flat"].'</td>
		</tr>
		<tr>
		<td><b class="normal">streetName:</b></td>
		<td>'.$row2["street"].'</td>
		</tr>
		<tr>
		<td><b class="normal">Area:</b></td>
		<td>'.$row2["area"].'</td>
		</tr>
		<tr>
		<td><b class="normal">Landmark:</b></td>
		<td>'.$row2["land"].'</td>
		</tr>
		<tr>
		<td><b class="normal">city:</b></td>
		<td>'.$row2["city"].'</td>
		</tr>
		<tr>
		<td><b class="normal">city:</b></td>
		<td>'.$row2["pin"].'</td>
		</tr>
		<tr>
		<td><b class="normal">order date:</b></td>
		<td>'.$row3["date"].'</td>
		</tr>
		<tr>
		<td><b class="normal">order final status:</b></td>
		<td>'.$row4["status"].'</td>
		</tr>
		</table>';
		?>
		

		<br>
		<hr>
		<br>
		<br>
		<br>
		
		<?php
		
		echo '<form action="database/report.php" method="post">
		
		
		<table border="1" id="t3" >
		<tr><td colspan="2">restaurant Remark 
		<textarea name="remark"></textarea></td></tr>
		<tr>
		<td colspan="2"><b class="normal">restaurent status:</b>
	
		<select id="food_cat1" name="status">
		<option><b>ready</b></option>
		<option>confirmed</option>
		<option>delivered</option>
		<option>cancelled</option>
		<option>traffic</option>
		<option>arriving soon</option>
		<option>preparing</option></select></td>
		</tr>
		<tr><td>
		<input type="hidden" value="'.$uid.'"  name="uid"></td></tr>
		<input type="hidden" value="'.$row4["order_id"].'"  name="order_id"></td></tr>
		<tr><td colspan="2"><input type="submit" value="update Order" class="btn btn-primary" id="update">
	    </from>
		</td></tr>
		</table>';
		
		?>
		
		
	
		
		<?php
		
		if(isset($_GET['mes']))
		{
			$mes1=$_GET['mes'];
			echo "$mes1";
		}
		?>
		
		
		</div> 
  
        
  </div>
  
  
  </div>
   

   

	
       

          
   
 </div>


















</body>
</html>