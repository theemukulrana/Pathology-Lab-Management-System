<?php
//$doc_id=$_POST['doc_id']; 
$link=mysqli_connect('localhost','root','','project2');
  
  if(!$link) die("Failed to connect to server ");
  
  
  $qry="select p_name,p_mob,p_email,payment_id,test_type,detected_disease,urea_per,platelent_count,referred_medicines,doctor_sugg from patient where detected_disease IS NOT NULL"; 
  $result=mysqli_query($link,$qry);
  $count=mysqli_num_rows($result); 
  
  if($count){  
     
echo '<center><h1> PATIENTS  TESTED </h1></center>';
	    echo '<table border="1"> 
		
		
<th> PATIENT NAME </th> 
<th> PATIENT MOBILE </th>
<th> PATIENT EMAIL </th>
<th> PAYMENT ID</th>
<th>TEST TYPE </th> 
<th>DETECTED DISEASE </th>
<th>UREA PER </th>
<th>PLATELET COUNT </th> 
<th>REFERRED MEDICINES </th>
<th>DOCTORS SUGG </th>
';

while($row = mysqli_fetch_array($result)){

echo('<tr> 

<td>'.$row['p_name'].'</td>
<td>'.$row['p_mob'].'</td>
<td>'.$row['p_email'].'</td> 
<td>'.$row['payment_id'].'</td>
<td>'.$row['test_type'].'</td>
<td>'.$row['detected_disease'].'</td>
<td>'.$row['urea_per'].'</td>
<td>'.$row['platelent_count'].'</td>
<td>'.$row['referred_medicines'].'</td>
<td>'.$row['doctor_sugg'].'</td>
</tr>'); }


echo '</table>';


}

if(!$count) echo "<h1>NO PATIENT HAVEN'T TESTED YET </h1>"; 
 ?>