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
      $uphone = mysqli_real_escape_string($conn,$_POST['uphone']); 
	  $pass = mysqli_real_escape_string($conn,$_POST['pass']); 
      
      $sql = "UPDATE users SET upsw ='$pass' WHERE uemail = '$uemail' and uphone = '$uphone'";
     
	  $result = mysqli_query($conn,$sql);
      
      // If result matched $uname and $psw, table row must be 1 row
		
      if($result = true) {
                  header("location:/minipro/index.html");
         echo "password succesfully reset";
      }else
	  {
	  echo "wrong Email or Phone";
      }
   }
?>