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
 
    $id=$_POST["username"];
    $pass=$_POST["password"];

 $result = mysqli_query($conn, "SELECT * FROM Doctor WHERE Login_ID = '$id'"); 
 if(mysqli_num_rows($result) > 0)
 { 
 echo "ID already exist";
 return;
 } 
 else
 { 
      $query="INSERT INTO Doctor(Login_ID,Passwd)VALUES('$id','$pass')";
 
      $data=mysqli_query($conn,$query);
 
    if($data)
      {
            echo "Successfully Signed In";
            return;
      }
    else
      {
            echo "Error Sign in";
            return;
      }
 
 } 

$conn->close();
 
?>