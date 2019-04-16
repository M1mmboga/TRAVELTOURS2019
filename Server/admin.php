
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BOOKINGS RECORDS</title>
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

$sql = "select id,name,email,phone,destination,adults,kids,note from booking";
$result = $conn-> query($sql);
if ($result-> num_rows > 0)
{
	while($row = $result-> fetch_assoc())
	{
echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['destination']."</td><td>".$row['adults']."</td><td>".$row['kids']."</td><td>".$row['note']."</td></tr>";
	}
	echo "</table>";
}

else

	{echo "0 result";}
$conn->close();

?>

			</table>

			<br><br>
				<form action="deletebooking.php" method="post">
		ENTER BOOKING ID TO DELETE:&nbsp; <input type="text" name="id" required><br><br>
		<input type="submit" name="delete" value="Delete User">
	</form>
<br><br>

	<form action="updatebooking.php" method="post">
		ENTER ID TO UPDATE:<input type="text" name="id" required><br>
		NEW NAME:<input type="text" name="name" ><br>
				NEW EMAIL:<input type="text" name="email" ><br><br>
				NEW PHONE:<input type="text" name="phone" ><br><br>
				NEW DESTINATION:<input type="text" name="dest" ><br><br>
				NEW ADULTS:<input type="text" name="adults" ><br><br>
				NEW KIDS:<input type="text" name="kids" ><br><br>
				NEW NOTE:<input type="text" name="notes" ><br><br>

		<input type="submit" name="update" value="Update User">
	</form>
</body>
</html>
