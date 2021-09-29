<?php
include "../database.php";
?>

<?php
session_start();
$_SESSION['apass']=0;
?>

<?php

if(($_POST["aname"]!="" &&$_POST["apass"]!=""))
{
	$sql="SELECT * FROM  admin WHERE aname='{$_POST["aname"]}' and apass='{$_POST["apass"]}'";
	$res=$con->query($sql);
	if($res->num_rows>0)
	
	{
		$row=$res->fetch_assoc();
		
		$_SESSION["apass"]=$row["apass"];
	    header("location:../auto.php");
		
	}
	else
	{
		header("location:../admin.php?mes='please Re-enter valid username and password '"); 
	}
		
}
else
{
header("location:../admin.php?mes='please fill all fields'"); 
}
?>
