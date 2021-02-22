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
    echo "<script type='text/javascript'>
            alert('Login Successful!!!') 
            </script>";
    echo"Welcome " . $_SESSION['uname']; 
}
if(isset($_POST['lgt-btn']))
{
    
  
    session_destroy();
    header('location:login.php');
   

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
    <link rel="stylesheet" href="../css/index1.css">
    <title>Hello, world!</title>
    
    <style>
        
      body
{
    background-color: #9494b8;
    
}
      #lgt-btn
{
    font-size: 28px;
    background-color: darkgray;
    color: crimson;
    border: 2px solid darkcyan;
    border-radius: 32px;
    height: 50px;
    width: 145px;
}
#lgt-btn:hover
{
    background-color: darkcyan;
    text-decoration: underline;
}
       #nav-item-active {
    
    background-color: black;
    color: darkcyan;
           height:50px;
    
} 
      #nav-item {
    
    background-color: black;
    color: crimson;
    height: 50px;
    
}  
        
        
    
.carousel-control-prev-icon
{
    background-color: black;
    height: 45px;
    width: 49px;
    border-radius:48px; 
    
}

.carousel-control-prev-icon:hover
{
    background-color: darkcyan;
    height: 75px;
    width: 79px;
    border-radius:78px;     

}
.carousel-control-next-icon
{
    background-color: black;
    height: 45px;
    width: 49px;
    border-radius:48px; 
    
}

.carousel-control-next-icon:hover
{
    background-color: darkcyan;
    background-color: darkcyan;
    height: 75px;
    width: 79px;
    border-radius:78px;     
}
        
        
  #Dropdown
{
    
background-color: black;
   color: crimson; 
    height: 50px;
    
}  
        #Dropdown:hover
        {
             background-color: mediumseagreen;
    color: darkred;
 
        }
        .dropdown-menu
        {
            background-color:#42c8f4;
            color: #ffffff;
            border: 2px solid darkgray;
        }
        .dropdown-item:hover
        {
          
            color: #42f4b3;
            background-color: black;
        }
        .jumbotron
        {
            
            background-color: black;
            color:orangered;
            
        }
      </style>
    
    
  </head>
  <body>
   <div class="outer">
    <h1 id="outer-h1">Tour N Travels</h1>
      </div>
     <div class="container-fluid">
        
        
        
        
        
         
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Tour N Travels</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active"id="nav-item-active"  href="#">Home <span class="sr-only">(current)</span></a>
      
      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="Dropdown">Booking</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="book-ticket1.php">Book Train Ticket</a>
      <a class="dropdown-item" href="Booked-Tickets.php">Booked Tickets</a>
      <a class="dropdown-item" href="Cancel-ticket.php">Cancel Ticket</a>
      <a class="dropdown-item" href="print-ticket.php">Print Ticket</a>
    
        
          </div>
  </li> 
        <a class="nav-item nav-link" id="nav-item" href="contact-us.php">Contact-Us</a>
        <form method="post">
            <input type="submit" class="btn btn-primary" name="lgt-btn" value="Logout"id="lgt-btn"></form>
    </div>
  </div>
</nav>
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
      <img class="d-block w-100" src="images/img4.jpeg" alt="First slide" height="550px" width="650px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img5.jpeg" alt="Second slide" height="550px" width="650px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img6.jpeg" alt="Third slide" height="550px" width="650px">
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

 <div class="jumbotron">
  <h1 class="display-4">Book Packages!!!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
 
    <div class="row">
    <div class="col-sm" id="service">
           <h1>Our Services</h1>
            </div>
      </div> 
  <div class="row" id="services">
    <div class="col-sm">
       <img src="images/img1.jpg" height="400px"width="420px"id="img1">
       <p id="p1">Book Flights</p>
    </div>
    <div class="col-sm">
        <img src="images/img2.jpeg" height="400px"width="420px"id="img2">
        <p id="p2">Book Cabs</p>
    </div>
    <div class="col-sm">
    <img src="images/img3.jpeg" height="400px"width="420px"id="img3">
    <p id="p3">Book Hotels</p>
    </div>
  </div>
</div>  
  
        <div class="row">
    <div class="col-sm" id="explore">
           <h1>Explore New Places</h1>
            </div>
      </div> 
      
     <div class="row">
    <div class="col-sm" >
         <figure class="figure">
  <img src="images/img7.jpeg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."  >
  <figcaption class="figure-caption" id="img1-cap">“Stop worrying about the potholes in the road and enjoy the journey”</figcaption>
</figure>
          </div>
            
             
          
            </div>
            
          
      <div class="row">
          <div class="col-sm" >
         <figure class="figure">
  <img src="images/img8.jpeg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." >
  <figcaption class="figure-caption" id="img2-cap">” The real voyage of discovery consists not in seeking new landscapes, but in having new eyes.” ~ Marcel Proust</figcaption>
</figure>
         
      </div>
      </div> 
      
      <div class="row">
      
         <div class="col-sm" >
         <figure class="figure">
  <img src="images/img9.jpeg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
  <figcaption class="figure-caption"  id="img3-cap">“Travel doesn't become adventure until you leave yourself behind”</figcaption>
</figure>
         
          
            </div> 
          </div>
      
      
      
      <div class="row" >
          <div class="col-sm" id="reviews">
              
              <h1>Reviews</h1>
              
          </div>
          
          
      </div>
       <div class="row" id="r-img1">
      
         <div class="col-sm" >
         <figure class="figure"id="fig-1">
  <img src="images/img11.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="330px" width="330px" id="r-fig1">
  <figcaption class="figure-caption"  id="rimg1-cap"><p class="text-center">"Excellent Servicess"-Rajesh</p></figcaption>
</figure>
         </div> 
         
         
            <div class="col-sm" >
         <figure class="figure"id="fig-2">
  <img src="images/img12.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="330px" width="330px"id="r-fig2">
  <figcaption class="figure-caption"  id="rimg2-cap"><p class="text-center">"Lowest Prices"-Kriti</p></figcaption>
             </figure>
         </div> 
                      <div class="col-sm" >
         <figure class="figure" id="fig-3">
  <img src="images/img11.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."height="330px" width="330px"id="r-fig3">
  <figcaption class="figure-caption"  id="rimg3-cap"><p class="text-center">"Lowest Prices"-Kriti</p></figcaption>
             </figure>
                </div>
          
             
           </div>
      <div class="row">
    <div class="col-sm" id="reach">
           <h1>Reach Us!</h1>
            </div>
      </div> 
          
      <div class="row" id="reach-us" >
    <div class="col-sm-12" >
           <form action="">
               
               <label >Name:</label>
               <input type="text" name="" id="t-name" placeholder="Enter Your Name">
        </form>
          </div>
               <div class="col-sm-12" >
           <form action="">
               <label >E-Mail:</label>
               <input type="text" name="" id="t-name" placeholder="Enter Your E-Mail ID">
           </form>
            </div>
               <div class="col-sm-12" >
           <form action="">
               <label >Mobile No:</label>
               <input type="text" name="" id="t-name" placeholder="Enter Your Mobile Number">
           </form>
            </div>
             
                <div class="col-sm" >
           <form action="">
               <button type="button" class="btn btn-primary btn-lg btn-block" id="sub-btn">Submit</button>
           </form>
            </div>
            </div>
      
         <div class="row" >
          <div class="col-sm" id="footer">
              
            <p>All Rights Reserved.Copyrights&copy;2018<br>
               Designed By Shivam Dhar
             </p>
              
          </div>
      </div>
          
     
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script> src="../bottstrap/js/bootstrap.min.js" </script>
  </body>
</html>