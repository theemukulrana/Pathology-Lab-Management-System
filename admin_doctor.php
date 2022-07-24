<?php 
session_start();
$login=$_SESSION['login_id'];
echo "<h3 style='color:red;background-color :yellow;text-align:right;float:right;padding:10px;width:80px;margin-right:50px;'>".$login."</h3><br><br>";

?> 

<html>
    <head>
	    <title>Admin_Panel</title>
		<style>
	   .log{ float:right;
	         margin-right:10%;}
		a { text-decoration : none;}
		table{ margin : 100px 30% 50px 30%; }
		#home{ margin-left:40px;}
		table td{ width :200px; 
		          height : 150px;
				  background-color :yellow;
				  border : 3px solid red;
				  padding :10px;
				  text-align : none;}
		body{border : 20px solid red;}
	 </style>
	</head>
	
	
	<body>
	   <br><br>
	
	  <div id="home"> <a href="index.html"  >HOME </a>  </div>
	
	  <div class="log"><a href="logout.php" > LOGOUT </a> </div>
	  <br>
	  <table border="1">
	  <tr> <td><a href="testbydoc.php"><h3> TO SEE THE DETAILS OF PATIENTS ADVICED BY YOU</h3></a> </td>
	  
	       <td> <a href="pat_data.php" ><h3>TO SEE ABOUT ANY PATIENT DETAILS</h3></a></td>
	  </tr> 
	  <tr><td><a href="med_up.php" ><h3> TO UPDATE MEDICINES LIST OF PATIENT</h3> </a>  </td>
	      <td><a href="doc_pen.php"><h3>TO SEE PATIENTS HAVENT ADVICED</h3></a></td>
	  </tr>
	  
	  </table>
	  
	
	</body>




</html>