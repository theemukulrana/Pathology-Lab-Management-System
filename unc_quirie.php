<?php 

 $link=mysqli_connect('localhost','root','','project2');
 
 $qry="select * from contact where return_msg is null";
 
 $result=mysqli_query($link,$qry); 
 
 $count=mysqli_num_rows($result); 
 
 if($count){  
 
  echo '<center> <h1> UNSOLVED QUIRIES </h1> </center> ';
 echo '<table border="1"> 
<th>QUIRIE ID </th>
<th> CUSTOMER NAME </th> 
<th> CUSTOMER COMPANY </th>
  <th>CUSTOMER EMAIL </th> 
 <th>CUSTOMER PHONE</th>
 <th>QUERY</th>
 <th>QUIRIED ON </th>
 
 ';

/*Show the rows in the fetched result set one by one*/ 
while($row = mysqli_fetch_array($result)){

echo('<tr> 
<td>'.$row['quirie_id'].'</td>
<td>'.$row['customer_name'].'</td>
<td>'.$row['customer_company'].'</td>
<td>'.$row['customer_email'].'</td>
<td>'.$row['customer_phone'].'</td> 
<td>'.$row['customer_msg'].'</td>
<td>'.$row['quiried_on'].'</td>

</tr>'); }


echo '</table>';
 }
  if(!$count){   echo "<center> <h1> ALL QUERIES SOLVED </h1></center>"; }


?>