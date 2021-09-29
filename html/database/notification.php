<?php
include "database.php";

$sql="INSERT INTO `cart` ( `uid`, `flat`, `street`, `area`, `land`, `city`, `pin`) VALUES ( '$uid', '$flat', '$street', '$area', '$land', '$city','$pin')";


$res=$con->query($sql)

echo res->num_rows;






?>
 
