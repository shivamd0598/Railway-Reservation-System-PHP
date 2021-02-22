<?php
include("conn1.php");
session_start();

if(!isset($_SESSION['uname']))
   {
    echo "<script type='text/javascript'>
            alert('Please Login!!') 
            </script>";   
    header('location:login.php');
   }

if(isset($_POST['submit-btn']))
                
                    {
                    
                    $selected_class=$_POST['Class'];
                    $_SESSION['class']=$selected_class;
                    $selected_train=$_SESSION['train'];
                $selected_stn=$_SESSION['stn'];
                $total_pg=(int)$_POST['Passengers'];
                $_SESSION['totalpg']=$total_pg;    
                 if($_POST['Class']=='1A')
                {          
                $sql1="select first_ac from $selected_stn where train_name='$selected_train'";
                    
                $result=mysqli_query($con1,$sql1);
                if($row1=mysqli_fetch_array($result))
                {
                $Tfare=$row1[0]*$total_pg; 
                echo "Rs.". $Tfare;
                $_SESSION['tfare']=$Tfare;     
                }
                                  // $_SESSION['tfare']=$Tfare;     
 
                }   
                    
               elseif($_POST['Class']=='2A')
                {
                
                
                 $sql2= "select second_ac from $selected_stn where train_name='$selected_train'" ;  
                $result=mysqli_query($con1,$sql2);
                if($row1=mysqli_fetch_array($result))
                {
                $Tfare=$row1[0]*$total_pg; 
                echo "Rs.".$Tfare;
                    $_SESSION['tfare']=$Tfare;
                }     
               }
                 elseif($_POST['Class']=='3A')
                          {
                              
                            $sql3= "select third_ac from $selected_stn where train_name='$selected_train'" ;  
                $result=mysqli_query($con1,$sql3);
                if($row1=mysqli_fetch_array($result))
                {
                $Tfare=$row1[0]*$total_pg; 
                echo "Rs.". $Tfare;
                    $_SESSION['tfare']=$Tfare;
                          }
                 }
                     elseif($_POST['Class']=='SL')
                          {
                              
                           $sql4= "select sleeper from $selected_stn where train_name='$selected_train'" ;  
                $result=mysqli_query($con1,$sql4);
                if($row1=mysqli_fetch_array($result))
                {
                $Tfare=$row1[0]*$total_pg; 
                echo "Rs.". $Tfare;
                    $_SESSION['tfare']=$Tfare;
                              
                          }   
                    
                }
                 if($_POST['Passengers']=='1p') 
                 {
                     $numbers = range(1, 60);
shuffle($numbers);

$random_1 = $numbers[0]; // first random number
                     $_SESSION['seat1']=$random_1;

                 header('location:1-Passenger.php');       
                 }
    
          elseif($_POST['Passengers']=='2p')
          {
              
            $numbers = range($min, $max);
shuffle($numbers);

$random_1 = $numbers[0]; // first random number
$random_2 = $numbers[1]; // next random, non repeating
                     $_SESSION['seat1']=$random_1;
                     $_SESSION['seat2']=$random_2;
  
              
           header('location:2-Passengers.php');   
              
          }
    
         elseif($_POST['Passengers']=='3p')
         {
              $numbers = range($min, $max);
shuffle($numbers);

$random_1 = $numbers[0]; // first random number
$random_2 = $numbers[1]; // next random, non repeating
$random_3 = $numbers[2]; // next random, non repeating 
            $_SESSION['seat1']=$random_1;
                     $_SESSION['seat2']=$random_2; 
                     $_SESSION['seat3']=$random_3; 
                   
             header('location:3-Passengers.php');
         }
         elseif($_POST['Passengers']=='4p')
         {
              $numbers = range($min, $max);
shuffle($numbers);

$random_1 = $numbers[0]; // first random number
$random_2 = $numbers[1]; // next random, non repeating
$random_3 = $numbers[2]; // next random, non repeating 
            $_SESSION['seat1']=$random_1;
                     $_SESSION['seat2']=$random_2; 
                     $_SESSION['seat3']=$random_3; 
                     $_SESSION['seat4']=$random_4; 
                   
             header('location:4-Passengers.php');
         }
            }
                  
if(isset($_POST['back-btn']))
{
    header('location:calculate-fare2.php');
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
  <meta name="description" content="Website Builder Description">
  <title>Fare</title>
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
    
    
    #content5-12
      {
          text-align: center;
      }
    </style>
  
</head>
<body>
  <section class="menu cid-qROB0Xmn7t" once="menu" id="menu1-u">

    

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

<section class="engine"><a href="https://mobirise.me/f">easy website maker</a></section><section class="mbr-section content5 cid-qRQiSuxvna" id="content5-10">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">CALCULATE FARE</h2>
                
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content5 cid-qRQR66Zydz" id="content5-12">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
               <form method="post">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2">Fare:<br><br>
                
                
                
                Total Passengers:
                
                
                               <select name="Passengers" id="">
                    
                    <option value="None"> --Select One-- 

</option>    
                <option value="1p" name="1p">1</option>    
                <option value="2p" name="2p">2</option>    
                <option value="3p" name="3p">3</option>    
                <option value="4p" name="4p">4</option>    
               
                    
                    
                </select>
                
                
                
                
                
                <br><br><br>Class: <br>
                
                
                 <select name="Class" id="">
                    
                    <option value="None"> --Select One-- 

</option>    
                <option value="1A" name="1A">1A</option>    
                <option value="2A" name="2A">2A</option>    
                <option value="3A" name="3A">3A</option>    
                <option value="SL" name="SL">SL</option>    
               
                    
                    
                </select> <br>
                
                <?php
                
                if(isset($_POST['calc-btn']))
                {
                  
                    
                    /*echo $_SESSION['train'];
                    echo "<br>";
                   echo $_SESSION['stn'];
                    //echo $_SESSION['to_stn'];*/
                    
                    
                    $selected_train=$_SESSION['train'];
                $selected_stn=$_SESSION['stn'];
                $total_pg=(int)$_POST['Passengers'];
                    
                 if($_POST['Class']=='1A')
                {          
                $sql1="select first_ac from $selected_stn where train_name='$selected_train'";
                    
                $result=mysqli_query($con1,$sql1);
                if($row1=mysqli_fetch_array($result))
                {
                $Tfare=$row1[0]*$total_pg; 
                echo "Train Name: ". $selected_train;
                    echo"<br>";
                echo "Class: 1A <br>";  
                echo  "Total number of Passengers:".$total_pg . "<br>"; 
                echo "Total Fare: Rs.". $Tfare;
                }
                    
                }   
                    
               elseif($_POST['Class']=='2A')
                {
                
                
                 $sql2= "select second_ac from $selected_stn where train_name='$selected_train'" ;  
                $result=mysqli_query($con1,$sql2);
                if($row1=mysqli_fetch_array($result))
                {
                $Tfare=$row1[0]*$total_pg; 
                  echo "Train Name: ". $selected_train;
                    echo"<br>";
                echo "Class: 2A <br>";  
                echo  "Total number of Passengers:".$total_pg . "<br>"; 
                echo "Total Fare: Rs.".$Tfare;
                }     
               }
                 elseif($_POST['Class']=='3A')
                          {
                              
                            $sql3= "select third_ac from $selected_stn where train_name='$selected_train'" ;  
                $result=mysqli_query($con1,$sql3);
                if($row1=mysqli_fetch_array($result))
                {
                $Tfare=$row1[0]*$total_pg; 
                    echo "Train Name: ". $selected_train;
                    echo"<br>";
                echo "Class: 3A <br>";  
                echo  "Total number of Passengers:".$total_pg . "<br>"; 
                echo "Total Fare: Rs.". $Tfare;
                          }
                 }
                     elseif($_POST['Class']=='SL')
                          {
                              
                           $sql4= "select sleeper from $selected_stn where train_name='$selected_train'" ;  
                $result=mysqli_query($con1,$sql4);
                if($row1=mysqli_fetch_array($result))
                {
                $Tfare=$row1[0]*$total_pg; 
                    echo "Train Name: ". $selected_train;
                    echo"<br>";
                echo "Class: SL <br>";  
                echo  "Total number of Passengers:".$total_pg . "<br>"; 
                echo "Total Fare: Rs.". $Tfare;  
                              
                          }   
                    
                }
                 }
                    ?>
                   
                
                
                
                
                <br><br><br></h2>
                 <input type="submit" value="Calculate Total Fare" name="calc-btn" class="btn btn-primary" >
                    
                    <input type="submit" value="Back" id="back" name="back-btn" class="btn btn-primary" >
                
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