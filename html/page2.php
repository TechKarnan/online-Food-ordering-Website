
<?php
include "database.php";
session_start();

?>
<!doctype html>
<html>
<head>
<title>page1</title>
<link type="text/css" rel="stylesheet" href="../css/page.css">
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


<?php

if(isset($_GET['lfid']))
{
 $lfid=$_GET['lfid'];
 $fcat=$_SESSION['fcat'];


 
}

$sql="select * from add_food where fcat='$fcat' and fid > $lfid";
	

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
 

?>

</body>


</html>








