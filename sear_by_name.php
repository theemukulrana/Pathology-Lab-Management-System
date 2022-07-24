<?php

  $p_name=$_POST['p_name']; 
  
  $link=mysqli_connect('localhost','root','','project2');
  
  $qry="select p_name,payment_id,detected_disease,platelent_count,urea_per,technician_id,referred_medicines,doctor_sugg,test_date from patient where p_name='$p_name'"; 
  
  
  $result=mysqli_query($link,$qry); 
  $count=mysqli_num_rows($result);
  if(!$count) echo" <h2> NO RESULTS FOUND </h2><center>";  
 
 
  if($count) { 
     
     echo '<center> <h1>TEST REPORTS </h1> </center> ';
 echo '<table border="1"> 

<th> PATIENT NAME </th> 
<th> PAYMENT ID  </th>
  <th>DETECTED DISEASE </th> 
 <th>PLATELET COUNT</th>
 <th>UREA PER</th>
 <th>TECHNICIAN ID </th>
 <th>REFERRED MEDICINES </th>
 <th>DOCTORS SUGG </th>
 <th>TESTED DATE </th>
 ';

/*Show the rows in the fetched result set one by one*/ 
while($row = mysqli_fetch_array($result)){

echo('<tr> 

<td>'.$row['p_name'].'</td>
<td>'.$row['payment_id'].'</td>
<td>'.$row['detected_disease'].'</td>
<td>'.$row['platelent_count'].'</td> 
<td>'.$row['urea_per'].'</td>
<td>'.$row['technician_id'].'</td>
<td>'.$row['referred_medicines'].'</td>
<td>'.$row['doctor_sugg'].'</td>
<td>'.$row['test_date'].'</td>
</tr>'); }


echo '</table>';
 }

 ?>