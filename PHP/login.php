<?php

$servername = "localhost";
$username = "id5253336_root";
$password = "/bybtest/";
$database = "id5253336_bybtest";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    
   $user=$_POST["str1"];
    
   $pass=$_POST["str2"];
  
   $result = mysqli_query($conn, "select * from Student where username='$user' && password='$pass'");
 
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