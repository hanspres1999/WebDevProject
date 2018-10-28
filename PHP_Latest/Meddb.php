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

   $id = $_POST["mid"];

    
   $check = mysqli_query($conn, "select * from Medicine where Med_ID='$id'");
   echo "Medicine Information:";
   echo "<br><br>";
   echo "<table>
         <tr>
         <th>Med_name</th>
         <th>Med_ID</th>
         </tr>";
 
 if(mysqli_num_rows($check) > 0)
 { 
 	while ($row = mysqli_fetch_row($check)) {
 		echo "<tr>
 		     <td>$row[0]</td>
 		     <td>$row[1]</td>
 		     </tr>";
 	}
 //echo $check;
 return;
 } 
 else
 {
    echo "none";
    return;
 }
 
?>