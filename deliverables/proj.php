<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  background-image: url("matt1.jpg");
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
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
</style>
</head>
<body>
 

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
      <img src="../assets/beach1.jpg" alt="nature" style="width:100%">
      <h4>SANDY BEACHES </h4>
      <p>POSITIVE VIBEZ.</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="../assets/msa2.jpg" alt="nature" style="width:100%">
      <h4>COOL AND HUMID</h4>
      <p>SPEAK THROUGH YOUR TRAVELS.</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="../assets/mombasa.jpg" alt="nature" style="width:100%">
      <h4>SAND SMITTEN</h4>
      <p>SHOW THE WORLD..</p>
    </div>
  </div>
  <div class="row">
  <div class="column wildlife">
    <div class="content">
      <img src="../assets/mara1.jpg" alt="wildlife" style="width:100%">
      <h4>Migrations </h4>
      <p>Maasai mara.</p>
    </div>
  </div>
  <div class="column wildlife">
    <div class="content">
    <img src="../assets/wild1.jpg" alt="wildlife" style="width:100%">
      <h4>IN THE JUNGLE</h4>
      <p>Read through nature.</p>
    </div>
  </div>
  <div class="column wildlife">
    <div class="content">
    <img src="../assets/wild3.jpg" alt="wildlife" style="width:100%">
      <h4>LIONS</h4>
      <p>WHO OWNS THE JUNGLE??.</p>
    </div>
  </div>
  
  <div class="column Lakes">
    <div class="content">
      <img src="../assets/bogoria1.jpg" alt="Lakes" style="width:100%">
      <h4>HOT SPRINGS</h4>
      <p>love on a real day..</p>
    </div>
  </div>
  <div class="column Lakes">
    <div class="content">
    <img src="../assets/turkana1.jpg" alt="Lakes" style="width:100%">
      <h4>TURKANA</h4>
      <p>Easen up..</p>
    </div>
  </div>
  <div class="column Lakes">
    <div class="content">
    <img src="../assets/nakuru1.jpg" alt="Lakes" style="width:100%">
      <h4>Temperate </h4>
      <p>.Beauty redefined.</p>
    </div>
  </div>

  <div class="column Mountains">
    <div class="content">
      <img src="../assets/mount1.jpg" alt="Mountains" style="width:100%">
      <h4>Hiking </h4>
      <p>Reach the peaks .</p>
    </div>
  </div>
  <div class="column Mountains">
    <div class="content">
    <img src="../assets/mount3.jpg" alt="Mountains" style="width:100%">
      <h4>Ice Age</h4>
      <p>Out of element.</p>
    </div>
  </div>
  <div class="column Mountains">
    <div class="content">
    <img src="../assets/longot1.jpg" alt="Mountains" style="width:100%">
      <h4>Craters</h4>
      <p> Whach the world evolving .</p>
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


