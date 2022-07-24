<?php 
session_start();
$doc_name=$_SESSION['login_id'];

$link=mysqli_connect('localhost','root','','project2');
  
  if(!$link) die("Failed to connect to server ");
  

$q2="select doctor_id from doctor where name='$doc_name'"; 
$r2=mysqli_query($link,$q2); 
  
$row=mysqli_fetch_array($r2);
$doc_id=$row['doctor_id']; 

  
  $qry="select p_name,p_mob,doctor_id,referred_medicines,doctor_sugg from patient where doctor_id='$doc_id'"; 
  $result=mysqli_query($link,$qry);
  
  $count=mysqli_num_rows($result); 
  
  if($count){  
     
echo '<center><h1>ADVICED BY '.$doc_id. '</h1></center>';
	    echo '<table border="1"> 
		
		
<th> PATIENT NAME </th> 
<th> PATIENT MOBILE </th>
<th> DOCTOR ID  </th>
<th> MEDICINES REFERRED</th>
<th>HEALTH ADVICE </th> 
';

while($row = mysqli_fetch_array($result)){

echo('<tr> 

<td>'.$row['p_name'].'</td>
<td>'.$row['p_mob'].'</td>
<td>'.$row['doctor_id'].'</td> 
<td>'.$row['referred_medicines'].'</td>
<td>'.$row['doctor_sugg'].'</td>
</tr>'); }


echo '</table>';


}  

if(!$count)  echo (" IT SEEMS TO BE YOU HAVEN'T ADVICED ANYONE YET ");

echo '<br><br><a href="admin_doctor.php" style="text-decoration :none; margin-left : 20px;">BACK</a> <br><br>';
 ?>