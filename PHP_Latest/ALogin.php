<?php

$servername = "localhost";
$username = "id7249614_clinic_sys";
$password = "clinic_sys";
$database = "id7249614_clinic_management_system";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    
   $usr=$_POST["username"];
    
   $pass=$_POST["password"];
  
   $result = mysqli_query($conn, "select * from Assistant where Login_ID='$usr' && Passwd='$pass'");
 
 if(mysqli_num_rows($result) > 0)
 { 
 header( 'Location: http://127.0.0.1:5500/html/med_asst.html' );
 return;
 } 
 else
 { 
 $message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
 return;
 }
 
 
?>