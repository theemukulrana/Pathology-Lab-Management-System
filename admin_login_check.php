<?php

$id=$_POST['id'];
$pwd=$_POST['pwd']; 

if($id=='admin' and $pwd=='admin123')  { 
session_start();
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['login_id']=$_POST['id'];;

 header("location:admin.php");}
else  { echo"<h2>INCORRECT ID OR PASSWORD </h1>";
                   
                 include('admin_login_check.html');
				   
				   }
                
?>