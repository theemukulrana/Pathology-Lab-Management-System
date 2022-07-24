<?php  

session_start();
$login=$_SESSION['login_id'];
echo "<h3 style='color:red;background-color :yellow;text-align:right;float:right;padding:10px;width:80px;margin-right:50px;'>".$login."</h3><br><br>";


?>
<html>
<head>
     <title>Technician</title>
	 
	 <style>
	    a { text-decoration : none;}
	   .log{ float:right;
	         margin-right:10%;}
		#home{ margin-left:40px;}
		table{ margin : 150px 30% 50px 30%; }
		table td{ width :200px; 
		          height : 150px;
				  background-color :yellow;
				  border : 3px solid red;
				  padding :10px;
				  text-align : justify;}
		
		
		body{border : 20px solid red;}
	 </style>
</head>

<body>
  <br><br>
    <div id="home" > <a href="index.html" >HOME </a></div>
   <div class="log" >  <a href="logout.php" > LOGOUT </a>   </div>
   <br>
   
   
  <table>
  
  
       <tr><td><a href="test_details.html"><h3>TO UPDATE TEST DETAILS</h3></a></td>
	        <td><a href="testbytech.php"><h3> TO SEE THE TESTS CONDUCTED BY ME</h3> </a> </td></tr>
	   <tr> <td> <a href="pat_data.php" ><h3>TO SEE ABOUT ANY PATIENT DETAILS </h3> </a>  </td>
	        <td><a href="test_pen.php"><h3>TO SEE PATIENTS HAVENT TESTED</h3></a></td></tr>
		<tr><td><a href="test_untime.php"><h3>PATIENTS HAVENT ALLOTED TEST TIME</h3></a> </td> 
		    <td><a href="test_time_update.html"> <h3>TO UPDATE TEST TIMINGS</h3> </a></td></tr>
	   
	   
	   
  </table>
  
</body>

</html>