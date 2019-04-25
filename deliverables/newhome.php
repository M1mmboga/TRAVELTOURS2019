<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/navbarStyles.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>

hr
{
width:50%;
}

    .slideshow
    {
      margin: auto;
      height: 300px;
      background: white;
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
      height: 100px;
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
  
</style>
</head>
<body>

            <?php include '../php/navbar.php'; ?>
   
            <h3 class="dream" style="text-align: center;
            "><i>Travelling<br> It leaves you speechless<br> Then turns you into a<br> STORYTELLER!</i>                  
            </h3>
            
            <hr>

                <button class="btn btn-primary" style="margin-left: 480px;"><a href="gallery.php">Explore</a></button>

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

     <?php include '../php/footer.php'; ?>
</body>
</html>