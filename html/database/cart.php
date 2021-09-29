<?php

include "../database.php";
session_start();


 $_SESSION['no']=0;
$uid=$_SESSION['uid'];
$flat=$_POST['flat'];
$street=$_POST["street"];
$area=$_POST["area"];
$land=$_POST["land"];
$city=$_POST["city"];
$pin=$_POST["pin"];
$order="food".uniqid();


$sql1="insert into status (order_id,uid,status,rate_status) values('$order','$uid','ordered','nr')";

if($uid!="" && $flat!="" && $street!="" && $area!="" && $land!="" && $city!="" && $pin!="")
	
	{
        $sql="INSERT INTO `cart` ( `uid`, `flat`, `street`, `area`, `land`, `city`, `pin`,`orderid`) VALUES ( '$uid', '$flat', '$street', '$area', '$land', '$city','$pin','$order')";

          

             if($res=$con->query($sql))
	
              {
				      if($res1=$con->query($sql1))
					  {
				  
	                       $_SESSION['no']='1';
	
	                        header("location:../track_order.php?mes='order placed ! ur status id:'.$order");
					  }              
			  }
			  

	 }
	else
	 {
		     header("location:../my_orders.php?mes='<h3>please fill the details</h3>'");
	 }
		


?>