<?php
//$doc_id=$_POST['doc_id']; 
$link=mysqli_connect('localhost','root','','project2');
  
  if(!$link) die("Failed to connect to server ");
  
  
  $qry="select p_name,p_mob,p_email,payment_id,test_type,platelent_count,urea_per,detected_disease,technician_id from patient where doctor_sugg IS NULL or referred_medicines is null"; 
  $result=mysqli_query($link,$qry);
  $count=mysqli_num_rows($result);
  
  if($count){  
     
echo '<center><h1> PATIENTS HAVENT ADVICED  </h1></center>';
	    echo '<table border="1"> 
		
		
<th> PATIENT NAME </th> 
<th> PATIENT MOBILE </th>
<th> PATIENT EMAIL </th>
<th> PAYMENT ID</th>
<th>TEST TYPE </th>
<th>PLATELET COUNT </th>
<th> UREA % </th> 
<th> DETECTED DISEASE </th>
<th>TECHNIICAN ID </th> 
';

while($row = mysqli_fetch_array($result)){

echo('<tr> 

<td>'.$row['p_name'].'</td>
<td>'.$row['p_mob'].'</td>
<td>'.$row['p_email'].'</td> 
<td>'.$row['payment_id'].'</td>
<td>'.$row['test_type'].'</td>
<td>'.$row['platelent_count'].'</td>
<td>'.$row['urea_per'].'</td>
<td>'.$row['detected_disease'].'</td>
<td>'.$row['technician_id'].'</td>
</tr>'); }


echo '</table>';


}

if(!$count)  { echo "<h1> ALL PATIENTS HAVE BEEN ADVICED </h1>";}
 ?>