<?php
$c=mysqli_connect("localhost","root","","mpro");
if($c)
echo "connectivity done  <br>";
else
echo "please try again  ";
//name email phone psw 
/*
$uemail = mysqli_real_escape_string($conn,$_POST['uemail']);
$uemail = mysqli_real_escape_string($conn,$_POST['uemail']);
$uemail = mysqli_real_escape_string($conn,$_POST['uemail']);
$uemail = mysqli_real_escape_string($conn,$_POST['uemail']);
*/
//$s=("insert into contact VALUES ('$_POST[]','$_POST[]','$_POST[]','$_POST[]')");


$sq=("insert into contact VALUES('$_POST[uphone]','$_POST[upin]','$_POST[umail]','$_POST[sub]')");
$v=mysqli_query($c,$sq);
if($v)
echo "data inserted";
header("location:/minipro/page2.html");
?>