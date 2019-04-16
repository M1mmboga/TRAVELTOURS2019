<?php

if(isset($_POST['delete']))
{
	$host="localhost";
	$server="root";
	$pass="";
	$db="destinations";

	$id=$_POST['id'];
	$connect=mysqli_connect($host,$server,$pass,$db);
	$query="DELETE from booking where id= $id";

	$result=mysqli_query($connect,$query);


	if($result)
	{
		echo "The booking was Deleted";
	}else
	{
		echo "The booking was not Deleted";
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

</body>
</html>