<?php


$name=$_POST['name'];
$company=$_POST['company'];
$toad=$_POST['Email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];
$date=date('Y-m-d');

$link=mysqli_connect('localhost','root','','project2'); 
$qry="insert into contact(customer_name,customer_company,customer_email,customer_phone,customer_msg,quiried_on) values('$name','$company','$toad','$phone','$msg','$date')";
$result=mysqli_query($link,$qry); 

if($result){ 
echo"<center> <h2>YOUR REQUEST HAS BEEN UPDATED </h2> </center>"; 

}

else echo("YOUR REQUEST CANNOT BE SENT.TRY LATER.");

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

  
$from='kollinagavenkatapavan2000@gmail.com';
$to=$toad;
$from_name='Pavan Kolli';
$subject='IIITDMJ LAB ';
$body='Dear '.$name.'your message has been successfully sent to our contact team.Thank you for helping us to provide better service.';
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
 echo '<script type="text/javascript">  alert("YOU ALSO GOT A MAIL")</script>';
} else {
 echo "Mailer Error: " . $mail->ErrorInfo;
}
 
}

 
  header("location: contactus.html");

?>