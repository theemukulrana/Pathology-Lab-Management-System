<?php
session_start();
$tech_name=$_SESSION['login_id'];
 
$link=mysqli_connect('localhost','root','','project2');
$q2="select technician_id from technician where name='$tech_name'";
$r2=mysqli_query($link,$q2);
$row=mysqli_fetch_array($r2);
$tech_id=$row['technician_id'];
  if(!$link) die("Failed to connect to server ");
  
  
  $qry="select p_name,p_mob,technician_id,platelent_count,urea_per from patient where technician_id='$tech_id'"; 
  $result=mysqli_query($link,$qry);
  $count=mysqli_num_rows($result);
  
  if($count){  


       echo '<center><h1>TESTS BY '.$tech_id. '</h1></center>';
	    echo '<table border="1"> 
		
		
<th> PATIENT NAME </th> 
<th> PATIENT MOBILE </th>
<th> TECHNICIAN ID  </th>
<th> PLATELET COUNT</th>
<th>UREA PERCENTAGE </th> 
';

while($row = mysqli_fetch_array($result)){

echo('<tr> 

<td>'.$row['p_name'].'</td>
<td>'.$row['p_mob'].'</td>
<td>'.$row['technician_id'].'</td> 
<td>'.$row['platelent_count'].'</td>
<td>'.$row['urea_per'].'</td>
</tr>'); }


echo '</table>';


}


 if(!$count)  echo "<h1>TECHNICINAN  $tech_id HAVEN'T TESTED ANYONE YET </h1>";  
 
  echo '<br><br><a href="technician.php" style="text-decoration :none; margin-left : 20px;">BACK</a> <br><br>';
  
 ?>