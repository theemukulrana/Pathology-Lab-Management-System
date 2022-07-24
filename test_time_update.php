<?php 


   $pay_id=$_POST['pay_id']; 
   $test_time=$_POST['test_time'];
   $test_date=$_POST['test_date'];
   $test_place=$_POST['test_place']; 
   
   
   $link=mysqli_connect("localhost","root","","project2"); 
   
  if(!$link)  { die("Failed to connect to server "); } 
  
  $qry="update patient set test_date='$test_date',test_time='$test_time',test_place='$test_place' where payment_id='$pay_id'"; 
  $qry2="select p_email,p_name from patient where payment_id='$pay_id'";
  
  $result=mysqli_query($link,$qry);
  $result2=mysqli_query($link,$qry2);
  
  
  $row=mysqli_fetch_array($result2);
  $p_name=$row['p_name'];
  $p_email=$row['p_email'];
 
  if(!$result)  { echo("ERROR IN RUNNING QUERY "); 
  }
  if($result and $result2){   
        



         
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

  
$from='kollinagavenkatapavan2000@gmail.com';
$to=$p_email;
$from_name='Pavan Kolli';
$subject='IIITDMJ LAB TEST TIMINGS  ';
$body='Dear '.$p_name.' you have been allotted following test timings and place on '.$test_date.' at '.$test_time.' at the place '.$test_place;
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
 echo "Message sent successfully...";
} else {
 echo "Mailer Error: " . $mail->ErrorInfo;
}
 
}

smtpmailer($to, $from, $from_name, $subject, $body, $pass);

  		
  
       echo '<script type="text/javascript"> 
		   alert("updated successfully"); 
		</script> '); 
		 
  }
		
  include("test_time_update.html");   
   


?>