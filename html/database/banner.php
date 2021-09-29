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
		$img_folder="images/";
		

		if(move_uploaded_file($image,$img_folder.$name));
	

		/*$sql="insert into banner (bname) values('$name')";*/
		$sql="update  banner set bname='$name'";
		if($con->query($sql))
		{
			header("location:../banner.php?mes=1");
		}
		else
		{
			header("location:../banner.php?mes=0");
		}
		
		
	}
}


	


?>