<?php 
  
  $conn=mysqli_connect("localhost","root","","project2"); 
  $qry=" select * from technician";
  $res=mysqli_query($conn,$qry); 
  
  if(!$res) die("Failed to connect to server ");
  if($res){ 
      echo '<center> <h1>OURS TECHNICIANS </h1> </center> ';
 echo '<table border="1"> 

<th> TECHNICIAN NAME </th> 
<th> PRIMARY MOBILE </th>
<th>TECHNICIAN  ID </th> 
 
 ';

/*Show the rows in the fetched result set one by one*/ 
while($row = mysqli_fetch_array($res)){

echo('<tr> 

<td>'.$row['name'].'</td>
<td>'.$row['mobile'].'</td>
<td>'.$row['technician_id'].'</td>

</tr>'); }


echo '</table>';
 }

 
  echo '<br><br><a href="admin.php" style="text-decoration :none; margin-left : 20px;">BACK</a> <br><br>';
  
  
  
?>
