<?php
include "../database.php";
?>

<?php
session_start();
$_SESSION['upass']=0;
?>

<?php

if(($_POST["umail"]!="" &&$_POST["upass"]!=""))
{
	$sql="SELECT * FROM  user WHERE umail='{$_POST["umail"]}' and upass='{$_POST["upass"]}'";
	$res=$con->query($sql);
	if($res->num_rows>0)
	
	{
		$row=$res->fetch_assoc();
		
		$_SESSION["upass"]=$row["upass"];
		$_SESSION["uid"]=$row["uid"];
	    header("location:../login_home.php");
		
	}
	else
	{
		header("location:../sign_in.php?mes=1"); 
	}
		
}
else
{
header("location:../sign_in.php?mes=2"); 
}
?>
