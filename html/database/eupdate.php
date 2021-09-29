<?php

include "../database.php";

$oid=$_POST['oid'];
$did=$_POST['did'];

$status=$_POST['start'];

if(isset($_POST['save']))
{
   $sql="update status set status='$status'  where order_id='$oid'";

   $res=$con->query($sql);


    $sql1="update dilvery d set dstatus='free' where d.did='$did'";

    $res1=$con->query($sql1);
	
	header("location:../emp_order.php?mes='<b class='normal2'>updated</b>'");
	
	

	
	

}
?>












