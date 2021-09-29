<?php

include "../database.php";
session_start();
$uid=$_SESSION['uid'];
$old=$_POST['old'];
$new=$_POST['new'];
$renew=$_POST['renew'];
if($new!=$renew)
{
	header("location:../change_password.php?mes='re-type pass word mismatch'"); 
}
else
{
$sql="select * from admin where  apass='$old'";
$res=$con->query($sql);
if($res->num_rows>0)
 {
    $sql1="update user set upass='$new' where aid=1";
	$res=$con->query($sql1);
    header("location:../admin_change.php?mes='<h3>password succesfully updated</h3>'"); 
 }
}


?>