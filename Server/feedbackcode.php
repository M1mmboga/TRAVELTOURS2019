
<table border="1" style="border-collapse: collapse; width:70% height:70px;">
			<tr>
			            <th>Firstname</th>
						<th>Lastname</th>
						<th>Email</th>
						<th>County</th>
						<th>Inquiry</th>
						<th>ID</th>

		</tr>
<?php

$conn=mysqli_connect("localhost","root","","destinations");
$set=$_POST['search'];
if($set)
{
	$show="select * from contact ";
	$result=mysqli_query($conn,$show);

	while($rows = mysqli_fetch_array($result))
	{
		echo  "<tr>";
				echo  "<td>";

		echo $rows['firstname'];
						echo  "</td>";

				echo  "<td>";
		echo $rows['lastname'];
			echo  "</td>";



				echo  "<td>";

echo $rows['email'];
						echo  "</td>";


				echo  "<td>";

				echo $rows['county'];
						echo  "</td>";



echo  "<td>";

				echo $rows['inquiry'];
						echo  "</td>";


				echo  "<td>";

				echo $rows['id'];
						echo  "</td>";

				
				echo  "</tr>";
		echo "<br>";
	}
}
?>
</table>