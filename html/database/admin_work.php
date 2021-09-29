<?php

include "../database.php";

$oid=$_POST['oid'];
$did=$_POST['did'];



if(isset($_POST['save']))
{
   

    $sql1="update dilvery d set dstatus='not free',oid='$oid' where d.did='$did'";
	echo "$sql1";

    $res=$con->query($sql1);
	
	header("location:../assign.php?mes='<b class='normal2'>delivery assgined</b>");


}

?>