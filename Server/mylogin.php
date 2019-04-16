<?php 
$host="localhost";
$user="root";
$pword="";
$db="destinations";

mysqli_connect($host,$user,$pword);
mysqli_select_db($db);


if(isset($_POST['username']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql = "select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($sql);

	if(mysqli_num_rows($result) == 1)
	{
		echo "success";
		exit();
	}
	else
	{
		echo "Incorrect details";
		exit();
	}
}
 ?>