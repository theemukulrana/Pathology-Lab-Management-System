
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="print.css" media="print" >
  <?php 
  $pay_id=$_POST['pay_id'];
  $link = mysqli_connect('localhost', 'root', '', 'project2');  
if(!$link)
{ 
die('Failed to connect to server: ');
 } 

 //$qry = 'SELECT * from patient where payment_id="$pay_id"';
 
 $result = mysqli_query($link,"SELECT p_name,payment_id,p_mob,urea_per,platelent_count,detected_disease,doctor_sugg,referred_medicines ,test_date,test_time from patient where payment_id='$pay_id'");
 $count=mysqli_num_rows($result);

if($count){  

       echo "<center> **do not worry if some value is '0' (it means you have not opted for that test)**</center> ";
       echo '<center><h1>TEST REPORT </h1></center>';
	    echo '<html><head><style>body{padding:25px;}</style></head><table border="1"> 
		
		
<th> PATIENT NAME </th> 
<th> PAYMENT ID  </th>
<th> PATIENT MOBILE  </th>
<th>TESTED DATE </th>
<th>TESTED TIME </th> 
<th> urea %</th>
<th>Platelet Count </th> 
<th>detected disease</th>
<th>doctors suggeston</th>
<th>medicines list </th> ';

while($row = mysqli_fetch_array($result)){

echo('<tr> 

<td>'.$row['p_name'].'</td>
<td>'.$row['payment_id'].'</td>
<td>'.$row['p_mob'].'</td>
<td>'.$row['test_date'].'</td> 
<td>'.$row['test_time'].'</td>  
<td>'.$row['urea_per'].'</td>
<td>'.$row['platelent_count'].'</td>
<td>'.$row['detected_disease'].'</td>
<td>'.$row['doctor_sugg'].'</td>
<td>'.$row['referred_medicines'].'</td>
</tr>'); }


echo '</table><br>';

echo'<button onclick="window.print();" class="btn btn-primary" id="print-btn" >Print</button></html>';

}


 
 if(!$count) { echo("<center> <h1> REPORT NOT FOUND .CHECK AGAIN </h1></center> ");
 include('test_rep.html'); }
?>