<?php
session_start();


?>


<!DOCTYPE html>
<html>
<head>
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
<link rel="stylesheet" type="text/css" href="../css/admin1.css">






</head>
<body>







<div id="admin">
<div id="head">
<h1>Food Odering|Change Admin
Password</h1>
</div>
<div id="login">
<div id="table1">

<form method="post" action="database/admin_change.php">

<table style="border-collapse:separate; border-spacing:10px;" border="0" width="60px" >

<tr>
<td align="center"><input type="text" placeholder="old-password" class="text" name="old" id="old"></td>
</tr>
<tr>
<td><input type="password" placeholder="new-password" class="text" name="new"></td>
</tr>
<tr>
<tr>
<td><input type="password" placeholder="retype-password" class="text" name="renew" ></td>
</tr>
<tr>
<td><input type="submit"  class="btn btn-primary btn-lg" id="submit" value="login" onclick="check()"></td>
</tr>



<?php
if(isset($_GET['mes']))
{
	$mes1=$_GET['mes'];
	echo "<tr><td><b id='mes'>$mes1</b></td></tr>";
}
?>


</table>

</form>


</div>

</div>
</div>
</body>
</html>

