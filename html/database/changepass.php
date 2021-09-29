<?php

include "../database.php";
session_start();
$uid=1;
$old=$_POST['old'];
$new=$_POST['new'];
$renew=$_POST['renew'];
if($new!=$renew)
{
	header("location:../change_password.php?mes=2"); 
}
else
{
$sql="select * from user where  uid=$uid and upass='$old'";
$res=$con->query($sql);
if($res->num_rows>0)
 {
    $sql1="update user set upass='$new' where uid='$uid'";
	$res=$con->query($sql1);
    header("location:../change_password.php?mes='<h3>password succesfully updated</h3>'"); 
 }
  header("location:../change_password.php?mes=1"); 
}


?>