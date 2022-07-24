<?php  
 $name=$_POST['name'];
 $doc_id=$_POST['doc_id'];
 $num=$_POST['num'];
 
 $link=mysqli_connect("localhost","root","","project2");
 $qry="insert into doctor values ('$doc_id',$num,'name')"; 
 $res=mysqli_query($link,$qry);
 if($res){ echo "<script> alert('ADDED SUCCESSFULLY '); </script>"; }
 else echo " UNABLE TO ADD ";
 
 ?>