<table border="1">
			<tr>

			<th>Username</th>
						<th>Password</th>

		</tr>

<?php

$conn=mysqli_connect("localhost","root","","destinations");
$set=$_POST['search'];
if($set)
{
	$show="select * from login";
	$result=mysqli_query($conn,$show);

	while($rows=mysqli_fetch_array($result))
	{
		echo  "<tr>";
			
				echo  "<td>";

		echo $rows['username'];
						echo  "</td>";

				echo  "<td>";

		echo $rows['password'];
						echo  "</td>";
				echo  "</tr>";

		echo "<br>";
	}
}
?>
</table>