<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mpro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

  if($_SERVER["REQUEST_METHOD"] == "POST") {
      //username and password sent from
      
      $uemail = mysqli_real_escape_string($conn,$_POST['uemail']);
      $upsw = mysqli_real_escape_string($conn,$_POST['upsw']); 
      
      $sql = "SELECT * FROM users WHERE uemail = '$uemail' and upsw = '$upsw'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
     
      
      $count = mysqli_num_rows($result);
      // If result matched $uname and $psw, table row must be 1 row
		
      if($count == 1) {
                  
         header("location:/minipro/log.html");
      }else
	  {
	  header("location:/minipro/w.html");
      }
   }
?>