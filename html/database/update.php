<?php
include "../database.php";

$page=$_POST['image'];



if(isset($_POST['update']))
{
if($page=='main')
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
		$fcat=$_POST['fcat'];
		$fname=$_POST['fname'];
		$price=$_POST['price'];
		$hint=$_POST['hint'];
		$fid=$_POST['fid'];

		
		
		$sql1="select * from category where category='$fcat'";
        $res=$con->query($sql1);
	    $row=$res->fetch_assoc();

		
		
	  
		
		$sql="update main set fcat='$fcat', price='$price',hint='$hint',iname='$name',fname='$fname' where fid='$fid'";
		$con->query($sql);
		
		
		if($con->query($sql))
		{
			header("location:../main_details.php?mes=1");
		}
		else
		{
			header("location:../main_details.php?mes=0");
		}
		
		
	}
}


	
else
{	
	
	
	
	
	if(getimagesize($_FILES['image']['tmp_name'])==false)
	{
		echo"please select image";
	
		
	}
	else
	{
		
		
		
		
		$image=$_FILES['image']['tmp_name'];
		$name=$_FILES['image']['name'];
		$fcat=$_POST['fcat'];
		$fname=$_POST['fname'];
		$price=$_POST['price'];
		$hint=$_POST['hint'];
		$fid=$_POST['fid'];
		
		
	    $image=file_get_contents($image);
		$image=base64_encode($image);
		
		$sql="update add_food set fcat='$fcat', price='$price',hint='$hint',image='$image',fname='$fname' where fid='$fid'";
		if($con->query($sql))
		{
			header("location:../add_food.php?mes=' data updated'");
		}
		else
		{
			header("location:../add_food.php?mes='update'");
		}
	}
}

}

?>