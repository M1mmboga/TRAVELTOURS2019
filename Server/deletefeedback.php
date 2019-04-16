<?php

if(isset($_POST['delete']))
{
	$host="localhost";
	$server="root";
	$pass="";
	$db="destinations";

	$id=$_POST['id'];
	$connect=mysqli_connect($host,$server,$pass,$db);
	$query="DELETE from contact where id= $id";

	$result=mysqli_query($connect,$query);


	if($result)
	{
		echo "Feedback message Deleted";
	}else
	{
		echo "Feedback message not Deleted";
	}
}

?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Delete a user</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="deletefeedback.php" method="post">
		ENTER CONTACT ID TO DELETE:&nbsp; <input type="text" name="id" required><br><br>
		<input type="submit" name="delete" value="Delete User">
	</form>
</body>
</html>