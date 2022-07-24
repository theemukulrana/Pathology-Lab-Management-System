<?php

$p_name=$_POST["p_name"];
$g_name=$_POST['g_name'];
$p_mob=$_POST['p_mob'];
$p_email=$_POST['p_email']; 
$g_mob=$_POST['g_mob'];
$test_type=$_POST['test_type'];
$pay_id=$_POST['pay_id'];


$link=mysqli_connect('localhost','root','','project2');
if(!$link) die('failed to connect to database');
else { 

   $que="insert into patient(p_name,guardian_name,p_mob,p_email,g_mob,test_type,payment_id) values('$p_name','$g_name','$p_mob','$p_email','$g_mob','$test_type','$pay_id')";
   
   $result=mysqli_query($link,$que);
   //To add into test table 
   $que2="insert into test(payment_id,test_type) values('$pay_id','$test_type')";
   $result2=mysqli_query($link,$que2);
   
   if($result and $result2) echo("Successfully inserted ");
   else echo("Error in inserting ".$link->error);
   
   
   
   }

 ?>