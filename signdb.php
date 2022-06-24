<?php
$d=mysqli_connect("localhost","root","","mpro");
if($d)
echo "connectivity done  <br>";
else
echo "please try again  ";
//name email phone psw
$s=("insert into users VALUES('$_POST[uname]','$_POST[uphone]','$_POST[uemail]','$_POST[uadd]','$_POST[user]','$_POST[upsw]','$_POST[status]')");
$v=mysqli_query($d,$s);
if($v)
echo "data inserted";
header("location:pr.html");

?>