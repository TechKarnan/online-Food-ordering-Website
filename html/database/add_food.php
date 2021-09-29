<?php
include "../database.php";
$page=$_POST['image'];
?>

<?php

echo "$page";

if($page=='main')
{
	if(getimagesize($_FILES['image']['tmp_name'])==false)
	{
		echo"plese select image";
		
	}
	else
	{
		
		
		
		
		$image=$_FILES['image']['tmp_name'];
		$name=$_FILES['image']['name'];
		$img_folder="images/";
		
		if(move_uploaded_file($image,$img_folder.$name));
		{
			?><script>alert("hello world")</script>
			<?php
			
		}
		$fcat=$_POST['fcat'];
		$fname=$_POST['fname'];
		$price=$_POST['price'];
		$hint=$_POST['hint'];

		
		
		$sql1="select * from category where category='$fcat'";
        $res=$con->query($sql1);
	    $row=$res->fetch_assoc();

		
		
	  
		
		$sql="insert into main(fcat,fname,price,hint,iname)values('$fcat','$fname','$price','$hint','$name')";
		if($con->query($sql))
		{
			header("location:../add_food.php?mes=1");
		}
		else
		{
			header("location:../add_food.php?mes=0");
		}
		
	}
}
	

	

else
{

if(isset($_POST['submit']))
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
		$key=$_POST['key'];
		
		
		$sql1="select * from category where category='$fcat'";
        $res=$con->query($sql1);
	    $row=$res->fetch_assoc();
		$cid=$row['cid'];
		
		
	    $image=file_get_contents($image);
		$image=base64_encode($image);
		
		$sql="insert into add_food(fcat,fname,image,price,hint,cid,keyword,avg)values('$fcat','$fname','$image','$price','$hint','$cid','$key',5)";
		
		
		
	
		if($con->query($sql))
		{
			header("location:../add_food.php?mes=1");
		}
		else
		{
			header("location:../add_food.php?mes=0");
		}
		
	}
}

}
?>