<?php

if(isset($_POST['update']))
{
	$host="localhost";
	$server="root";
	$pass="";
	$db="destinations";

	$id=$_POST['id'];
	$uname=$_POST['uname'];
	$pword=$_POST['pword'];

	$connect=mysqli_connect($host,$server,$pass,$db);
	$query="UPDATE `login` SET  `id`='".$id."',`username`='".$uname."',`password`='".$pword."' WHERE id=$id";

	$result=mysqli_query($connect,$query);


	if($result)
	{
		echo "Login was updated";
	}else
	{
		echo "Login was not updated";
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