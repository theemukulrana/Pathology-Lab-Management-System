<?php

$p_name=$_POST['p_name'];
$link = mysqli_connect('localhost', 'root','', 'project2');  
if(!$link)
{ 
die('Failed to connect to server: ');
 } 

 //$qry = 'SELECT * from patient where p_name="$p_name"';
 $result = mysqli_query($link,"select p_name,payment_id,p_mob from patient where p_name='$p_name'");
 
 $count=mysqli_num_rows($result); 
 
 if($count){
 echo '<h1>The Patient Details are - </h1>';
 echo '<table border="1"> 

<th> PATIENT NAME </th> 
<th> PAYMENT ID  </th>
 <th> PATIENT MOBILE  </th> ';

/*Show the rows in the fetched result set one by one*/ 
while($row = mysqli_fetch_array($result)){

echo('<tr> 

<td>'.$row['p_name'].'</td>
<td>'.$row['payment_id'].'</td>
<td>'.$row['p_mob'].'</td> 
</tr>'); }


echo '</table>';
 }

if(!$count) echo("NO such patient with name ".$p_name); 


  ?> 