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

 $uid=$_SESSION['uid'];
 
 $sql="select distinct dashboard.fid,fname,image,add_food.price,hint from dashboard inner join add_food on dashboard.fid=add_food.fid and dashboard.uid=$uid";
 $res=$con->query($sql);
 
 
 
 
 if($res->num_rows>0)
 {
	 while($row=$res->fetch_assoc())
	 {
		 
		 

 echo "<div id='contianer1' class='col-md-4 well'>
 
     <div class='a'>
	   <img width='100%' height='300px' src='data:image;base64,{$row['image']}'>
	   
	   
	   
	   
	   
	   <table border='0' width='100%'>
       <tr><td><b style='color:#FF4500;'><h2>".$row['fname']."</h2></b></td><tr>
       <tr><td><b><h4>".$row["hint"]."</h4></b></tr>
      <tr><td> <b class='rate'>".$row["price"]."</b> </tr>
	  
	  
	  
	  
	   <tr>
	   <td><form action='database/qty.php' method='post'>";
	 if(isset($_GET['qty']))
		 
	 {
		 $qty=$_GET['qty'];
		 echo "<b>qty:</b><input type='text' name='qty' value=$qty>";
	 }
	 else
	 {
	    echo "<b>qty:</b><input type='text' name='qty' >";
	 }
	   
	   echo "
	   <input type='submit' value='save' id='save'/>
	   <input type='hidden' value=".$row['fid']." name='fid'/>
	   <input type='hidden' value=".$row['price']." name='price'/>
	   </form>
	   </td>
	   </tr>
	   
	   
	   
	   
	   
	    <tr><td><br><a href='database/remove.php?fid=".$row['fid']."' class='square_btn' target='cart.php' name='submit'>CANCEL</a></td></tr>
       </table>
	</div>
     
    
	   
    
	 </div>";
	 }
 }	 



	
	










?>


</body>


</html>








