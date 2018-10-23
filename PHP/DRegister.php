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
    $pass=$_POST["ps"];
    $email=$_POST["em"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
  return;
}
if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $id))
    {
        echo "Should not contain special characters";
        return;
    }
else if(strlen($id)<6 or strlen($pass)<6)
    {
        echo "Values in fields must be at least 6 in length";
        return;
    }
else{
 $result = mysqli_query($conn, "SELECT * FROM Doctor WHERE Login_ID = '$id'"); 
 if(mysqli_num_rows($result) > 0)
 { 
 echo "ID already exist";
 return;
 } 
 else
 { 
      $query="INSERT INTO Doctor(Login_ID,Email_ID,Passwd)VALUES('$id','$email','$pass')";
 
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
}
$conn->close();
 
?>