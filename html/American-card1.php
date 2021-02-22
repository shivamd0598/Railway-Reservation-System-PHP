<?php
include("conn.php");

session_start();
if(!isset($_SESSION['uname']))
   {
       header('location:login.php');
   }

if(isset($_POST['pay-btn']))
 {  
     
     $input_cardno=$_POST['card_no'];
      //$cardno=/^(?:5[1-5][0-9]{14})$/;
      $input_cvv=$_POST['cvv'];
     // $cvv_exp=/^[0-9]{3,4}$/;
 if($input_cardno!=null && $input_cvv!=null)
 {
     
     
     $username=$_SESSION['uname'];
     $train_name=$_SESSION['train'];
     $train_num=$_SESSION['train_no'];
     $train_class=$_SESSION['class'];
     $total_fare=$_SESSION['tfare'];
     $d_journey=$_SESSION['date_journey'];
      
      $sql1="INSERT INTO $username(sno,train_name,train_no,fare,class,boarding_stn,destination_stn,date_journey) VALUES(NULL,'$train_name','$train_num','$total_fare','$train_class','$board_stn','$dest_stn','$d_journey')";
     if (!mysqli_query($con,$sql1))
  {
  echo("Error description: " . mysqli_error($con));
  }
     
     else
     {
     header("location:payment-success1.php");
     }
     
 }
    else{
   echo "<script type='text/javascript'>
        alert('Enter the Card details!!!')
        </script>";
      
}

 }

if(isset($_POST['cancel-btn']))
{
    header('location:index.php');
}

if(isset($_POST['lgt-btn']))
{
    
  
    session_destroy();
    header('location:login.php');
   

}

?>


<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/train-logo-122x122.png" type="image/x-icon">
  <meta name="description" content="Website Generator Description">
  <title>Trains</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <style>
    
     #train-details
        {
            color: darkcyan;
            font-size: 28px;
            text-align: center;
            border: 4px solid darkcyan;
        }
    
    
    #drop-menu
      {
          text-align: center;
          font-size: 2em;
          background-color: #0b0b3a;
          color:mediumspringgreen;
          align-content: center;
      }
      #train-select
      {
          text-align: center;
      
      }
      
      
      #content5-t
      {
          text-align: center;
      }
      
    </style>
  
</head>
<body>
  <section class="menu cid-qROB0Xmn7t" once="menu" id="menu1-r">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobirise.com">
                         <img src="assets/images/train-logo-122x122.png" alt="TOUR N TRAVELS" title="" style="height: 5.7rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="https://mobirise.com">TOUR N TRAVELS</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-5" href="https://mobirise.com"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a>
                </li>
                <li class="nav-item"><a class="nav-link link text-white display-5" href="https://mobirise.com"><span class="mbri-calendar mbr-iconfont mbr-iconfont-btn"></span>
                        Bookings</a></li><li class="nav-item dropdown open"><a class="nav-link link text-white dropdown-toggle display-5" href="https://mobirise.com" data-toggle="dropdown-submenu" aria-expanded="true"><span class="mbri-users mbr-iconfont mbr-iconfont-btn"></span>
                        Services</a><div class="dropdown-menu"><a class="text-white dropdown-item display-5" href="BOOK-TICKET3.php">Book Tickets</a><a class="text-white dropdown-item display-5" href="https://mobirise.com" aria-expanded="false"></a><a class="text-white dropdown-item display-5" href="https://mobirise.com" aria-expanded="false">Booked Tickets</a><a class="text-white dropdown-item display-5" href="https://mobirise.com" aria-expanded="false">Print Tickets</a><a class="text-white dropdown-item display-5" href="https://mobirise.com" aria-expanded="true">Cancel Ticket<br></a></div></li><li class="nav-item"><a class="nav-link link text-white display-5" href="https://mobirise.com"><span class="socicon socicon-viber mbr-iconfont mbr-iconfont-btn"></span>
                        </a></li><li class="nav-item"><form method="post">
                    <input type="submit" class="btn btn-primary" name="lgt-btn" value="Logout"id="lgt-btn"></form></li><li class="nav-item"><a class="nav-link link text-white display-5" href="https://mobirise.com">
                        </a></li></ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.me/m">free web design templates</a></section><section class="mbr-section content5 cid-qRPmxzJhTt" id="content5-s">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">PAYMENT GATEWAY</h2>
                
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content5 cid-qRPmL8X7kI" id="content5-t">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8" id="train-select">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Card Details:<br><br></h2>
                
                
                 <form method="post" >
             
               
                  <?php
                  echo"<h2 style='color:crimson; font-size:24px;'>".  $_SESSION['card']."</h2>";
                ?>
                
              <h2>Card Number:</h2>
              
                <input type="text" name="card_no" id="" placeholder="Enter your Credit/Debit Card Number" > <br>   
                 <h2>Expiry Date:</h2> 
                   
              <input id="date" type="date"> <br>
                   
                   
                   <h2>CVV:</h2>
                   <input type="text" name="cvv" id="" placeholder="Enter Pin number">
                   <br>
                   <h2>Total Amount:</h2><br>
                   <?php
             $tfare=$_SESSION['tfare'];
                //$selected_stn=$_SESSION['stn'];
             echo "<h2 style='color:crimson; font-size:24px;'> Rs.".$tfare."</h2>";
                
           ?>
            
 
            <br>

              
           
                 <br><br>
                     
                
                
                
                <div class="mbr-section-btn align-center">           
                    <input type="submit" value="Submit" id="submit"  name="pay-btn"  class="btn btn-primary"  >
                    <input type="submit" value="Back" id="back" name="cancel-btn"  class="btn btn-primary" >
             
                
                </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="cid-qROB0ZuPDf" id="footer1-g">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="https://mobirise.com/">
                        <img src="assets/images/train-logo-192x192.png" alt="TOUR N TRAVELS" title="TOUR N TRAVELS">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Address
                </h5>
                <p class="mbr-text">
                    1234 Street Name
                    <br>City, AA 99999
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: support@mobirise.com
                    <br>Phone: +1 (0) 000 0000 001
                    <br>Fax: +1 (0) 000 0000 002
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3"></h5>
                <p class="mbr-text"><br><br><br></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2018 - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>