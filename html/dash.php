




<?php
include "database.php";
?>
 <?php
$sql="select * from status where status='ordered'";
   
$res1=$con->query($sql);
   
$ordered=$res1->num_rows;
   


$sq2="select * from status where status='confirmed'";
   
$res2=$con->query($sq2);
   
$confirmed=$res2->num_rows;



$sq3="select * from status where status='dilvery'";
   
$res3=$con->query($sq3);
   
$dilvery=$res3->num_rows;


$sq4="select * from status where status='preparing'";
   
$res4=$con->query($sq4);
   
$prepaing=$res4->num_rows;


$sq5="select * from status where status='ready'";
   
$res5=$con->query($sq5);
   
$pickup=$res5->num_rows;







$sq6="select * from status where status='cancelled'";
   
$res6=$con->query($sq6);
   
$cancelled=$res6->num_rows;



$sq7="select * from user ";
   
$res7=$con->query($sq7);
   
$user=$res7->num_rows;


$sq8="select * from status ";
   
$res8=$con->query($sq8);
   
$total=$res8->num_rows;
   







?>





<!DOCTYPE html>
<html>



<body>

<div id="cover1">
  
  <div class="a">
  <table border="0" width="100%" height="100px">
  <tr><td>TOTAL ORDER<hr></td></tr>
  <tr><td><?php echo "<b class='text' >$total<b>";?></td></tr>
  </table>
  </div>
 
  <div class="a">
  <table border="0" width="100%" height="100px">
  <tr><td>NEW ORDER<hr></td></tr>
  <tr><td><?php echo "<b class='text' >$ordered<b>";?></td></tr>
  </table>
  </div>
  
   <div class="a">
  <table border="0" width="100%"height="100px">
  <tr><td>CONFIRMED ORDER<hr></td></tr>
  <tr><td><?php echo "<b class='text' >$confirmed<b>";?></td></tr>
  </table>
  </div>
 
 
  </div>
  
  
  
  
  <div id="cover2">
  
  
  
  <div class="a">
  <table border="0" width="100%" height="100px">
  <tr><td>FOOD BEING PREPARED<hr></td></tr>
  <tr><td><?php echo "<b class='text' >$prepaing<b>";?></td></tr>
  </table>
  </div>
 
  <div class="a">
  <table border="0" width="100%" height="100px">
  <tr><td>FOOD PICKUP<hr></td></tr>
  <tr><td><?php echo "<b class='text' >$pickup<b>";?></td></tr>
  </table>
  </div>
  
   <div class="a">
  <table border="0" width="100%" height="100px">
  <tr><td>TOTAL FOOD DELIVER<hr></td></tr>
  <tr><td><?php echo "<b class='text' >$dilvery<b>";?></td></tr>
  </table>
  </div>
  
 </div>
 
 
 
  <div id="cover3">
  
  
  <div class="a">
  <table border="0" width="100%" height="100px">
  <tr><td>CANCELLED ORDER<hr></td></tr>
  <tr><td><?php echo "<b class='text'>$cancelled<b>";?></td></tr>
  </table>
  </div>
  
 
 
  <div class="a">
  <table border="0" width="100%" height="100px">
  <tr><td>TOTAL REG.USER<hr></td></tr>
  <tr><td><?php echo "<b class='text' >$user<b>";?></td></tr>
  </table>
  </div>
  
  

  <div class="a" style="background-color:#f5f6fa;">
   <table border="0" width="100%" height="120px">
  <tr><td></td></tr>
  <tr><td></td></tr>
  </table>
  </div>
 
  

  </div>
   
</body>
</html>



