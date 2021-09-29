<?php
include "database.php";

session_start();
$uid=$_SESSION["uid"];

$sql6="select sum(d.price) as total from dashboard d where status='ordered' and uid=$uid"; 
$res6=$con->query($sql6);
$row6=$res6->fetch_assoc();

echo '
<center><h4><b>Total</b></h4></center>
<center><h4><b>Amount To Be Paid:'.$row6['total'].'</b></h4></center>';
?>