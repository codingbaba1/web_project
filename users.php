<?php
$conn=mysqli_connect('localhost','root','','mpro');

function showData(){

global $conn;

$query="SELECT * FROM `users`";
$run=mysqli_query($conn,$query);

if($run==TRUE)
{
			?>

			<center>
			<table border="2" width="80%">
			<tr><th colspan="7" style="font-size:42;">Complaints</th></tr>
			<tr>
			 <th>Name</th><th>Password</th><th>Email</th><th>Address</th><th>Phone no.</th><th>Service</th><th>Status</th>
			</tr>

			<?php
			while($data=mysqli_fetch_assoc($run))
			{
			?>

			<tr>
			<td><?php echo $data['uname']; ?></td>
			<td><?php echo $data['upsw']; ?></td>
			<td><?php echo $data['uemail'];?></td>
			<td><?php echo $data['uadd']; ?></td>
			<td><?php echo $data['uphone'];?></td>
			<td><?php echo $data['user'];?></td> 
			<td><?php echo $data['status'];?></td>
			</tr>
			<?php

			}
			?>

			</table>

			<?php
}
else
		{
			echo"Error !";
		  }
}
?>
<html>
<head>
<title>show data from the database </title>
</head>
<body><center>
<div><h1 style="font-size:42;">User information<br><br>

<?php showData(); 




$con=mysqli_connect('localhost','root','','mpro');
$q="SELECT * FROM `contact`";
$r=mysqli_query($con,$q);

if($r==TRUE)
{
			?>

			<br><br>
			<table border="2" width="80%">
			<tr><th colspan="7" style="font-size:42;">Contact Us</th></tr>
			<tr>
			 <th>Phone</th><th>Pin</th><th>Email</th><th>Subject</th>
			</tr>

			<?php
			while($data=mysqli_fetch_assoc($r))
			{
			?>

			<tr>
			<td><?php echo $data['uphone']; ?></td>
			<td><?php echo $data['upin']; ?></td>
			<td><?php echo $data['umail'];?></td>
			<td><?php echo $data['sub'];?></td>
			
			</tr>
			<?php

			}
			?>

			</table>

			<?php
}
else
		{
			echo"Error !";
		  }


?>
</div></div></body>
</html>