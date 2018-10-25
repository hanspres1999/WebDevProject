<?php
include "getstudent.php";
$servername = "localhost";
$username = "id5253336_root";
$password = "/bybtest/";
$database = "id5253336_bybtest";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$fac_user=$_POST["fac_us"];
$stud_user=$_POST[$user];
$query="INSERT INTO studentfaculty values('$fac_user','$stud_user')";
$result=mysqli_query($conn,$query);
if($result)
{
    echo "Done";
}
else
{
    echo "NotDone";
}
$conn->close();
?>