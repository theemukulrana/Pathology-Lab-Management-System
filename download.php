<?php
session_start();
$pay_id=$_POST['pay_id'];
  
  
  $link = mysqli_connect('localhost', 'root', '', 'project2');  
if(!$link)
{ 
die('Failed to connect to server: ');
 } 

 //$qry = 'SELECT * from patient where payment_id="$pay_id"';
 
 $result = mysqli_query($link,"SELECT p_name,payment_id,p_mob,urea_per,platelent_count,detected_disease,doctor_sugg,referred_medicines ,test_date,test_time from patient where payment_id='$pay_id'");
 $count=mysqli_num_rows($result);
 
 
require_once __DIR__ . '/vendor/autoload.php';

if($count){

$row = mysqli_fetch_assoc($result);
{
  
 $p_name=$row['p_name'];
 $payment_id=$row['payment_id'];
 $p_mob=$row['p_mob'];
 $test_date=$row['test_date'];
 $test_time=$row['test_time'];
 $urea_per=$row['urea_per'];
 $platelent_count=$row['platelent_count'];
 $detected_disease=$row['detected_disease'];
 $doctor_sugg=$row['doctor_sugg'];
 $referred_medicines=$row['referred_medicines'];
}

$mpdf=new mPDF();


$data='';
$data.='<h1><center>TEST REPORT</center></h1>'; 
$data.='<center>PAYMENT ID </center> : '.$payment_id.'<br>';
$data.='<strong> PATIENT NAME: </strong>'.$p_name.'<br>';
if($urea_per) $data.='<strong> UREA PERCENTAGE : </strong>'.$urea_per.'<br>';
if($platelent_count) $data.='<strong> PLATELET COUNT : </strong>'.$platelent_count.'<br/>';

$data.='<strong> TEST_DATE: </strong>'.$test_date.'<br/>';
$data.='<strong> DOCTORS SUGGESTION : </strong>'.$doctor_sugg.'<br/>';
$data.='<strong> REFERRED MEDICINES : </strong>'.$referred_medicines.'<br/>';


$mpdf->WriteHTML($data);
$mpdf->Output('test_report.pdf','D');

}
else echo'<h1>RECORD NOT FOUND </h1>';
?>
