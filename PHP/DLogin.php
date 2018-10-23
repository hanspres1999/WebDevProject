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

    
   $id=$_POST["num"];
    
   $pass=$_POST["str"];
  
   $result = mysqli_query($conn, "select * from Doctor where Login_ID='$id' && Passwd='$pass'");
 
 if(mysqli_num_rows($result) > 0)
 { 
 echo "Login";
 return;
 } 
 else
 { 
 echo "invalid";
 return;
 }
 
 
?>