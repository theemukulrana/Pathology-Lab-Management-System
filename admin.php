<?php 
session_start();
$id=$_SESSION['login_id'];
 echo "<h3 style='color:red;background-color :yellow;text-align:right;float:right;padding:10px;width:80px;margin-right:50px;'>".$id."</h3><br><br>" ;
         ?>
<html>
  <head>
  
    <title> ADMIN PANEL </title> 
	
	
	<style>
         table { margin-left : 30% ;
		         margin-top : 100px; 
				 border : 2px red double;
				 padding : 5px;}
         table tr{ margin : 5px; 
		     border=1}
     	a { text-decoration: none;
		    }
        table td{ width :200px; 
		          height : 150px;
				  background-color :yellow;
				  border : 3px solid red;
				  padding :10px;
				  text-align : center;}
          #home{ margin-left:40px;}
          .log{ float:right;
	         margin-right:10%;}	
        body{border : 20px solid red;}			 
	</style>
  </head>
  
  <body>
  
    <br>
	<br>
	<br>
	<br>
       <div id="home"> <a href="index.html"  >HOME </a>  </div>
	
	  <div class="log"><a href="logout.php" > LOGOUT </a> </div>
	  
	 <br>
	 <br>
    <form> 
	  <table cellpadding="1">
	    <tr>  <td><a href="doc_list.php"> <h3>DETAILS OF DOCTORS</h3>  </a></td>  
		      <td> <a href="tech_list.php"><h3> DETAILS OF TECHNICIANS </h3></a> </td> 
		      <td><a href="test_comp.php"><h3> DETAILS OF PATIENTS  TESTED</h3> </a></td> </tr> 
		<tr><td><a href="test_pen.php" ><h3>DETAILS OF PATIENTS UNTESTED </h3></a></td>
		    <td><a href="add_doc.html"><h3> ADD A NEW DOCTOR </h3></a>  </td>  
		    <td> <a href="add_tech.html"><h3> ADD A NEW TECHNICIAN </h3></a></td> </tr>
        <tr><td><a href="unc_quirie.php"><h3>UNCLEARED QUIRIES OF CUSTOMERS </h3></a></td>	
            <td><a href="sol_que.html"><h3>SOLVE A QUIRIE</h3> </a></td></tr>		
	 </table> 
	</form > 
	
  <body> 
  
  
</html>