<?php
  session_start();
  $pay_id=$_POST['payment_id'];
  $plate_count=$_POST['plat_count'];
  $urea_per=$_POST['urea_per'];
  
  $tech_name= $_SESSION['login_id'];
  $detected='0';
  
  $link=mysqli_connect('localhost','root','','project2');
  $qry1="select technician_id from technician where name='$tech_name'";
   
  $res1=mysqli_query($link,"select technician_id from technician where name='$tech_name'");
   $row=mysqli_fetch_array($res1); 
  $tech_id=$row['technician_id'];
   
  if($urea_per){ 
    if($urea_per<40) $detected="GOOD HEALTH" ;
	else   $detected="MORE UREA" ;
	}
	
 if($plate_count and !$urea_per){ 
      if($plate_count<500) $detected="LOW PLATELET";
	  else $detected="GOOD HEALTH";
	  } 
	  
  
  
  
  if(!$link) die("Failed to connect to server ");
  
  
  //$qry="update patient set technician_id='$tech_id',urea_per='$urea_per',platelent_count='$plate_count',detected_disease='$detected' where  payment_id='$pay_id'";
  
  $result=mysqli_query($link,"update patient set technician_id=$tech_id,urea_per='$urea_per',platelent_count='$plate_count',detected_disease='$detected' where  payment_id='$pay_id'");
  if($result){
  echo ('<script type="text/javascript"> alert("updated successfully "); </script>');
  
  header("location:test_details.html"); }
  else echo "error"; 
  
 ?> 