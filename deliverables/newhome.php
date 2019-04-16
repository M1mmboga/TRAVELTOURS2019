<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="">

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>
<style>
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

.navbar a:active
{
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
    background-color: gold; 
}

.panel {

    padding: 0 18px;
    display: none;
    background-color: pink;
    overflow: hidden;
}
hr
{
width:50%;
}
<style>
    .slideshow
    {
      margin: auto;
      padding-top:50px;
      height: 700px;
      background: #ddd;
      box-sizing: border-box;
    }
    .content
    {
      margin: auto;
      width: 190px;
      perspective: 1000px;
      position: relative;
      padding-top: 80px;

    }

    .content-carrousel
    {
      width: 100%;
      position: absolute;
      float: right;
      animation: rotar 15s infinite linear;
      transform-style: preserve-3d;
    }
    .content-carrousel:hover
    {
      animation-play-state: paused;
      cursor: pointer;

    }
    .content-carrousel figure
    {
      width: 100%;
      height: 120px;
      border:1px solid #4d444d;
      overflow: hidden;
      position: absolute;
    }
    .content-carrousel figure:nth-child(1)
    {
      transform:rotateY(0deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(2)
    {
      transform:rotateY(40deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(3)
    {
      transform:rotateY(80deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(4)
    {
      transform:rotateY(120deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(5)
    {
      transform:rotateY(160deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(6)
    {
      transform:rotateY(200deg) translateZ(300px);
    }
     .content-carrousel figure:nth-child(7)
    {
      transform:rotateY(240deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(8)
    {
      transform:rotateY(280deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(9)
    {
      transform:rotateY(320deg) translateZ(300px);
    }
    .shadow
    {
      position: absolute;
      box-shadow: 0px 0px 20px 0px #000;
      border-radius: 2px;
    }
    .content-carrousel img
    {
      image-rendering: auto;
      transition: all 300ms;
      width:100%;
      height: 100%;
    }
    .content-carrousel img:hover
    {
      transform: scale(1.2);
      transition: all 300ms;
    }
    @keyframes rotar
    {
      from
      {
        transform: rotateY(0deg);
      }to
      {
        transform: rotateY(360deg);
      }
    }
    .footer-main-div
    {
      width: 100%;
      height: auto;
      margin:auto;
      background: #272727;
      padding: 20px 0px;
    }
</style>
</head>
<body id="mainbody">

<div class="navbar">
  <h1 style="float:left; color:white; text-align: top;padding: 0;text-decoration: none;display: block;">Destinations Kenya</h1>
  <a href="contacts.php">Contact us</a>
  <a href="allsites.php">Destinations in Kenya</a>
  <a href="newhome.php">Home</a>
  <a href="#"> Hello,  <?php echo $_SESSION['username']; ?></a>
 
</div>
<h1 class="dream"><i>Travelling<br> It leaves you speechless<br> Then turns you into a<br> STORYTELLER!</i><br></h1><hr>
<h2>EXPLORE</h2>
<button class="accordion">OUR MISSION</button>
<div class="panel">
  <p>To expand people's knowledge on local tourism. Make Kenya a haven of adventures</p>
</div>
<br><br><hr>

  <section class="slideshow">
    <div class="content">
      <div class="content-carrousel">
        <figure class="shadow"><img src="../assets/bird2.jpg"></figure>
          <figure class="shadow"><img src="../assets/bird3.jpg"></figure>
        <figure class="shadow"><img src="../assets/bird1.jpg"></figure>

        <figure class="shadow"><img src="../assets/bird2.jpg"></figure>

        <figure class="shadow"><img src="../assets/bird3.jpg"></figure>

        <figure class="shadow"><img src="../assets/bird1.jpg"></figure>

        <figure class="shadow"><img src="../assets/bird3.jpg"></figure>

        <figure class="shadow"><img src="../assets/bird2.jpg"></figure>

        <figure class="shadow"><img src="../assets/bird1.jpg"></figure>

      </div>
    </div>
  </section>




</body>
</html>
