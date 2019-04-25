<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact us</title>
	<link rel="stylesheet" href="../css/navbarStyles.css">
	<style>
		
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
    border-radius: 55px;
    height: 500px;
    width: 40%;
    margin-right: 100px;
    background-color: #f2f2f2;
    padding: 20px;
}

h1
{
  font-size: 30px;
  text-align: center;
  color: black;
  text-decoration: none;
}

</style>
</head>
<body style="min-height: 100%;">
<?php include '../php/navbar.php';?>
<h1>Have Some Questions?</h1>

	<img src="../assets/inbox-logo.png" alt="Inbox Logo Image" height="350px" width="300px" >

<div class="mycontactform" style="float: right;">

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
		</select>
		<br>

		<label for="inquiry">Inquiry</label>
		<textarea id="inquiry" name="iinquiry" placeholder="Write your inquiry here..." style="height:100px" required></textarea><br>

		<input type="submit" value="Submit">
	</form>

</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br>		
		 <?php include '../php/footer.php'; ?> 
</body>
</html>