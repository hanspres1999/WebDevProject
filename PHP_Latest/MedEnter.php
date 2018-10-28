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

    
   $nme=$_POST["medicine"];
    
   $id=$_POST["mid"];
  
   $query="INSERT INTO Medicine(Med_name,Med_ID)VALUES('$nme','$id')";
 
   $data=mysqli_query($conn,$query);
 
$conn->close();
?>