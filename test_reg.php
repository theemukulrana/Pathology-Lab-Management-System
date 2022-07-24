
 
  <!DOCTYPE html>
 
   <html>
 
     <head>
	 
	   
		 <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

          <!-- jQuery library -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
             <!-- Latest compiled JavaScript -->
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
		
	     <style>
		 
		 
		
		  form{ background-color:yellow;
		        border : 4px solid red;
		        padding : 5%;
				width:65%;
				margin: auto;
				margin-top : 100px;}

         table { margin-left :20%; }	
          table{ border-collapse:seperate; 
		        border-spacing: 0 10px; }
         td{padding :6px;}
         .header{background-color:brown;
	          padding:20px;
	          margin-top:0px;
			  position:fixed;
			  top:0;
			  width:100%;
			  }
	 ul{list-style:none;
            margin-left:40%;
			margin-right:10%;
			}
	  ul li{float:left;
		       }
	  ul li a{color:white;
		     text-decoration:none;
			 padding:10px;
			  border-right:1px solid white;
			}
	 a:hover{ background-color :yellow;
		         font-size :110%;}
     body{border:5px solid brown;}				 
	    
		</style>
     </head>
   
   <body>
   
     <div class="header">

     <ul>
	     
		<li><a href="index.html" ><i class="glyphicon glyphicon-home"></i>  HOME</a></li>
		<li><a href="about.php" ><i class="glyphicon glyphicon-info-sign"></i>  ABOUT US</a></li>
		<li><a href="test_rep.html" ><i class="glyphicon glyphicon-search"></i>  SEARCH  REPORT</a></li>
		<li><a href="test_reg.php">TEST REGISTER</a></li>
		<li><a href="random.php" ><i class="glyphicon glyphicon-log-in"></i>  LOGIN</a></li>
		<li><a href="contactus.html" >CONTACT US</a></li>
	 </ul>
	 <br>
	 </div>
	 <br><br>
	 
	 
     <form action="reg_ins.php" method="post" >   
	      <center> <h3 > Welcome to IIITDMJ lab </h3>
                   <h5> Please provide us some details to register for a test </h5>		  </center>
		  <br><br>
	   <table>
	     <tr>
		   <td> Patient Name : </td>
		   <td><input type="text" name="p_name" placeholder="Name of the Patient" /></td>
		 </tr>
		 
		 <tr>
		     <td>Guardian Name : </td>
			 <td><input type="text" name="g_name" placeholder="Name of the parent/ Guardian"  /> </td> 
		 
		 </tr>
		 
		 <tr>
		   <td> Patient Mobile Number : </td>
		   <td><input  type="text" name="p_mob" placeholder="Mobile Number Of patient" />  </td>
		 </tr>
		 
		 <tr>
		   <td> Patient Email Number : </td>
		   
		   <td><input type="email"  name="p_email"  placeholder="example@abc.com"   /> </td> 
		   
		 </tr>
		 
		 <tr>
		 
		   <td> Guardian Mobile Number : </td> 
		   <td><input type="text" name="g_mob" placeholder="12345667890"  /> 
		   
		 </tr>
		 
		 <tr>
		   <td>Select test type : </td>
		   <td><select name="test_type">
		        <option  value="urine">Urine Test </option>
				<option value="blood">Blood Test </option>
				<option value="heart">Heart Test </option>
		      </select>
		  </td>
	   
	     </tr>
		 
		 <tr> <td>Click <a href="https://rzp.io/i/UKsdIvsR0" > HERE  </a> to pay test fee <td></tr>
		 
		 
		 <tr>
		   <td> Payment receipt number : </td> 
		   <td><input type="text" name="pay_id"   />  </td>
		 </tr>

         <tr>
            <td></td>			
		    <td> <input type="submit"   value="REGISTER"  /></td>
		</tr>
		 
		   
	   </table>
	 
	   <br>
	 </form>
	 
	 <br><br>
   </body>
 
 
 
 
 
 
 </html>









