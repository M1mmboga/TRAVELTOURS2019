<?php 
session_start();
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gallery</title>
	<link rel="stylesheet" href="destinationcss.css" >
   <link rel="stylesheet" href="../css/navbarStyles.css">
">

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

.panel {

    padding: 0 18px;
    display: none;
    background-color: pink;
    overflow: hidden;
}
</style>
</head>
<body>

<?php include '../php/navbar.php'; ?>
  
<!-- MAIN (Center website) -->
<div class="main">

<h1>TRAVEL KENYA</h1>
<hr>

<h2>AWESOME TRAVEL ACTIVITIES</h2>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="jetski.jpg" alt="nature" style="width:100%">
      <h4>JET SKIING IN MOMBASA </h4>
      <p>WATER MANIACS.</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="rafting.jpg" alt="nature" style="width:100%">
      <h4>WHITE WATER RAFTING IN SAGAN</h4>
      <p>SPEAK THROUGH YOUR TRAVELS.</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="kitesurfing.jpg" alt="nature" style="width:100%">
      <h4>KITE SURFING IN WATAMU</h4>
      <p>SHOW THE WORLD..</p>
    </div>
  </div>
  <div class="row">
  <div class="column wildlife">
    <div class="content">
      <img src="bungee.jpg" alt="wildlife" style="width:100%">
      <h4>BUNGEE JUMPING IN SAGANA</h4>
      <p>FEEL THE ADRENALINE.</p>
    </div>
  </div>
  <div class="column wildlife">
    <div class="content">
    <img src="morans.jpg" alt="wildlife" style="width:100%">
      <h4>TRADITIONAL DANCES WITH THE EVER RICH MAASAI CULTURE</h4>
      <p>MAASAI MORANS.</p>
    </div>
  </div>
  <div class="column wildlife">
    <div class="content">
    <img src="mtkenya.jpg" alt="wildlife" style="width:100%">
      <h4>CLIMBING MOUNT KENYA</h4>
      <p>WHO CAN SURVIVE?.</p>
    </div>
  </div>
  
  <div class="column Lakes">
    <div class="content">
      <img src="camping.jpg" alt="Lakes" style="width:100%">
      <h4>CAMPING</h4>
      <p>DATE WITH NATURE</p>
    </div>
  </div>
  <div class="column Lakes">
    <div class="content">
    <img src="history.jpg" alt="Lakes" style="width:100%">
      <h4>VISIT HISTORIC SITES</h4>
      <p>VISIT HISTORIC SITES IN KENYA</p>
    </div>
  </div>
  <div class="column Lakes">
    <div class="content">
    <img src="meal.jpg" alt="Lakes" style="width:100%">
      <h4>COOKING KENYAN CUISINES </h4>
      <p>POPULAR UGALI, BEEF AND SUKUMAWIKI</p>
    </div>
  </div>

  <div class="column Mountains">
    <div class="content">
      <img src="makindu.jpg" alt="Mountains" style="width:100%">
      <h4>VISIT SACRED RELIGIOUS PLACES </h4>
      <p>MAKINDU GURDWARA MOSQUE</p>
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
	      <?php include '../php/footer.php'; ?>

</body>
</html>