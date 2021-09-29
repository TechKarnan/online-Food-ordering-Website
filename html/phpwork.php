<!DOCTYPE html>
<html>
<body>
<form action="phpwork.php " method="post"  >
<label>name:</label>
<input type="text" name="uname"  >
<input type="submit" name="login" value="submit">
</form>

<?php

if(isset($_POST["login"]))
{

}
else
{
	echo "please fill the form";
}


?>

</body>
</html>

$sql= "SELECT * FROM login WHERE umail='{$_POST["umail"]}' and upass='{$_POST["upass"]}' ";
$res=$db->query($sql);