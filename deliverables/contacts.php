<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact us</title>
	<link rel="stylesheet" href="destinationcss.css">
	<style>
	body
	{
	background-image: url("blar.jpg");
	height: 100%;
 	background-repeat: no-repeat;
 	background-size: cover;
 	padding: 0;
 	margin: 0;
	}
	h1
	{text-align: center;
font-size: 30px;
	}	
	hr
	{
		width:20%;
	}
	input[type=text], select, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 10px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: red;
}

.mycontactform {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: right;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 14px;
    text-decoration: none;
}

.dropdown {
    float: right;
    overflow: hidden;
}

.dropdown .dropbtn {
    cursor: pointer;
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
    background-color: gold;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.show {
    display: block;
}
#mainbody
{
  height: 100px;
  margin: 0;
  background-image: url("ocean.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  }
h1,h2
{
  font-size: 40px;
  text-align: center;
  color: black;
  text-decoration: none;
}

  .header
{
  font-family: lucia;
  font-size: 30px;
}
	</style>
</head>
<body>
<div class="navbar">
  <h1 style="float:left; color:white; text-align: top;
    padding: 0;
    text-decoration: none;display: block;
">Destinations Kenya</h1>
  <a href="contacts.php">Contact us</a>
  <a href="allsites.php">Destinations in Kenya</a>
  <a href="newhome.php">Home</a>
  <a href="#"> Hello,  <?php echo $_SESSION['username']; ?></a>

</div>
<h1>Contact Us</h1><hr>

<div class="mycontactform">
	<form action="server/contacts.php" method="POST">
		<label for="fname">First Name</label>
		<input type="text" id="fname" name="firstname" placeholder="Enter your first name here..." required><br>

		<label for="lname">Last Name</label>
		<input type="text" id="lname" name="lastname" placeholder="Enter your last name here..." required><br>

		<label for="email">Email</label>
		<input type="text" id="email" name="eemail" placeholder="Enter your email here..." required><br>

		<label for="county">County</label>
		<select id="county" name="ccounty" placeholder="Enter your county here..." required>
			<option value="Baringo">Baringo County</option>
			<option value="Bomet">Bomet County</option>
			<option value="Bungoma">Bungoma County</option>
			<option value="Busia">Busia County</option>
			<option value="ElgeyoMarakwet">Elgeyo Marakwet County</option>
			<option value="Embu">Embu County</option>
			<option value="Garissa">Garissa County</option>
			<option value="HomaBay">Homa Bay County</option>
			<option value="Isiolo">Isiolo County</option>
			<option value="Kajiado">Kajiado County</option>
			<option value="Kakamega">Kakamega County</option>
			<option value="Kericho">Kericho County</option>
			<option value="Kiambu">Kiambu County</option>
			<option value="Kilifi">Kilifi County</option>
			<option value="Kirinyaga">Kirinyaga County</option>
			<option value="Kisii">Kisii County</option>
			<option value="Kisumu">Kisumu County</option>
			<option value="Kitui">Kitui County</option>
			<option value="Kwale">Kwale County</option>
			<option value="Laikipia">Laikipia County</option>
			<option value="Lamu">Lamu County</option>
			<option value="Machakos">Machakos County</option>
			<option value="Makueni">Makueni County</option>
			<option value="Mandera">Mandera County</option>
			<option value="Meru">Meru County</option>
			<option value="Migori">Migori County</option>
			<option value="Marsabit">Marsabit County</option>
			<option value="Mombasa">Mombasa County</option>
			<option value="Muranga">Muranga County</option>
			<option value="Nairobi">Nairobi County</option>
			<option value="Nakuru">Nakuru County</option>
			<option value="Nandi">Nandi County</option>
			<option value="Narok">Narok County</option>
			<option value="Nyamira">Nyamira County</option>
			<option value="Nyandarua">Nyandarua County</option>
			<option value="Nyeri">Nyeri County</option>
			<option value="Samburu">Samburu County</option>
			<option value="Siaya">Siaya County</option>
			<option value="TaitaTaveta">Taita Taveta County</option>
			<option value="TanaRiver">Tana River County</option>
			<option value="TharakaNithi">Tharaka Nithi County</option>
			<option value="TransNzoia">Trans Nzoia County</option>
			<option value="Turkana">Turkana County</option>
			<option value="UasinGishu">Uasin Gishu County</option>
			<option value="Vihiga">Vihiga County</option>
			<option value="Wajir">Wajir County</option>
			<option value="WestPokot">West Pokot County</option>
			
		</select><br>

		<label for="inquiry">Inquiry</label>
		<textarea id="inquiry" name="iinquiry" placeholder="Write your inquiry here..." style="height:100px" required></textarea><br>

		<input type="submit" value="submit">
	</form>
</div>

</body>
</html>