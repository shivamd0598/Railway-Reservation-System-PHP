<?php
session_start(); 
if(!isset($_SESSION['uname']))
   {
       header('location:login.php');
   }
if(isset($_SESSION['uname']))
{
    
    if(!isset($_SESSION['timeout']))
    {
        
        $_SESSION['timeout']=time();
        
    }
    
    else{
        
        $out=300;
        $life=time()-SESSION['timeout'];
        
        if($life>$out)
        {
            
             session_destroy();
            header('location:login.php');
        }
        
    }
    /*echo "<script type='text/javascript'>
            alert('Login Successful!!!') 
            </script>";
    echo"Welcome " . $_SESSION['uname']; 
}
if(isset($_POST['lgt-btn']))
{
    
  
    session_destroy();
    header('location:login.php');
   

}*/
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
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-qROB0Xmn7t" once="menu" id="menu1-e">

    

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

<section class="engine"><a href="https://mobirise.me/n">free landing page html templates</a></section><section class="cid-qROB0YLexx mbr-parallax-background" id="header2-f">

    

    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(118, 118, 118);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">TOUR N TRAVELS</h1>
                
                
                
            </div>
        </div>
    </div>
    
</section>

<section class="mbr-section content5 cid-qROJMwd7WD" id="content5-h">

   <?php
         
            echo "<script type='text/javascript'>
            alert('Login Successful!!!') 
            </script>";
    echo"<h1 style='color:red; font-size:2em; background-color:black'>Welcome " . $_SESSION['uname']."</h1>"; 
}
if(isset($_POST['lgt-btn']))
{
    
  
    session_destroy();
    header('location:login.php');
   

}

?> 

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2">WELCOME TRAIN RESERVATION SYSTEM</h2>
                
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-qROLjsZMsx" id="content1-i">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7">
                Technology has transformed many aspects of life in the 21st century,includingthe way many of us make train reservations.For example, to make ticketing more convinient for travelers,Indian Railways has started an online reservation system,which helps us in booking tickets from the comfort of our homes or offices.while this is convinient for most people, it has made things particularly easy for peoplr residing in remote locations.
            </div>
        </div>
    </div>
</section>

               
<section class="mbr-section article content11 cid-qROLBAMhbG" id="content11-k">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
               <p>The various advantages of using the train reservation system are as follows:</p><br>
                <ol>
                    <li>You can book train tickets</li>
                <li>You can search for trains</li>
                <li>You can view booked tickets.</li>
                <li>You can cancel booked tickets.</li>
                <li>You can Print  booked tickets.</li>
                <li>You can Search for trains between two stations.</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content5 cid-qROLTQtlra" id="content5-l">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">OUR SERVICES<br></h2>
                
                
                
            </div>
        </div>
    </div>
</section>

<section class="tabs2 cid-qROMjCxj70" id="tabs2-m">

    

    
    <div class="container">
        
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <ul>  <form action="BOOK-TICKET3.php" method="post">
               <h2 style="color:crimson;text-align:center;font-size:2em;">Book Tickets</h2>
               
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="booked-button" >Book Tickets</button>
             </form>
               <form action="booked-tickets1.php" method="post">
               <h2 style="color:crimson;text-align:center;font-size:2em;">Booked Tickets</h2>
               
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="booked-button" >Booked Tickets</button>
             </form>
              <form action="print-ticket1.php" method="post">
               <h2 style="color:crimson;text-align:center;font-size:2em;">Print Ticket</h2>
               
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="print-button" n>Print Ticket</button>
             </form>
               <form action="cancel-ticket1.php" method="post">
               <h2 style="color:crimson;text-align:center;font-size:2em;">Cancel Ticket</h2>
               
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="cancel-button" >Cancel Ticket</button>
                    </form>
                    
               
                       <form action="search-train.php" method="post">
               <h2 style="color:crimson;text-align:center;font-size:2em;">Search Train</h2>
               
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="cancel-button" >Search Train</button>
                    </form>
                    
                    
                    
                    
                    <form action="search-train-stns.php" method="post">
               <h2 style="color:crimson;text-align:center;font-size:2em;">Search Trains Between Two Stations</h2>
               
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="cancel-button" >Search Available Trains</button>
                    </form> 
                    
                    
                    
                    <form action="calculate-fare1.php" method="post">
               <h2 style="color:crimson;text-align:center;font-size:2em;">Calculate Fare For Journey</h2>
               
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="cancel-button" >Get Fare Estimate</button>
                    </form> 
                    
                    
                    
                    
                    
                    
                
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7"></p>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7"></p>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7"></p>
                            </div>
                        </div>
                    </div>
                    <div id="tab4" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab5" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Publish your website to a local drive, FTP or host on Amazon S3, Google Cloud, Github Pages. Don't be a hostage to just one platform or service provider.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab6" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Just drop the blocks into the page, edit content inline and publish - no technical skills required.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form1 cid-qROOnqZTvn" id="form1-n">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    CONTACT FORM
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Easily add subscribe and contact forms without any server-side integration.
                </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <div data-form-alert="" hidden="">
                        Thanks for filling out the form!
                    </div>
            
                    <form class="mbr-form" action="https://mobirise.com/" method="post" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="06qT61B6BPkbBPVPXhYlHiP3aA/QNsDmfL8GzyMS1YFY1i8vXevx7bxCFhZaO2G/jqFkGiQ4kHEZr8wCIlpEt/B9ngns4ELiZ4IYDtagH+79e20SoW1FgwnKfHubbZBZ" data-form-field="Email">
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-n">Name</label>
                                    <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-n">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-n">Email</label>
                                    <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-n">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-n">Phone</label>
                                    <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="phone-form1-n">
                                </div>
                            </div>
                        </div>
                        <div class="form-group" data-for="message">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-n">Message</label>
                            <textarea type="text" class="form-control" name="message" rows="7" data-form-field="Message" id="message-form1-n"></textarea>
                        </div>
            
                        <span class="input-group-btn">
                            <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button>
                        </span>
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
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/mbr-tabs/mbr-tabs.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>