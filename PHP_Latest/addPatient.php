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

   $age=$_POST["age"];

   $mail=$_POST["mail"];

   $contact=$_POST["contact"];

   $addr=$_POST["address"];
  
   $query="INSERT INTO Patient(Patient_ID,Passwd,Name,Age,E_mail,Contact,Address)VALUES('$pid','$usr','$usr','$age','$mail','$contact','$addr')";
 
   $data=mysqli_query($conn,$query);
 
$conn->close();
?>