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

   $id = $_POST["pid"];

    
   $check = mysqli_query($conn, "select * from Visit_details where Patient_ID='$id'");
   echo "Patient`s History:";
   echo "<br><br>";
   echo "<table>
         <tr>
         <th>Symptoms</th>
         <th>Med_written</th>
         <th>Comments</th>
         </tr>";
 
 if(mysqli_num_rows($check) > 0)
 { 
 	while ($row = mysqli_fetch_row($check)) {
 		echo "<tr>
 		     <td>$row[1]</td>
 		     <td>$row[2]</td>
 		     <td>$row[3]</td>
 		     </tr>";
 	}
 //echo $check;
 return;
 } 
 else
 {
    echo "NO information available!!";
    return;
 }
 
?>