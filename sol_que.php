<?php

session_start();
$que_id=$_POST['que_id'];
$ret_msg=$_POST['ret_msg'];
$solver=$_SESSION["login_id"]; 
$date=date('Y-m-d');
$link=mysqli_connect('localhost','root','','project2'); 

$que="update contact set cleared_by='$solver',cleared_on='$date',return_msg='$ret_msg' where quirie_id=$que_id ";
$que2="select customer_name,customer_email from contact where quirie_id=$que_id";


$res=mysqli_query($link,$que); 
$res2=mysqli_query($link,$que2); 

$row=mysqli_fetch_array($res2);

$name=$row['customer_name'];
$toad=$row['customer_email'];



if($res) { 




require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

  
$from='kollinagavenkatapavan2000@gmail.com';
$to=$toad;
$from_name='Pavan Kolli';
$subject='IIITDMJ LAB ';
$body='Dear '.$name.'your message has been  answerd by our team as follows "' .$ret_msg.'  "';
$pass='jxmevrlfwsqfhqnj';




function smtpmailer($to, $from, $from_name, $subject, $body, $pass) {
 
 $mail = new PHPMailer\PHPMailer\PHPMailer();
  //$mail->SMTPDebug = 2;
  $mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = 'ssl';
$mail->IsHTML(true);
$mail->Port = 465;
$mail->Username = $from;
$mail->Password = $pass;
$mail->SetFrom($from, $from_name);
$mail->Subject = $subject;
$mail->MsgHTML($body);
$mail->AddAddress($to);
$mail->AddAddress($from);


$mail->IsSMTP();
if($mail->Send()) {
   echo " MAIL SENT SUCCESSFULLY ";
} else {
 echo "Mailer Error: " . $mail->ErrorInfo;
}

}

smtpmailer($to, $from, $from_name, $subject, $body, $pass);

echo "<script> alert('updated successfully ');</script>";




include('sol_que.html');

}




 ?>