<?php

session_start();


include "../database.php";

$fid=$_GET["fid"];

$uid=$_SESSION["uid"];



$sql="delete from dashboard where uid=$uid and fid=$fid";

if($res=$con->query($sql))
{
	header("location:../my_orders.php");
}




?>