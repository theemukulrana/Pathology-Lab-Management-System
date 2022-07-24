<?php 
session_start();
$entered=$_POST['entered'];
$num=$_SESSION['rand_num'];

if($num==$entered) header('location:login.html');
else { echo '<center><h2 style="margin-top:50px;">WRONG CAPTCH ENTERED</h2></center> ';
             session_destroy();
             include('random.php');
			 }


?>