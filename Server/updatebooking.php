<?php

if(isset($_POST['update']))
{
	$host="localhost";
	$server="root";
	$pass="";
	$db="destinations";

	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$dest=$_POST['dest'];
	$adults=$_POST['adults'];
	$kids=$_POST['kids'];
	$notes=$_POST['notes'];


	$connect=mysqli_connect($host,$server,$pass,$db);
$query="UPDATE `booking` SET `id`='".$id."',`name`='".$name."',`email`='".$email."',`phone`='".$phone."',`destination`='".$dest."',`adults`='".$adults."',`kids`='".$kids."',`note`='".$notes."' WHERE id=$id";
	$result=mysqli_query($connect,$query);


	if($result)
	{
		echo "Booking was updated";
	}else
	{
		echo "Booking was not updated";
	}
}

?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Update a user</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
</body>
</html>