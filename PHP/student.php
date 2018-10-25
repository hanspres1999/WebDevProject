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
 $name=$_POST["nm"];
    $user=$_POST["un"];
    $pass=$_POST["ps"];
    $email=$_POST["em"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
  return;
}
if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $user))
    {
        echo "Should not contain special characters";
        return;
    }
else if(strlen($user)<6 or strlen($pass)<6)
    {
        echo "Values in fields must be at least 6 in length";
        return;
    }
else{
 $result = mysqli_query($conn, "SELECT * FROM Student WHERE username = '$user'"); 
 if(mysqli_num_rows($result) > 0)
 { 
 echo "Username exist";
 return;
 } 
 else
 { 
      $query="INSERT INTO Student(name,username,password,email)VALUES('$name','$user','$pass','$email')";
 
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