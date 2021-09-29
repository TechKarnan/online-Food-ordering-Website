<?php 
include("../database.php");
?>


<?php

$sql="insert into user ( fname,lname,umail,upass,mob) values('{$_POST['fname']}','{$_POST['lname']}','{$_POST['umail']}','{$_POST['upass']}','{$_POST['mob']}')";
$res=$con->query($sql);

if(!$res)
{
	header("location:../sign_up.php?mes=' not inserted'");
}
else
{
	header("location:../sign_up.php?mes=' inserted'");
}





?>