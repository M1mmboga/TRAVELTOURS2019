<?php
//including the database connection file

$con = new mysqli("localhost", "root", "", "destinations");


if(isset($_GET['id']))
{
    $old_name = $_GET['id'];
}


if(isset($_POST['update']))

{
    $username = $_POST['username'];
 
   $password = $_POST['password'];
   


    // checking empty fields
 
   if(empty($username) || empty($password) ) 
{
        if(empty($username))
 {
            echo "<style ='color:red'>Package name field is empty.<br/>";
        }

    
    if(empty($password)) 
{
            echo "<style ='color:red'>Package price field is empty.<br/>";
        }

       

    } else {
        //updating the table
        $result = $con->query("UPDATE login SET username='$username', password='$password' WHERE username='$old_name'");

        //Reinitialize the old name -->Just in case they want to make a change twice
        unset($_GET['id']);
        $old_name = $username;


        //redirecting to the display page. In our case, it is index.php
        header("location:admin.html");
    }
}
?>
<?php

//selecting data associated with this particular id
$result = $con->query( "SELECT * FROM login");

while($res = mysqli_fetch_array($result))
{
    $username = $res['username'];
    $password = $res['password'];
}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
  
  <title>DESTINATIONS KENYA</title>
 
   
</head>

<body>
<br>
<br>
<section id="side-bar">

    <div>
        <div id="package-form">
 
           <form method="POST">
        
        <label>LOGIN</label>
 
               <br>
              
  <input type="text" name="username" placeholder="Enter the username" value="<?php echo $username;?>" >
                <br>
                <label>Username</label>
                <br>
                <input type="text" name="password" placeholder="Enter the password" value="<?php echo $password;?>" >
                <br>
               
                <br>
                <br>
                <input name="update" type="submit" value="UPDATE LOGIN">
            </form>
        </div>
    </div>

    <div id="btn">
        <div id='top'></div>
        <div id='middle'></div>
        <div id='bottom'></div>
    </div>
    <div id="box">
        <div id="items">
            <a href="admin.html" class="item"><img src="avatar.png">Dashboard</a>
            <br>
            <a href="admin-packages.php" class="item">
<img src="img/view.png">All Packages</a>
          
  <br>
      
      <a href="book.php" class="item"><img src="img/booked.png">OLD USERS </a>
  
          <br>
        
   
     
   </div>
    </div>

</section>

<script type="text/javascript">
   
 var sidebarBox = document.querySelector('#box'),
      
  sidebarBtn = document.querySelector('#btn'),
    
    pageWrapper = document.querySelector('#page-wrapper');

  
  sidebarBtn.addEventListener('click', function (event) 
{
        sidebarBtn.classList.toggle('active');
   
     sidebarBox.classList.toggle('active');
    });

  
  pageWrapper.addEventListener('click', function (event) 
{

        if (sidebarBox.classList.contains('active'))
 {
            sidebarBtn.classList.remove('active');
            sidebarBox.classList.remove('active');
        }
    });

    window.addEventListener('keydown', function (event) {

        if (sidebarBox.classList.contains('active') && event.keyCode === 27) {
            sidebarBtn.classList.remove('active');
            sidebarBox.classList.remove('active');
        }
    });
</script>
</body>
</html>
