<?php

session_start();


include "../database.php";

$fid=$_POST["fid"];

$uid=$_SESSION["uid"];

$qty=$_POST["qty"];

$price=$_POST["price"];

$sql="update dashboard set qty=$qty where fid=$fid";

$res=$con->query($sql);

$price=$qty*$price;

$sql1="update dashboard set price=$price where uid=$uid and fid=$fid ";

if ($res1=$con->query($sql1))
{

header("location:../booked.php?qty=$qty");

}





?>