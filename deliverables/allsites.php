<?php 
session_start();
?>
<!DOCTYPE html>
<html>
  <head><title>Gallery page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
<style>
body
{
  background-image: url("ocean.jpg");
  background-position: center;
  background-repeat:repeat-y;


}
h1
{
  text-align: center;
  color: black;
  font-size: 18px;
  text-decoration: none;
}
* {
    box-sizing: border-box;
}

body {
  background-image: url("matt1.jpg");
    background-color: #f1f1f1;
    padding: 0px;
    font-family: Arial;
    margin: 0;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: white;
}

.btn.active {
  background-color: purple;
  color: white;
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

.accordion {
    background-color: skyblue;
    color: magenta;
    cursor: pointer;
    margin: 25px;
    padding: 5px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 45px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc;
}

.panel {
font-size: 24px;
    background-color: #ddd;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
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

          <h1>Click image to view the destination and book.<hr>

        <!--  <a href="gohome.html">  <img src="car1.jpg" width="150" height="150">Homepage</a>
          <a href="ourcontacts.html">  <img src="car2.jpg" width="150" height="150">Contact </a>
          <a href="hobbies.html">  <img src="car3.jpg" width="150" height="150">Hobbies</a>
          <br>
    <!--<p1><a href="gohome.html">Homepage</a></p1>
    <p3><a href="ourcontacts.html">Contact us</a></p3>
    <p4><a href="hobbies.html">Hobbies</a></p4><br><br>-->

   <img src="../assets/ocean.jpg" alt="Hill" width="250" height="300" align="middle" hspace="40" border=2><h>Maasai Mara

    <button class="accordion">Check Maasai Mara Details</button>
<div class="panel">
  <p>Distance: 300km from Nairobi CBD</p>
  <p>Maasai Mar Hotel is an exquisite hotel with high end services.</p>
  <p>Available for 5 day booking </p>
  <p>Activities to be taken part are:<br><ul>
    <li>Game Drive</li>
        <li>Swimming</li>
    <li>Cultural Dances</li>
  </ul></p>
</div>
<button class="accordion">Book</button>
<div class="panel">
  <form action="server/book.php" method="POST" name="frm">
  <label for="fname" style="color: white;">Name</label><br>
    <input type="text" name="fname" placeholder="Enter your name here..."><br>

  
    <label for="email" style="color: white;">Email</label><br>
    <input type="text"  name="email" placeholder="Enter your email here..."><br>

      <label for="phone" style="color: white;">Phone</label><br>
    <input type="text"  name="phone" placeholder="Enter your phone  here..."><br>

   <label for="dest" style="color: white;">Destination</label><br>
    <select id="dest" name="destination" placeholder="Select your destination here...">
      <option value="Mara">Maasai Mara</option>
   

    </select><br>

 <label for="people" style="color: white;">Number of adults</label><br>
    <input type="text"  name="adults" placeholder="Number of adults..."><br>

 <label for="people" style="color: white;">Number of children</label><br>
    <input type="text"  name="kids" placeholder="Number of children..."><br>

    <label for="note" style="color: white;">Note</label><br>
    <textarea name="note" placeholder="Write your notes here..." style="height:100px"></textarea><br><br>


    <input type="submit" value="submit" onclick="return val()">
</form>
</div>
</h>
<br>
    <img src="../assets/bungee.jpg" alt="Maldive island" width="250" height="300" align="middle" hspace="40" border=2><h>Sagana</h><button class="accordion">Check Sagana Details</button>
<div class="panel">
  <p>Distance: 2hr drive from Nairobi</p>
  <p>Sagana White Water hotel is an exquisite hotel with interesting activities services.</p>
  <p>Available for a day tour </p>
  <p>Activities to be taken part are:<br><ul>
    <li>Bungee jumping</li>
        <li>Swimming</li>
    <li>White water rafting</li>
  </ul></p>
</div>
<button class="accordion">Book</button>
<div class="panel">
  <form action="server/book.php" method="POST" name="frm">
  <label for="fname" style="color: white;">Name</label><br>
    <input type="text" name="fname" placeholder="Enter your name here..." required><br>

  
    <label for="email" style="color: white;">Email</label><br>
    <input type="text"  name="email" placeholder="Enter your email here..." required><br>

      <label for="phone" style="color: white;">Phone</label><br>
    <input type="text"  name="phone" placeholder="Enter your phone  here..." required><br>

   <label for="dest" style="color: white;">Destination</label><br>
    <select id="dest" name="destination" placeholder="Select your destination here..." required>
      <option value="Saga">Sagana </option>
    

    </select><br>

  <label for="people" style="color: white;">Number of adults</label><br>
    <input type="text"  name="adults" placeholder="Number of adults..." required><br>

 <label for="people" style="color: white;">Number of children</label><br>
    <input type="text"  name="kids" placeholder="Number of children..." required><br>

    <label for="note" style="color: white;">Note</label><br>
    <textarea name="note" placeholder="Write your notes here..." style="height:100px" required></textarea><br><br>


    <input type="submit" value="submit" onclick="return val()">
</form>
</div>
</h>
<br>

     <img src="../assets/diani.jpg" alt="Moon" width="250" height="300" align="middle" hspace="40" border=2><h>Diani Reef</h><button class="accordion">Check Diani Reef Details</button>
<div class="panel">
  <p>Distance: 45min flight from Nairobi <br>8hr drive from Nairobi</p>
  <p>Diani Reef is located in South Coast Mombasa.<br> It is at the center of a culture rich community of the Digo, Mijikenda and Swahili</p>
  <p>Available for 2 day booking </p>
  <p>Activities to be taken part are:<br><ul>
    <li>Beach walks</li>
        <li>Swimming</li>
                <li>Collecting shells</li>
                        <li>Fishing in the ocean</li>
        <li>Jet-skiing</li>
        <li>Boat ride</li>
    <li>Mijikenda Cultural Dances</li>
  </ul></p>
</div>
<button class="accordion">Book</button>
<div class="panel">
  <form action="server/book.php" method="POST" name="frm">
  <label for="fname" style="color: white;">Name</label><br>
    <input type="text" name="fname" placeholder="Enter your name here..." required><br>

  
    <label for="email" style="color: white;">Email</label><br>
    <input type="text"  name="email" placeholder="Enter your email here..." required><br>

      <label for="phone" style="color: white;">Phone</label><br>
    <input type="text"  name="phone" placeholder="Enter your phone  here..." required><br>

   <label for="dest" style="color: white;">Destination</label><br>
    <select id="dest" name="destination" placeholder="Select your destination here..." required>
      
      <option value="Diani">Diani Reef</option>

    </select><br>

 <label for="people" style="color: white;">Number of adults</label><br>
    <input type="text"  name="adults" placeholder="Number of adults..." required><br>

 <label for="people" style="color: white;">Number of children</label><br>
    <input type="text"  name="kids" placeholder="Number of children..." required><br>

    <label for="note" style="color: white;">Note</label><br>
    <textarea name="note" placeholder="Write your notes here..." style="height:100px" required></textarea><br><br>


    <input type="submit" value="submit" onclick="return val()">
</form>
</div>
</h>
<br>

     <img src="../assets/victoria.jpg" alt="Railway" width="250" height="300" align="middle" hspace="40" border=2 >
          <h>Lake Victoria</h>  
          <button class="accordion">Check Lake Victoria Details</button>
<div class="panel">
  <p>Distance: 381km from Nairobi</p>
  <p>A chance to visit the largest inland lake in East Africa.</p>
  <p>Available for 3 day booking </p>
  <p>Activities to be taken part are:<br><ul>
    <li>Fishing in the ocean</li>
        <li>Swimming</li>
    <li>Curio making</li>
            <li>Fish buffet eating</li>
        <li>Visit to Uganda-Kenya border</li>

  </ul></p>
</div>
<button class="accordion">Book</button>
<div class="panel">
  <form action="server/book.php" method="POST" name="frm">
  <label for="fname" style="color: white;">Name</label><br>
    <input type="text" name="fname" placeholder="Enter your name here..." required><br>

  
    <label for="email" style="color: white;">Email</label><br>
    <input type="text"  name="email" placeholder="Enter your email here..." required><br>

      <label for="phone" style="color: white;">Phone</label><br>
    <input type="text"  name="phone" placeholder="Enter your phone  here..." required><br>

   <label for="dest" style="color: white;">Destination</label><br>
    <select id="dest" name="destination" placeholder="Select your destination here..." required>
     
      <option value="Victoria">Lake Victoria</option>

    </select><br>

 <label for="people" style="color: white;">Number of adults</label><br>
    <input type="text"  name="adults" placeholder="Number of adults..." required><br>

 <label for="people" style="color: white;">Number of children</label><br>
    <input type="text"  name="kids" placeholder="Number of children..." required><br>

    
    <label for="note" style="color: white;">Note</label><br>
    <textarea name="note" placeholder="Write your notes here..." style="height:100px" required></textarea><br><br>


    <input type="submit" value="submit" onclick="return val()">
</form>
</div>
<br><br><br> 
    
    
<script>
  function val() 
{
if(frm.email.value=="")
{
  alert ("Please enter valid email address");
  frm.email.focus();
  return false;
}
var reg= /^([A-Za-z0-9_\-\.])+\@([A-Za-z]{2,4})$/;

if(reg.test(frm.email.value) == false)
{
  alert ('Invalid email address');
  frm.email.focus();
  return false;
}
    return (true);
    }
  </script>

  <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

  </body>
  </html>
