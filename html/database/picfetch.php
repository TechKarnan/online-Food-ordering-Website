<?php
include "../database.php" 
?>
<?php
$sql="select image from image";
$res=$con->query($sql);
if($res->num_rows>0)
{
	 while($row=$res->fetch_assoc())
	 {
		 echo"<img width='300px' height='300px' src='data:image;base64,{$row['image']}'>";
	 }  
}
else
{
	echo "error";
}




?>