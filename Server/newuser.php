<?php

$server="localhost";
$username="root";
$password="";

if(isset($_POST["uname"]) && isset($_POST["pword"]))
{
	$conn=new mysqli($server,$username,$password,"destinations");
	$query = $conn->prepare("INSERT INTO login (username,password) values (?,?)");
	$query->bind_param("ss",$_POST["uname"], $_POST["pword"]);

	if($query->execute())
		echo "success";
	else
		echo "not success";
}


?>