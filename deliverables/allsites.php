<?php 
session_start();
?>

<!DOCTYPE html>
<html>
  <head><title>Gallery page</title>
  	<!-- below are css and downloaded boostrap links -->
    <link rel="stylesheet" type="text/css" href="../css/navbarStyles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/bootstrap.bundle.min.js" type="text/javascript" charset="utf-8" async defer></script>

<style>


.active{
    background-color: gold;
}


</style>
  <body style="min-height: 100%;">

        <?php include '../php/navbar.php';?> <!-- navbar link -->

        <div class="container"> <!-- div tag that will display tours sites -->
        	
        	<div class="getDestination">

        		
        		
        	</div>

        </div>

        <!--cards to display location options -->
        <div class="card" style="width: 18rem;">
  <img src="../assets/activity.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

        <?php include '../php/footer.php'; ?> <!-- footer link -->
         
  </body>
  </html>