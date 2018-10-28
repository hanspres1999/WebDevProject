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
    
   $pid=$_POST["pid"];

   $sym=$_POST["symptoms"];

   $med=$_POST["medicine"];

   $comm=$_POST["comment"];
  
   $query="INSERT INTO Patient(Patient_ID,Passwd,Name)VALUES('$pid','$usr','$usr')";
 
   $data=mysqli_query($conn,$query);

   $query="INSERT INTO Visit_details(Patient_ID,Symptoms,Med_written,Comments)VALUES('$pid','$sym','$med','$comm')";
 
   $data=mysqli_query($conn,$query);
   
$conn->close();
?>