<?php

session_start();


include "../database.php";

$fid=$_GET["fid"];

$uid=$_SESSION["uid"];

if(isset($_GET['qty']))
{
$qty=$_POST['qty'];
}


$sql3="select * from  add_food where fid=$fid";
$res3=$con->query($sql3);
$row3=$res3->fetch_assoc();
$price=$row3['price'];
echo $price;


$sql1="insert into dashboard (uid,fid,rate,qty,price,status) values($uid,$fid,5,1,$price,'ordered')";

$sql2="select * from dashboard where uid=$uid and fid=$fid";




$res2=$con->query($sql2);

if($res2->num_rows>0)
{
	
	header("location:../food_menu.php?mes=1");
	
}

else
{

	
if($res1=$con->query($sql1))
{
	header("location:../my_orders.php");
}

else
{
	header("location:../food_menu.php?mes=0");
}


}



?>