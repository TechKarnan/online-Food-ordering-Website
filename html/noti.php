<?php
include "database.php";
session_start();
if(isset($_SESSION['no']))
{
	
	$sql="select * from status";
	$res=$con->query($sql);
	$count=$res->num_rows;
	echo $count;
}
else
{
	$sql="select * from status";
	$res=$con->query($sql);
	$count=$res->num_rows;
	echo $count;
}


?>
 
