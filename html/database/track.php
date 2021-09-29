<?php
include "../database.php"


$oid=$_POST['oid'];

$sql="select * from status s inner join user u on s.uid=u.uid and status='ordered' ";

$res=$con->query($sql);

if($res->fetch_assoc()>0)
{
      $i=0;
        while($row=$res->fetch_assoc())
		{
		$i=$i+1;
		
		echo '
		<tr>
		<td>'.$i.'
		</td>
		<td>'.$row['order_id'].'</td>
	    <td>'.$row['uid'].'</td>
		<td style="color:sucess;">'.$row['status'].'</td>
		<td>'.$row['date'].'</td>
	    <td>'.$row['fname'].'</td>
		<td>'.$row['mob'].'</td>
		<td>
		
		</td>
		
		</tr>
		
		';
		}
}

else
{
	echo 'no records found';
}	


?>