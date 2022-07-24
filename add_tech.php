<?php  
 $name=$_POST['name'];
 $tech_id=$_POST['tech_id'];
 $num=$_POST['num'];
 
 $link=mysqli_connect("localhost","root","","project2");
 $qry="insert into technician values ('$tech_id',$num,'name')"; 
 $res=mysqli_query($link,$qry);
 if($res){ echo "<script> alert('ADDED SUCCESSFULLY '); </script>"; }
 else echo " UNABLE TO ADD ";
 
 ?>