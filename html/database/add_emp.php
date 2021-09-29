<?php
include "../database.php";
?>

<?php


if(isset($_POST['submit']))
{
	if(getimagesize($_FILES['image']['tmp_name'])==false)
	{
		echo"plese select image";
		
	}
	else
	{
		
		
		
		$a=rand(100,900);
        $b="di20fh$a";
		$image=$_FILES['image']['tmp_name'];
		$name=$_FILES['image']['name'];
		$dname=$_POST['dname'];
		$dmob=$_POST['dmob'];
		$address=$_POST['address'];
		$status="Free";
		
		
	
		
		
	    $image=file_get_contents($image);
		$image=base64_encode($image);
		
		$sql="insert into dilvery (did,dname,dstatus,dmob,address,image)values('$b','$dname','$status','$dmob','$address','$image')";
	
		
		if($res=$con->query($sql))
		{
			header("location:../add_emp.php?mes='<b>profile submitted</b>'");
		}
		else
		{
			header("location:../add_food.php?mes='error'");
		}
	}
}
else
{
	echo "hello world";
}

?>