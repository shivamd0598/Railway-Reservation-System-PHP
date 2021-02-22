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
        *{
            margin: 0px;
            padding: 0px;
        }
      body
{
background: url(images/abstrakt-tile.jpg) fixed;
    background-attachment: fixed;
    background-size: cover;
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
        #intro{
            font-size: 20px;
            color:darkcyan;
            background-color: black;
            
        }
        #heading h1
        {
            text-align: center;
            background-color: black;
            color: crimson;
            margin-bottom: 10px;
        }
        
        #services
        {
            text-align: center;
            color: darkcyan;
            font-size: 2em;
            
        }
        #book-button
        {
            background-color: darkgray;
            color:crimson;
            width: 100%;
            height: 50px;
            font-size: 22px;
            border-radius: 48px;
            border:4px solid darkgray;
        }
        
        #book-button:hover
        {
            background-color: darkcyan;
            text-decoration: underline;
            cursor: pointer;
        }
        
         #booked-button
        {
            background-color: darkgray;
            color:crimson;
            width: 100%;
            height: 50px;
            font-size: 22px;
            border-radius: 48px;
            border:4px solid darkgray;
        }
        
        #booked-button:hover
        {
            background-color: darkcyan;
            text-decoration: underline;
            cursor: pointer;
        }
        
         #print-button
        {
            background-color: darkgray;
            color:crimson;
            width: 100%;
            height: 50px;
            font-size: 22px;
            border-radius: 48px;
            border:4px solid darkgray;
        }
        
        #print-button:hover
        {
            background-color: darkcyan;
            text-decoration: underline;
            cursor: pointer;
        }
        
         #cancel-button
        {
            background-color: darkgray;
            color:crimson;
            width: 100%;
            height: 50px;
            font-size: 22px;
            border-radius: 48px;
            border:4px solid darkgray;
        }
        
        #cancel-button:hover
        {
            background-color: darkcyan;
            text-decoration: underline;
            cursor: pointer;
        }
        
        
        #navbar-expand
        {
            background-color: darkblue;
            background-image: url(images/download.jpg);
        }
      </style>
    
    
  </head>
  <body>
   
   
      
     <div class="container-fluid">
        
        
        
          <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar-expand">
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
<div class="row">
         
         <div class="col-sm" id="heading">
         <h1>Welcome To Train Reservation System</h1>
             
    </div>
         </div>
<div class="row">
         
         <div class="col-sm" id="intro">
             
           
           
             
             <p>Technology has transformed many aspects of life in the 21st century,includingthe way many of us make train reservations.For example, to make ticketing more convinient for travelers,Indian Railways has started an online reservation system,which helps us in booking tickets from the comfort of our homes or offices.while this is convinient for most people, it has made things particularly easy for peoplr residing in remote locations.</p>
               <br>
               <p>The various advantages of using the train reservation system are as follows:</p>
               <ul>
                <li>You can book train tickets</li>
                <li>You can search for trains</li>
                <li>You can view booked tickets.</li>
                <li>You can cancel booked tickets.</li>
                <li>You can Print  booked tickets.</li>
                <li>You can Search for trains between two stations.</li>
             </ul> 
                 
                   
                     
                         
         </div>
         </div>
         
         <div class="row">
         
         <div class="col-sm" id="heading">
         <h1>Our Services</h1>
            
    </div>
         </div>
         
         <div class="row">
         
         <div class="col-sm" id="services">
         <form action="book-ticket1.php" method="post">
               <h2>Book Ticket</h2>
               
               <!-- <button type="submit" class="btn btn-primary btn-lg btn-block" id="book-btn" name="book-btn"> Book Ticket</button>-->
             <input type="submit" value="Book Ticket" name="book-button" id="book-button"></form>
               <form action="Booked-Tickets.php" method="post">
               <h2>Booked Tickets</h2>
               
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="booked-button" >Booked Tickets</button>
             </form>
              <form action="print-ticket.php" method="post">
               <h2>Print Ticket</h2>
               
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="print-button" n>Print Ticket</button>
             </form>
               <form action="Cancel-ticket.php" method="post">
               <h2>Cancel Ticket</h2>
               
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="cancel-button" >Cancel Ticket</button>
               
               
            
               
               
               
             </form>
             </div>
         </div> 
         
         
         <div class="row">
         
         <div class="col-sm" id="heading">
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
