<?php







include "database.php";



$uid=$_POST['uid'];


   
require('fpdf181/fpdf.php');


$pdf=new FPDF();
 
$pdf->AddPage();

$pdf->SetFont('Arial','B',12);


$sql1="select * from status s where s.order_id='$uid' and status='ordered'";
$res1=$con->query($sql1);
$row1=$res1->fetch_assoc();



$sql="select * from dashboard d ,add_food a where d.fid=a.fid";
$row=$res=$con->query($sql);

$row->fetch_assoc();


$sql2="select * from cart where orderid='$uid' ";

$res2=$con->query($sql2);
$row2=$res2->fetch_assoc();


$sql3="select * from user where uid='$uid' ";
$res3=$con->query($sql3);
$row3=$res3->fetch_assoc();









$pdf->Cell(50,5,'order_id:'.$uid,1,0,'C');
$pdf->Cell(140,5,'Online Food ordering!:',1,1,'C');
$pdf->ln(10);

$pdf->ln(10);


$pdf->Cell(25,5,'from:',0,0,'0');
$pdf->Cell(173,5,'date:'.$row1['date'],0,1,'R');
$pdf->Cell(58,5,'Food Hunter',0,0,'0');
$pdf->Cell(140,5,'time:'.$row1['time'],0,1,'R');
$pdf->Cell(58,5,'online food order ',0,1,'0');
$pdf->Cell(58,5,'building #126',0,1,'0');
$pdf->Cell(58,5,'banashankari 2nd stage',0,1,'0');
$pdf->Cell(58,5,'Banglore-57',0,1,'0');




$pdf->ln(15);

$sql5="select * from dashboard d ,add_food a where d.fid=a.fid";
$res5=$con->query($sql5);
$row5=$res5->fetch_assoc();


$pdf->Cell(25,5,'to:',0,0,'0');
$pdf->Cell(170,5,'date:'." ".$row5['date'],0,1,'R');
$pdf->Cell(58,5,'name:'." ".$row3['fname'],0,0,'0');
$pdf->Cell(138,5,'Time: '."".$row5['time'],0,1,'R');
$pdf->Cell(58,5,'flat No:'."   ".$row2['flat'],0,1,'0');
$pdf->Cell(58,5,'street:'."   ".$row2['street'],0,1,'0');
$pdf->Cell(58,5,'Area:'."   ".$row2['area'],0,1,'0');
$pdf->Cell(58,5,'landmark:'."   ".$row2['land'],0,1,'0');
$pdf->Cell(58,5,'city:'."   ".$row2['city'],0,1,'0');
$pdf->Cell(58,5,'pincode:'."   ".$row2['pin'],0,1,'0');



$pdf->ln(10);



$pdf->Cell(190,5,'INOVICE:','B',1,'C');
$pdf->ln(10);

$pdf->Cell(40,5,'SL_NO:',0,0,'0');
$pdf->Cell(50,5,'food name:',0,0,'c');
$pdf->Cell(50,5,'quantity',0,0,'c');
$pdf->Cell(40,5,'price:',0,1,'0');

$sql="select  d.price ,oid,fname,qty from dashboard d ,add_food a where d.fid=a.fid";
$row=$res=$con->query($sql);







$sql6="select sum(d.price) as total from dashboard d,status s where s.status='ordered' and d.uid=s.uid group by (order_id)"; 
$res6=$con->query($sql6);
$row6=$res6->fetch_assoc();


$i=1;

while($row=$res->fetch_assoc())
{
$pdf->Cell(40,5,$i,1,0,'0');
$pdf->Cell(50,5,$row['fname'],1,0,'c');
$pdf->Cell(50,5,$row['qty'],1,0,'c');
$pdf->Cell(40,5,$row['price'],1,1,'0');
$i=$i+1;
}
$pdf->Cell(140,5,'GRAND TOTAL',1,0,'c');
$pdf->Cell(40,5,$row6['total'],1,0,'c');
$pdf->ln(20);

$pdf->Cell(190,5,' Authorised signature:',0,1,'R');
$pdf->ln(10);
$pdf->Cell(190,5,'Thank you','B',1,'C');

$pdf->Cell(190,5,'@copyright food hunters',0,1,'C');
$pdf->Cell(190,5,'payment type:cash on dilvery only','B',1,'C');




$pdf->Output();



?>