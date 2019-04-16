<?php

$server="localhost";
$username="root";
$password="";

if(isset($_POST["fname"]) && isset($_POST["email"])
	&& isset($_POST["phone"]) && isset($_POST["destination"]) && isset($_POST["adults"]) && isset($_POST["kids"]) && isset($_POST["note"]))
{
	$conn=new mysqli($server,$username,$password,"destinations");
	$query = $conn->prepare("INSERT INTO booking (name,email,phone,destination,adults,kids,note) values (?,?,?,?,?,?,?)");
	$query->bind_param("sssssss",$_POST["fname"], $_POST["email"],$_POST["phone"],$_POST["destination"],$_POST["adults"],$_POST["kids"],$_POST["note"]);

	if($query->execute())
		echo "success";
	else
		echo "not success";
}


?>