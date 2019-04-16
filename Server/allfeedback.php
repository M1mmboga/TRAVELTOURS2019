
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

$sql = "select id,firstname,lastname,email,county,inquiry from contact";
$result = $conn-> query($sql);
if ($result-> num_rows > 0)
{
	while($row = $result-> fetch_assoc())
	{
echo "<tr><td>".$row['id']."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td><td>".$row['county']."</td><td>".$row['inquiry']."</td></tr>";
	}
	echo "</table>";
}

else

	{echo "0 result";}
$conn->close();

?>

			</table>
</body>
</html>
