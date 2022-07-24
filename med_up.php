
 <?php ?>
 
<html>
     <head>
	    <style>
		   form{ margin : 200px 30% 50px 30% ;
		         padding :10px;
				 padding-left:10%;
                 background-color : yellow;
                 border : 3px solid red;				 }
		</style>
	 </head>

 
<body>

 <form action="med_update.php" method="post" >
  <p>Enter the payment-id of patient </p> 
  <input type="text" name="payment_receipt" />
  
  <p>Enter medicines list </p> 
  <input type="textarea" name="med"  /> 
  
  <p>Enter health suggestion : </p> 
  
 <input type="text"  name="sug"  />
  
 
  <br>
  <br>
  
  <input type="submit" value="update" />
 </form> 
 
 
</body>





</html>