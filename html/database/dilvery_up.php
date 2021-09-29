<?php
include "../database.php";
if(isset($_POST['update']))
{
	if(getimagesize($_FILES['image']['tmp_name'])==false)
	{
		echo"please select image";
	
		
	}
	else
	{
		
		
		
		
		$image=$_FILES['image']['tmp_name'];
		$name=$_FILES['image']['name'];
		$did=$_POST['did'];
		$dname=$_POST['dname'];
		$dmob=$_POST['dmob'];
		$dstatus=$_POST['dstatus'];
		$address=$_POST['address'];
		
		
		
	    $image=file_get_contents($image);
		$image=base64_encode($image);
		
		$sql="update dilvery set dname='$dname', dmob='$dmob',dstatus='free',image='$image',address='$address' where did='$did'";
		if($con->query($sql))
		{
			header("location:../update_emp.php?mes=' data updated'");
		}
		else
		{
			header("location:../update-emp?mes='not update'");
		}
	}
}

?>