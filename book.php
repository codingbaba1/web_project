<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mpro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if($conn)
echo "connectivity done  <br>";
else
echo "please try again  ";

 

  if($_SERVER["REQUEST_METHOD"] == "POST") 
  {
      //username and password sent from
      
      $uemail = mysqli_real_escape_string($conn,$_POST['uemail']);
      $uphone = mysqli_real_escape_string($conn,$_POST['uphone']); 	
	  $pass = mysqli_real_escape_string($conn,$_POST['upsw']);
	  $user = mysqli_real_escape_string($conn,$_POST['user']);
	  $uadd = mysqli_real_escape_string($conn,$_POST['uadd']);
      
      $sql = "UPDATE users SET uadd='$uadd',user ='$user',status='yes' WHERE uemail = '$uemail'";
     
	  $result = mysqli_query($conn,$sql);
      
      // If result matched $uname and $psw, table row must be 1 row
		
      if($result = true) {
                  header("location:/minipro/page1.html");
      }
	  else
	  {
	  echo "wrong Email or Phone";
      }
   }
?>