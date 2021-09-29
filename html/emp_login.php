<!DOCTYPE html>
<html>
<head>
<meta  name="viewport" content="width=device-width,initial-scale=1">
<title>admin</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<link rel="stylesheet" type="text/css" href="../css/admin.css">





</head>
<body>







<div id="admin">
<div id="head">
<h3>Food Odering|emp
Login</h3>
</div>
<div id="login">
<div id="table1">
<form method="post" action="database/elogin.php">
<table style="border-collapse:separate; border-spacing:10px;" border="0" width="60px" >

<tr>
<td align="center"><input type="text" placeholder="emp_login" class="text" name="dname"></td>
</tr>
<tr>
<td><input type="text" placeholder="password" class="text" name="dpass"></td>
</tr>
<tr>
<td><input type="submit"  class="btn btn-primary btn-lg" id="submit" value="login"></td>
</tr>


</table>

</form>

<?php

if(isset($_GET["did"]))
{
	
	echo "<script>alert('invalid id number')</script>";
	
}



?>

</div>

</div>
</div>
</body>
</html>

