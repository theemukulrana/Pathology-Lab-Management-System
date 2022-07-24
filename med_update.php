<?php
  session_start(); 
  $name=$_SESSION['login_id'];
  
  $link=mysqli_connect('localhost','root','','project2');
  
  if(!$link) die("Failed to connect to server ");
  $q2="select doctor_id from doctor where name='$name'"; 
  $r2=mysqli_query($link,$q2);
  $row=mysqli_fetch_array($r2);
  $doc_id=$row['doctor_id'];
  
  $ref_med=$_POST['med'];
  $sugg=$_POST['sug'];
  $pay_id=$_POST['payment_receipt']; 
  

  
  //$qry="insert into patient(refferred_medicines,doctor_sugg) values('$ref_med','$sugg') where payment_id='$pay_receipt'";
  $qry="update patient set referred_medicines='$ref_med',doctor_sugg='$sugg',doctor_id='$doc_id' where  payment_id='$pay_id'";
  
  $result=mysqli_query($link,$qry);
  
  echo "<script type='text/javascript' >alert('updated successfully '); </script>";
   
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

 $qry2="select p_email from patient where payment_id='$pay_id'"; 
 $res2=mysqli_query($link,$qry2); 
 $toad=$res;
 $from='kollinagavenkatapavan2000@gmail.com';
$to=$toad;
$from_name='Pavan Kolli';
$subject='IIITDMJ LAB MEDICINES ';
$body="Dear customer, your medicne details has been updated by our doctors. Please visi our website and see your test report in which you will get medicines details.";
$pass='jxmevrlfwsqfhqnj';


smtpmailer($to, $from, $from_name, $subject, $body, $pass);


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
 echo "<script type='text/javascript'>  alert('YOU ALSO GOT A MAIL ');</script>";
} else {
 echo "Mailer Error: " . $mail->ErrorInfo;
}
 
}

 
 include("med_up.php"); 
  
 




 ?> 