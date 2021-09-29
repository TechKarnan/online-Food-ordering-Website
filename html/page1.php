
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


<style>
.checked{
color:red;
}

.black{
color:silver;
}

a{
	text-decoration:none;
	float:left;
	margin-top:20px;

}
</style>




</head>




<body>



<?php


if(isset($_GET['mes']))
{
 $cid=$_GET['mes'];
 
 $sql1="select * from category where cid=$cid";
 $res1=$con->query($sql1);
 $row1=$res1->fetch_assoc();
 $fcat=$row1['category'];

 $_SESSION['fcat']=$fcat;

 $sql="select * from add_food where fcat='$fcat'";

}
else
{
	$sql="select * from add_food";
}
 
 $res=$con->query($sql);
 
 if($res->num_rows>0)
 {
	
	
 for($i=1;$i<=20;$i++)
  {
    if($row=$res->fetch_assoc())
     {
		 
		 $_SESSION['fid']=$row['fid'];

         echo "<div id='contianer1' class='col-md-4 well'>
 
        <div class='a'>
	    <img width='100%' height='300px' src='data:image;base64,{$row['image']}'>
        <b style='color:#FF4500;'><h2>".$row['fname']."</h2></b>
        <b><h4>".$row["hint"]."</h4></b>
        <b class='rate'>".$row["price"]."</b><br> ";
	    ?>
	   
       <?php
      $fid=$row['fid'];
	   $sql2="select * from  add_food where fid=$fid ";
	   $res2=$con->query($sql2);
	  
	  
	   $row2=$res2->fetch_assoc();
	   $sno=$row2['avg'];
	   $diff=5-$sno;
	 
	 
         for($i=1;$i<=$sno;$i++)
	     {
		    echo"<span><a class='fa fa-star checked'></a></span> ";
	     }
	     for($i=1;$i<=$diff;$i++)
	       {
		     echo"<span><a class='fa fa-star black'></a></span> ";
	       }
	   
             echo "<a href='database/order.php?fid=".$row["fid"]."' class='square_btn' target='cart.php' >Order Now</a>";
	  
	
	      echo "</div>
     
	           </div>";

        }
	 }
 
 }	
 

  ?>



</body>


</html>








