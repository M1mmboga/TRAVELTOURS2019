<?php 
session_start();
?> <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gallery</title>
	<link rel="stylesheet" href="destinationcss.css">
<style>
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
  position: center;
    background-color: black;
    color: white;
    cursor: pointer;
    padding: 18px;
    border: none;
    text-align: center;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    margin: auto;
    display: block;
}

.active, .accordion:hover {
    background-color: red; 
}

.panel {

    padding: 0 18px;
    display: none;
    background-color: pink;
    overflow: hidden;
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
  <a href="#login">Login</a>
  <a href="allsites.php">Destinations in Kenya</a>
  <a href="newhome.php">Home</a>
    <a href="#"> Hello,  <?php echo $_SESSION['username']; ?></a>


  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Our Services
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="#">Activities to do</a>
      <a href="#">Places to visit</a>
      <a href="#">Bookings</a>
    </div>
  </div> 
</div>
<!-- MAIN (Center website) -->
<div class="main">

<h1>TRAVEL KENYA</h1>
<hr>

<h2>SOME BREATHTAKING SITES </h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('nature')"> Beaches</button>
  <button class="btn" onclick="filterSelection('Lakes')"> Lakes </button>
  <button class="btn" onclick="filterSelection('Mountains')"> Mountains </button>
  <button class="btn" onclick="filterSelection('wildlife')"> wildlife </button>

</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="beach1.jpg" alt="nature" style="width:100%">
      <h4>SANDY BEACHES </h4>
      <p>POSITIVE VIBEZ.</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="msa2.jpg" alt="nature" style="width:100%">
      <h4>COOL AND HUMID</h4>
      <p>SPEAK THROUGH YOUR TRAVELS.</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="mombasa.jpg" alt="nature" style="width:100%">
      <h4>SAND SMITTEN</h4>
      <p>SHOW THE WORLD..</p>
    </div>
  </div>
  <div class="row">
  <div class="column wildlife">
    <div class="content">
      <img src="mara1.jpg" alt="wildlife" style="width:100%">
      <h4>Migrations </h4>
      <p>Maasai mara.</p>
    </div>
  </div>
  <div class="column wildlife">
    <div class="content">
    <img src="wild1.jpg" alt="wildlife" style="width:100%">
      <h4>IN THE JUNGLE</h4>
      <p>Read through nature.</p>
    </div>
  </div>
  <div class="column wildlife">
    <div class="content">
    <img src="wild3.jpg" alt="wildlife" style="width:100%">
      <h4>LIONS</h4>
      <p>WHO OWNS THE JUNGLE??.</p>
    </div>
  </div>
  
  <div class="column Lakes">
    <div class="content">
      <img src="bogoria1.jpg" alt="Lakes" style="width:100%">
      <h4>HOT SPRINGS</h4>
      <p>love on a real day..</p>
    </div>
  </div>
  <div class="column Lakes">
    <div class="content">
    <img src="turkana1.jpg" alt="Lakes" style="width:100%">
      <h4>TURKANA</h4>
      <p>Easen up..</p>
    </div>
  </div>
  <div class="column Lakes">
    <div class="content">
    <img src="nakuru1.jpg" alt="Lakes" style="width:100%">
      <h4>Temperate </h4>
      <p>.Beauty redefined.</p>
    </div>
  </div>

  <div class="column Mountains">
    <div class="content">
      <img src="mount1.jpg" alt="Mountains" style="width:100%">
      <h4>Hiking </h4>
      <p>Reach the peaks .</p>
    </div>
  </div>
  <div class="column Mountains">
    <div class="content">
    <img src="mount3.jpg" alt="Mountains" style="width:100%">
      <h4>Ice Age</h4>
      <p>Out of element.</p>
    </div>
  </div>
  <div class="column Mountains">
    <div class="content">
    <img src="longot1.jpg" alt="Mountains" style="width:100%">
      <h4>Craters</h4>
      <p> Watch the world evolving .</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
	
</body>
</html>