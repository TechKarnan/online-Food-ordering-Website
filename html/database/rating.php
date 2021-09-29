<?php

include "../database.php";

session_start();
$uid=$_SESSION['uid'];

if(isset($_GET['star']))
{ 
  $star=$_GET['star'];
  echo $star;
}
 
$fid=explode("," , $star); 
$fid[1];
 
	
	$sql="update dashboard set rate='$star' where uid='$uid' and fid='$fid[1]'";
    $res=$con->query($sql);
	
	$sql1="update status set rate_status='rated' where uid='$uid'"; 
	$res1=$con->query($sql1);
	
	$sql2="select * from  add_food";
	$res2=$con->query($sql2);
	$num=$res2->num_rows;
	print_r($num);
	
	
	for($i=1;$i<=$num;$i++)
	{
		$sql3="select avg(rate) as avg from dashboard where fid=$i";
		$res3=$con->query($sql3);
		$row3=$res3->fetch_assoc();
		$avg=$row3['avg'];
		
		$sql4="update add_food  set  avg=$avg where fid=$i ";
		$res4=$con->query($sql4);
		
	}

    	
	
	/*header("location:../star1.php");*/

?>