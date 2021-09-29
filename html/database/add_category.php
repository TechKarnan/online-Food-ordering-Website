<?php
include "../database.php";


$cat=$_POST['cat'];

if(isset($_POST['delete'])
{

$sql="delete from category where category=$cat";
}
else
{

$sql="insert into category (category)values('$cat')";

}





if($res=$con->query($sql))
{

header("location:../food_category.php?mes='<h2>category added</h2>'");
}

?>