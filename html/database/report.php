<?php
include "../database.php";

session_start();
$id=$_SESSION['id'];

$uid=$_POST['uid'];
$stat=$_POST['status'];
$oid=$_POST['order_id'];


$sql="update status set status='$stat' where order_id='$oid'";

$sql1="update dashboard set status='$stat' where uid='$uid'";
$res1=$con->query($sql1);

if($res=$con->query($sql))
{
	header("location:../report.php?mes='<h3>updated successfully</h3>'");
}
else
{
	header("location:../report.php?mes='something went wrong'");
}










?>