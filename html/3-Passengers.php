<?php
include("conn1.php");
session_start();
if(!isset($_SESSION['uname']))
   {
       header('location:login.php');
   }

if(isset($_POST['prcd-paybtn']))
{
    $pname1=$_POST['tname1'];
    $pname2=$_POST['tname2'];
    $pname3=$_POST['tname3'];
    
    if($pname1!=null && $pname2!=null && $pname3!=null)
    {
   header('location:choose-card1.php');
    }
    else
     {
        echo "<script type='text/javascript'>
        alert('Enter the passenger details!!!')
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
  <meta name="description" content="Website Maker Description">
  <title>3-Passengers</title>
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
    
    
    
    #details
      {
        
        font-size: 24px;
        color: mediumspringgreen;
          
      }
    
   
    
    </style>
  
</head>
<body>
  <section class="menu cid-qROB0Xmn7t" once="menu" id="menu1-x">

    

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
                        Services</a><div class="dropdown-menu"><a class="text-white dropdown-item display-5" href="https://mobirise.com">Book Tickets</a><a class="text-white dropdown-item display-5" href="https://mobirise.com" aria-expanded="false"></a><a class="text-white dropdown-item display-5" href="https://mobirise.com" aria-expanded="false">Booked Tickets</a><a class="text-white dropdown-item display-5" href="https://mobirise.com" aria-expanded="false">Print Tickets</a><a class="text-white dropdown-item display-5" href="https://mobirise.com" aria-expanded="true">Cancel Ticket<br></a></div></li><li class="nav-item"><a class="nav-link link text-white display-5" href="https://mobirise.com"><span class="socicon socicon-viber mbr-iconfont mbr-iconfont-btn"></span>
                        </a></li><li class="nav-item"><form method="post">
                    <input type="submit" class="btn btn-primary" name="lgt-btn" value="Logout"id="lgt-btn"></form></li><li class="nav-item"><a class="nav-link link text-white display-5" href="https://mobirise.com">
                        </a></li></ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.me/y">html website templates</a></section><section class="mbr-section content5 cid-qRRDsaqF0X" id="content5-17">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    BOOK TICKET</h2>
                    
                    
                     
                
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content5 cid-qRRDstqFT9" id="content5-18">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Passenger Details:</h2>
                
                <form method="post">
           <table text-align="center" id="details" align="center" width="100%">
               
               
               
               <tr>
                <td>Passenger Name</td>   
                <td>Preferred Berth</td>   
                <td>Gender</td>   
                 </tr>
               <tr>
                   
                 <td><input type="text" name="tname1" id="tname1" placeholder="Enter 1st Pessanger Name"></td>
                   
                 <td><select name="Class" id="">

<option value="None"> --Select One-- </option>    
                <option value="ub">Upper Berth</option>    
                <option value="mb">Middle Berth</option>    
                <option value="lb">Lower Berth</option>        
                </select></td>
                  
                 <td><select name="gender" id="">
                    
            <option value="None"> --Select One-- </option>    
                <option value="m">Male</option>    
                <option value="f">Female</option>    
                
                </select>
          </td>  
                   
               </tr>
               
               <tr>
                   
                 <td><input type="text" name="tname2" id="tname2" placeholder="Enter 2nd Pessanger Name"></td> 
                  
                 <td><select name="Class" id="">

<option value="None"> --Select One-- </option>    
                <option value="ub">Upper Berth</option>    
                <option value="mb">Middle Berth</option>    
                <option value="lb">Lower Berth</option>        
                </select></td>
                  
                 <td><select name="gender" id="">
                    
            <option value="None"> --Select One-- </option>    
                <option value="m">Male</option>    
                <option value="f">Female</option>    
                
                </select></td>  
                </tr>
                
               <tr>
                   
                   
                 <td><input type="text" name="tname3" id="tname3" placeholder="Enter 2nd Pessanger Name"></td> 
                 
                   
                 <td><select name="Class" id="">

<option value="None"> --Select One-- </option>    
                <option value="ub">Upper Berth</option>    
                <option value="mb">Middle Berth</option>    
                <option value="lb">Lower Berth</option>        
                </select></td>
                
                    
                 <td><select name="gender" id="">
                    
            <option value="None"> --Select One-- </option>    
                <option value="m">Male</option>    
                <option value="f">Female</option>    
                
                </select></td>  
                   
                   
               </tr>
               
           </table>
           
           <br>
           <h2>Total Fare:</h2>
           <?php
             $tfare=$_SESSION['tfare'];
                //$selected_stn=$_SESSION['stn'];
              echo "<h2 style='color:crimson; font-size:24px;'> Rs.".$tfare."</h2>";
           ?>
           <br>
           <br>
          <input type="submit" value="Proceed To Pay" id="submit" name="prcd-paybtn"  class="btn btn-primary">
                    <input type="submit" value="Cancel" id="back" name="cancel-btn"  class="btn btn-primary">
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