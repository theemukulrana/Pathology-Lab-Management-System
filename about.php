<?php 



$link = mysqli_connect('localhost', 'root', '', 'project2');  
if(!$link)
{ 
die('Failed to connect to server: ');
 } 

 //$qry = 'SELECT * from patient where payment_id="$pay_id"';
  $ip=$_SERVER['REMOTE_ADDR'];
 
 $search="select server_id from total_views where server_id='$ip'";
 $res_sea=mysqli_query($link,$search);
 $ans=mysqli_num_rows($res_sea);    

 if($ans){
      $upd_que="update total_views set num_views=num_views+1 where server_id='$ip'";
      $res_upd=mysqli_query($link,$upd_que); 
 } 	  
 
 elseif(!$ans){                                                  //inserting new server_id into total_views relation 
    $ins_que="insert into total_views values('$ip',1)"; 
	$res_ins=mysqli_query($link,$ins_que); 
	}
	
 $result = mysqli_query($link,"SELECT * from doctor");
 $count_doc=mysqli_num_rows($result);
 
 $result2=mysqli_query($link,"SELECT * from technician");
 $count_tech=mysqli_num_rows($result2);
 
 
 $final_views_que="select num_views from total_views";
 $final_views_res=mysqli_query($link,$final_views_que);
 $sum=0;
 while($row=mysqli_fetch_array($final_views_res))
	 $sum=$sum+$row['num_views'];

echo'
<!DOCTYPE html>
<html>

<!--om sri jai-->


<head>

     <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
     <style>
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
	              color:brown;
		         font-size :105%;}
	 
   .stat_cont{  width:60%; 
               margin:auto;
               text-align:justify;
			   margin-top:10%;
               margin-bottom:10%; 
               padding:20px;
               background-color:yellow;
               color:black;                 
               border:5px solid  red;			  
			 }
	img { margin-left:20%;}
	td { background-color : green;
	     color :white;
		 text-align :center;
		 padding :20px;
		 width:200px;
		 }
	
	 .blank{ background-color :yellow; }
	 table{ margin-left :15%;
	      
		 }
			
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

    <div class="stat_cont">
	                                           <h2><center>WHY WE </center></h2>
		<a href="text-to-speech.php">🔊</a>
											   <br><br>
											   
     Pt.DWARAKA PRASAD MISHRA INDIAN INSTITUTE OF INFORMATION TECHNOLOGY DESIGN AND MANUFACTURING JABALPUR (IIITDMJ) is an institute of national importance,
	 established under an act of parliament by Ministry Of Education (formerly known as ministry of human resources and development),Government Of India.
	 It is established in 2005 at Jabalpur Engineering College,Jabalpur and mentored by INDIAN INSTITUTE OF TECHNOLOGY(IIT) KANPUR.It is one of the few 
	 institues in which IT enabled with design and manufacturing. 
	 
	 <br>
	 <br>
	 <img src="phc2.jpeg"  ></img>
	 <br><br>
	     <center><h4> WHY TO CHOOSE US </h4></center>
	 <div class=right" > We have been serving the healths of students,faculties,local people from over last 15 years. We are feeling very happy and proud 
	 to say that we sucsseded in almost 99 % of cases.</div>
	 
	 <br>
	 <br>
	 
	 <table>
	    <tr>
		   <td>'.$count_doc.'<br>DOCTORS</td>
		   <td class="blank"></td>
		   <td>10<br>NURSES</td>
		<tr>
		   <td class="blank"></td>
		   <td>'.$count_tech.'<br>TECHNICIANS</td>
		</tr>
		<tr>
		
		   <td>25<br>SUCCESSFUL SURGERIES </td>
		   <td class="blank"></td>
		   <td>1<br>AMBULANCE</td>
		</tr>
		   <td class="blank"></td>
		   <td>46<br>NATIONAL AWARDS</td>
		</tr>
	 </table>
	 
	 <br><br>
	   <center><h4>To contact us,click <a href="contactus.html">HERE </a><h4><center>
	 </div>
	 
	
	 <center><h4>THIS PAGE GOT '.$sum.' VIEWS </center>;
</body>



</html>

';


 ?>