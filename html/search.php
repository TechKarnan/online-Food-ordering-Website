<html>
<head></head>
<body>

<?php

include "database.php";
session_start();

$_SESSION['redirect']=1;

if(isset($_POST['search']))
{
	$key=$_POST['search'];
	$sql="select * from add_food where fname like '%{$_POST["search"]}%' or keyword like'%{$_POST["search"]}%'"; 
	
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


</body>
</html>
