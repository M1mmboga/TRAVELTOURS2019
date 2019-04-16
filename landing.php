<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Destinations Landing Page</title>
	<link rel="stylesheet" href="loginstyles.css">

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

  <div class="container">
    
    <h1 style="color:white; text-align: center;">Welcome to Destinations,Kenya</h1>

  </div>

    	<div class="login-box" style="height: 200px;"> <!--login box with an avatar head -->

		      <img src="assets/avatar.png" class="avatar">
  			     <form name="landingForm" id="landingForm" method="POST" action="#">				

			         <p>Username</p>
			             <input type="text" name="username" placeholder="Username" autocomplete="off" required>

		            <p>Password</p>
			                 <input type="password" name="password" placeholder="Enter password" autocomplete="off" required>

		                   <input type="submit" name="submit" value="Login" onclick="val();">

		          </form>

	     </div>

	
</body>
</html>