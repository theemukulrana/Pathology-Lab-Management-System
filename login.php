<?php

$login=$_POST['uname'];
$password=$_POST['pwd'];
$role=$_POST['roles'];


	
if($login && $password){ 
//Connect to mysql server 
$link = mysqli_connect('localhost', 'root', '','project2'); 
//Check link to the mysql server 
       if(!$link) { 
                  die('Failed to connect to server: '); 
              } 


   $qry="SELECT login_id FROM login  WHERE login_id = '$login' AND password = '$password'"; 
//Execute query 
   $result=mysqli_query($link, $qry); 
   
//Check whether the query was successful or not 

  $count = mysqli_num_rows($result);

}


if($count == 1){ 
//Login successful set session variables and redirect to main page. 
session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['login_id'] = $login; 

if($role=="Lab Technician"){
	
    header('location:technician.php');}
if($role=="Doctor"){
	
  header('location:admin_doctor.php'); 
}
} 
else{ 
//Login failed 

echo '<br><br><br><br><center><h3 style="color:red;background-color:yellow;" >Incorrect Username or Password !!!</h3><center>'; 
include('login.html');
exit(); 
} 
 

?>
