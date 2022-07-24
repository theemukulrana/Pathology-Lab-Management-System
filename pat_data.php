<?php ?>

<html>
   <head>
      <style>
	     table{margin : 150px  40% 0 40%; }
		 .submit{background-color:yellow;
		         color:red;}
	  </style>
   </head>
   
   <body>
     <form  action="patient_data.php" method="post"> 
        <table border="1" >
          <tr>  
	          <td> Enter patient name </td> 
	          <td> <input type="text"  name="p_name" /></td>
	     </tr>
	     <tr> 
	         <td></td>
	         <td> <input type="submit"  class="submit" value="GET_DATA" /> </td>
	     </tr> 
	    </table>
     </form>
  </body>	 
</html>

 