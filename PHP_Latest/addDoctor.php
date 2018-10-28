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

    
   $usr=$_POST["name"];
    
   $pass=$_POST["password"];
  
   $query="INSERT INTO Doctor(Login_ID,Passwd)VALUES('$usr','$pass')";
 
   $data=mysqli_query($conn,$query);
 
$conn->close();
?>