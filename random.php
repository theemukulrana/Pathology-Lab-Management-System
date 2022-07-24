<?php
session_start();
$num=rand(111111,999999);
$_SESSION['rand_num']=$num;

?>

<html>
  <head>
     <!-- Latest compiled and minified CSS -->
      <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

      <!-- jQuery library -->
       <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

        <!-- Latest compiled JavaScript -->
         <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  -->
  
     <title>CAPTCHA VERIFY</title>
	<link rel="stylesheet"  href="https://fonts.google.com/share?selection.family=Caveat:wght@500">
	 <style>
	    .captcha{background-color : blue;
                 font : 150% sans-serif;
				 font-family :'Caveat',cursive;
                 user-select : none;
                 padding:2px;	
                 letter-spacing:4px;
				 
				 }
		.refresh{ color:blue;
		           background-color:red;
				   font : 150% sans-serif;
				   font-family :'Caveat',cursive;
				   color:yellow;}
		 form{width:400px;
		      margin:auto;
			  margin-top:200px;
			  font:200%;
			  background-color:yellow;
			  border:4px solid red;
			  padding:25px;}
		table td{padding:5px;}
	 </style>
  </head>
  
  <body>
  
        <form action="check_captcha.php" method="post">
		             <h2 style="font:100%;"><center>CAPTCHA VERIFICATION</center></h2>
		     <table>
			    <tr>
				  <td>
				      CAPTCHA = <span class="captcha"> <?php echo $num;?></span>
				  </td>
				  <td>
				     <input type="button" class="refresh" value="⟳" onclick="history.go(0)"/>      <!--window.location.reload(true)-->
				  </td>
				</tr>
				<tr>
				  <td></td>
				  <td></td>
				</tr>
				<tr>
				  <td>
				     <input type="text" name="entered" placeholder="Enter the captcha" />
					
				  </td>
				  <td>
				     <input type="submit" value="VERIFY CAPTCHA"  style="background-color:yellow;color:RED;" />
				  </td>
				</tr>
			 </table>
		
		</form>
  </body>
  
  
</html>