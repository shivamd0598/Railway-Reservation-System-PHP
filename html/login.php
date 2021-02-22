


<?php

include("conn.php"); 
session_start();


if(!isset($_SESSION['uname']))
   {
       echo "<script type='text/javascript'>
            alert('Please Login!!') 
            </script>";

   }


    

if(isset($_POST['lgn-btn']))
{
$captcha=$_POST['captcha'] ; 
           $code=$_SESSION['code'];

    
   if($captcha!=$code)
    {
        echo"<script type='text/javascript'>
        alert('Wrong Captcha Entered!!!!')
        </script>
        ";
               

    } 
    else
    {
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    
    $sql="SELECT * FROM users WHERE uname='$username' and password='$password'";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1)
    {
       
     
      $_SESSION['uname']=$username;
      header('location:index2.php');
        /*echo "<br>";
      echo $captcha;
        echo"<br>";
          echo $code;
        if($captcha==$code)
        {
            echo "<br>";
            echo "Hurray code is mathching!!!!";
            
        }*/
    
    }
    else if(!$result)
    {
        
       echo("Error description: " . mysqli_error($con));
  }
    
    else
    {
        echo"<script type='text/javascript'>
        alert('Wrong username or password!!!!')
        </script>
        ";
        
    }
    
    
    }
    
    
    
}
if(isset($_POST['frgt-btn']))
{
    header('location:forgot-pass.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/login.css">
    
    <style>
        #uname
{
    
    border-radius: 34px;
    font-size: 32px;
}
</style>
    
    
    </head>
   <body>
  <div class="container-fluid">
      
      <div class="row">
    <div class="col-sm">
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/img13.jpeg" alt="First slide" height="600px" width="650px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img14.jpe" alt="Second slide" height="600px" width="650px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img15.jpg" alt="Third slide" height="600px" width="650px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
         </div>
      
       <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav-bar">
              <a class="navbar-brand" href="#">Tour N Travels</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active"id="nav-item-active"  href="#">Login <span class="sr-only">(current)</span></a>
       
        <a class="nav-item nav-link" id="nav-item"href="sign-up.php">Sign Up</a>
        <a class="nav-item nav-link" id="nav-item" href="forgot-pass.php">Forgot Password</a>
        <a class="nav-item nav-link" id="nav-item" href="contact-us.php">Contact-Us</a>
      
    </div>
  </div>
</nav>
      
     <div class="row">
         
         <div class="col-sm" id="h-login">
             
           <h1>LOGIN SYSTEM</h1>  
         </div>
         
        </div> 
       <div class="row" id="login">
         
         <div class="col-sm-12" >
             <form action="" method="post">
                 
                 <label> User-name: </label>
                 <input type="text" name="uname" id="uname" placeholder="Enter Your User-name">
                 
        
         
        
                 
                 <label id="l-pass"> Password: </label>
                 <input type="password" name="pass" id="pass" placeholder="Enter Your Password">
                 <br>
                 <img id="img" src="captcha.php">
                 <br>
                 <input id="uname" name="captcha" type="text">

                 
           
          
       <br>
                 
                <input type="submit" class="btn btn-primary" name="lgn-btn" value="Login"id="lgn-btn">
                
                 <input type="button" class="btn btn-primary" name="sign-btn" value="Sign Up"id="sign-btn" onclick="window.location.href='sign-up.php'"/>
                 
                 <input type="button" class="btn btn-primary"  value="Forgot Password?"id="forgot-btn"  name='frgt-btn' onclick="window.location.href='forgot-pass.php'"/>
                
               
                 
         
             </form>
        </div> 
      </div>
        <div class="row">
            
            <div class="col-sm" id="footer">
                
                <p>All Rights Reserved.Copyright&copy;2018<br>
                Designed bys Shivam Dhar</p>
                
                
            </div>
            
        </div>
      
       </div>
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script> src="../bottstrap/js/bootstrap.min.js" </script>
  </body>
</html>

