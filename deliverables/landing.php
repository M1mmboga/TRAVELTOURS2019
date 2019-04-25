<?php 
	session_start();
	include '../php/DBConnector.php';

	$db = new DBConnector();
	$con = $db->DBconnect();

	if (isset($_POST['btn-Login'])) 
	{
		# code...
		$uname = $_POST['username'];
		$pword = $_POST['password'];

		$query = "SELECT username,password FROM login WHERE username = ? AND password = ? LIMIT 1";
		$stmt = $con->prepare($query);
		$stmt->bind_param("ss",$uname,$pword);
		$stmt->execute();
		$stmt->bind_result($uname,$pword);
		$stmt->store_result();

		if ($stmt->num_rows == 1)//if the row exixts
		 {
			# code...
			if ($stmt->fetch())//fetch that row
			 {
				# code...
				$_SESSION['username'] = $uname;
				echo "Login Successful!";
				header("Location: newhome.php");

			}
		}else
		{
			echo "<h1>Something is wrong</h1>";
		}


		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Destinations Landing Page</title>
	<!--<link rel="stylesheet" href="../loginstyles.css">-->

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body style="background-image: url('../assets/landing.jpg'); background-repeat: no-repeat; background-size: cover;">

  <div class="container" >
    
    <h2 style="color:white; text-align: center;"><i>Welcome to Destinations Kenya</i></h2>
  </div>

    	<div class="login-box" style="height: 200px; padding-left: 450px;"> <!--login box with an avatar head -->

  			     <form name="landingForm" id="landingForm" method="POST" action="<?=$_SERVER['PHP_SELF'] ?>">				

			         <p>Username
			             <input type="text" name="username" placeholder="Username" autocomplete="off" required></p>

		            <p>Password
			                 <input type="password" name="password" placeholder="Enter password" autocomplete="off" required></p>

		                   <input type="submit" name="btn-Login" value="Login" class="btn btn-primary">

		          </form>

	     </div>

	
</body>
</html>