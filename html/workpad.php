<?php
include "database.php";
?>
<!doctype html>
<html>
<head>
<title>home page</title>
<link type="text/css" rel="stylesheet" href="style.css">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
</head>
<?php include "head.php"?>

<body>


<table border="1" cellpadding="12px" >
<tr>
<td valign="left">preetham</td>
<td colspan="3" align="right">prajwal</td>
<td td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>
1233
</td>
<td>
56677
</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</table>

<button class="btn btn-primary">click here</button>
<div>
<b><h1>preetham</h1></b>
</div>

<a href="#" class="square_btn">BUTTON</a>
<?php
 $id="f".uniqid();
 echo $id.'\n';

echo "helo".$id;

 ?>
<br>
<br>
FLEX:
	width:81%;
	min-height:800px;
    margin:auto;
	background-color:#dfe4ea;
	margin-top:10%;
	*/


<!--<div id="auto">
<script>
$(document).ready(function()
{
	setInterval(function(){
	$("#auto").load("dashboard.php");
	refresh();
},1000);
});
</script>
</div>-->





<!--<table   border="0" id="pic" style="border-collapse:separate; border-spacing:10px;">
<tr>
<td><img src="../images/dosa.jpeg" height="150px"  width="300px"  class="img-rounded">
<td><img src="../images/samosa.jpeg" height="200px"width="300px"  class="img-rounded"></td>
<td><img src="../images/noodels.jpeg" height="200px"width="300px" class="img-rounded" ></td>
<td><img src="../images/pizza.jpeg" height="200px" width="300px"  class="img-rounded"></td>
</tr>

<tr>
<td align="center"><b>Dosa</b></td>
<td align="center"><b>Samosa</b></td>
<td align="center"><b>Noodels</b></td>
<td align="center"><b>Pizza</b></td>
</tr>

<tr>
<td align="center"><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
</td>
<td align="center"><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
</td>
<td align="center"><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
</td>
<td align="center"><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
</td>
</tr>

<tr>
<td align="center"><b>Prie INR 150/-   <a href="#" class="btn btn-success">Order Now</a></b></td>
<td align="center"><b>Price INR 180/- <a href="#" class="btn btn-success">Order Now</a></b></td>
<td align="center"><b>Price INR 120/- <a href="#" class="btn btn-success">Order Now</a></b></td>
<td align="center"><b>Price INR 100/- <a href="#" class="btn btn-success">Order Now</a></b></td>
</tr>

<tr>
<td><img src="../images/burger.jpeg" height="200px"  width="300px"  class="img-rounded"></td>
<td><img src="../images/gobi.jpg" height="200px"  width="300px"  class="img-rounded"></td>
<td><img src="../images/poha.jpeg" height="200px"  width="300px"  class="img-rounded"></td>
<td><img src="../images/momos.jpeg" height="200px"  width="300px"  class="img-rounded"></td>
</tr>
<tr>
<td align="center"><b>Burger</b></td>
<td align="center"><b>Gobi</b></td>
<td align="center"><b>Poha</b></td>
<td align="center"><b>Momos</b></td>

<tr>
<td align="center"><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
</td>
<td align="center"><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
</td>
<td align="center"><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
</td>
<td align="center"><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
</td>
</tr>


</tr>
<tr>
<td align="center"><b>Prie INR 150/-  <a href="#" class="btn btn-success">Order Now</a></b></td>
<td align="center"><b>Price INR 180/-<a href="#" class="btn btn-success">Order Now</a></b></td>
<td align="center"><b>Price INR 120/-<a href="#" class="btn btn-success">Order Now</a></b></td>
<td align="center"><b>Price INR 100/-<a href="#" class="btn btn-success">Order Now</a></b></td>
</tr>




<tr>
<td><img src="../images/french.jpeg" height="200px"  width="300px"  class="img-rounded"></td>
<td><img src="../images/belpuri.jpeg" height="200px"  width="300px"  class="img-rounded"></td>
<td><img src="../images/chaat.jpeg" height="200px"  width="300px"  class="img-rounded"></td>
<td><img src="../images/pasta.jpeg" height="200px"  width="300px"  class="img-rounded"></td>
</tr>
<tr>
<td align="center"><b>French Fries</b></td>
<td align="center"><b>Belpuri</b></td>
<td align="center"><b>Chaat</b></td>
<td align="center"><b>Pasta</b></td>
</tr>


<tr>
<td align="center"><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
</td>
<td align="center"><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
</td>
<td align="center"><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
</td>
<td align="center"><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
</td>
</tr>

<tr>
<td align="center"><b>Prie INR 150/- <a href="#" class="btn btn-success">Order Now</a></b></td>
<td align="center"><b>Price INR 180/-<a href="#" class="btn btn-success">Order Now</a></b></td>
<td align="center"><b>Price INR 120/-<a href="#" class="btn btn-success">Order Now</a>/b></td>
<td align="center"><b>Price INR 100/-<a href="#" class="btn btn-success">Order Now</a></b></td>
</tr>

</table>
</div>
-->
 




<div id="lft">
<table border="0" class="table  table-hover " width="300px" height="500px">
<thead>
<tr><td id="head">Food Categories<i class="fa fa-utensils"></i></td></tr>
</thead>
<tbody>
<tr><td><a href="#">Italian</a></td></tr>
<tr><td><a href="#">Thai</a></td></tr>
<tr><td><a href="#">South India</a></td></tr>
<tr><td><a href="#">Nort India</a></td></tr>
<tr><td><a href="#">Starters</a></td></tr>
<tr><td><a href="#">deserts</a></td></tr>
<tr><td><a href="#">chineese</a></td></tr>

<tr>
</table>
</div>






<div id="cover">
	    <div class="col-md-12 well" id="nav"></div>
		<div id="food_category">
		<table border="0" id="t1">
		<tr><td><b class="heading">Food Category</b></td></tr>
		<tr><td><input type="text" class="t" placeholder="food category"></td></tr>
		<tr><td align="center" ><a href="#" class="btn btn-danger" id="add"><b class="heading">Add</b></a></td></tr>
		</table>
		</div> 





<br/>
<br/>
<br/>
<br/>
<form method="post">
name:<input type="text" name="name" >
age:<input type="number" name="age">
<input type="submit" value="submit" name="submit">
</form>

<?php

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
    $age=$_POST['age'];
	$sql="insert into sample(name,age)values('$name',$age)";
	$sql1="select * from sample";
	$res=$db->query($sql);
    if($res)
	{
		header("location:sample.php");
		exit;
	}
	else
	{
		echo"not inserted";
	}
	
}



?>





		<form action='database/order.php' method='post'>
	
		
		<input type='submit' value='Order Now'  class='square_btn' />





 <form action='database/order.php ' method='post'>
		
		<b>qty</b><input type='text' name='qty'>
		<input type='hidden' value=".$row["fid"]." name='fid'>
	    <input type='submit' value='Order Now'  class='square_btn' />
		
		
   </form>




</body>
</html>