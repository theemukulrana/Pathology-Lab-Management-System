<?php
//$doc_id=$_POST['doc_id']; 
$link=mysqli_connect('localhost','root','','project2');
  
  if(!$link) die("Failed to connect to server ");
  
  
  $qry="select p_name,p_mob,p_email,payment_id,test_type from patient where test_time IS NULL or test_date is null"; 
  $result=mysqli_query($link,$qry);
  $count=mysqli_num_rows($result);
  
  if($count){  
     
echo '<center><h1> PATIENTS HAVENT ALLOTTED TEST TIME  </h1></center>';
	    echo '<table border="1"> 
		
		
<th> PATIENT NAME </th> 
<th> PATIENT MOBILE </th>
<th> PATIENT EMAIL </th>
<th> PAYMENT ID</th>
<th>TEST TYPE </th> 
';

while($row = mysqli_fetch_array($result)){

echo('<tr> 

<td>'.$row['p_name'].'</td>
<td>'.$row['p_mob'].'</td>
<td>'.$row['p_email'].'</td> 
<td>'.$row['payment_id'].'</td>
<td>'.$row['test_type'].'</td>
</tr>'); }


echo '</table>';


} 

if(!$count){ echo "<h1>ALL PATIENTS HAVE BEEN ALLOTTED TEST TIME </h1>";}
 ?>