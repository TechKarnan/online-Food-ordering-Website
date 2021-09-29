<?php

include "../database.php";
 
$did=$_POST['dpass'];






$sql="select * from dilvery d where d.did='$did'";


$res=$con->query($sql);




if($res->num_rows>0)
{
	header("location:../emp_order.php?did=".$did."");
}
else
{
	header("location:../emp_login.php?did='invalid id number'");
}



?>
