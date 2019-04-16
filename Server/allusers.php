
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>USERS RECORDS</title>
	<link rel="stylesheet" href="">
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
			color:#588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}

		th{
			background-color:#588c7e;
			color: white; 
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<table width="600" border="1" cellpadding="1" cellspacing="1">


<?php
$conn=mysqli_connect("localhost","root","","destinations");

if($conn-> connect_error)
{
	die("connection failed".$conn -> connect_eror);
}

$sql = "select id,username,password from login";
$result = $conn-> query($sql);
if ($result-> num_rows > 0)
{
	while($row = $result-> fetch_assoc())
	{
echo "<tr><td>".$row['id']."</td><td>".$row['username']."</td><td>".$row['password']."</td></tr>";
	}
	echo "</table>";
}

else

	{echo "0 result";}
$conn->close();

?>

			</table>
			<br><br>
				<form action="deleteuser.php" method="post">
		ENTER USER ID TO DELETE:&nbsp; <input type="text" name="id" required><br><br>
		<input type="submit" name="delete" value="Delete User">
	</form>
	<br><br>
	<form action="updateuser.php" method="post">
		ENTER ID TO UPDATE:<input type="text" name="id" required><br>
		NEW USERNAME:<input type="text" name="uname" required><br>
				NEW PASSWORD:<input type="text" name="pword" required><br><br>

		<input type="submit" name="update" value="Update User">
	</form>
</body>
</html>
