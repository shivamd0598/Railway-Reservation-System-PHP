<?php
session_start();
if(!isset($_SESSION['uname']))
   {
       echo "<script type='text/javascript'>
            alert('Please Login!!') 
            </script>";
       header('location:login.php');
   }
/*if(isset($_SESSION['uname']))
{
    
   
    echo"Welcome " . $_SESSION['uname'];
    
    

if(isset($_POST['back-btn']))
{
    
    header('location:index.php');
    
}
    
}*/

if(isset($_POST['submit-btn']))
    
{
    $frm_stn=$_POST['From_Stations'];
    $to_stn=$_POST['To_Stations'];   
   $d_journey=$_POST['date_journey'];
    //$_SESSION['frm_stn']=$frm_stn;
   // $_SESSION['to_stn']= $to_stn; 
    $stn_val=$frm_stn . $to_stn;
    $_SESSION['stn']=$stn_val;
    $_SESSION['frm_stn']=$frm_stn;
    $_SESSION['to_stn']=$to_stn;
    $_SESSION['date_journey']=$d_journey;
    header("location: trains.php");
}
if(isset($_POST['back-btn']))
{
    header('location:index.php');
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
    <link rel="stylesheet" href="../css/contact-us.css">
    
     <script type="text/javascript">
        function validate()
    {
        
       var n=document.getElementById('u-name').value;
        
        if(n=="")
            {
                
                alert("Enter Your user-name");
                return false;
            }
        
     
        var p=document.getElementById('pass').value;
        var cp=document.getElementById('c-pass').value;
        if(cp!=p)
            {
                alert("Password Not Matching")
                
                return false;
                
            }
        var plen=p.length;
        if(plen<4)
            {
                
                alert("Password Too Short!!!....Password must have atleast 4 characters")
                 return false;
            }
    }
    
    
    
    
    
    </script>
    
    </head>
    
    
    <style>
    
    #c-pass
{
    border-radius: 34px;
    font-size: 32px;
    margin-left: 2px;
    
}
#sub-btn
{
    
    font-size: 28px;
    background-color: 42d1f4;
    color: crimson;
    border-radius: 28px;
    border: 2px solid darkgray;
}

#sub-btn:hover
{
    background-color: 42d1f4;
    color: crimson;
    
}
        
        
  #submit
{
    height: 80px;
    width: 350px;
    background-color: darkgray;
    color: crimson;
    border-radius: 90px;
}      
        
 #submit:hover
{       
    
    background-color: darkcyan;
    color: crimson;
    cursor: pointer;
        }
        
        
            
  #back
{
    height: 80px;
    width: 350px;
    background-color: darkgray;
    color: crimson;
    border-radius: 90px;
}      
        
 #back:hover
{       
    
    background-color: darkcyan;
    color: crimson;
    cursor: pointer;
        }    
    </style>
    
    
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
        <a class="nav-item nav-link" id="nav-item"href="index.php">Home</a>
        
         <a class="nav-item nav-link active"id="nav-item-active"  href="contact-us.php">   Book Ticket   
             <span class="sr-only">(current)</span></a>
       
        <a class="nav-item nav-link" id="nav-item" href="contact-us.php">Contact Us</a>
        
      
    </div>
  </div>
</nav>
      
     <div class="row">
         
         <div class="col-sm" id="h-login">
             
           <h1>Book Ticket</h1>  
         </div>
         
        </div> 
       <div class="row" id="login">
         
         <div class="col-sm-12" >
            <form method="post" >
                 
              <h1>Journey Planner</h1>
                
                <h2>From Station:</h2>
                <select name="From_Stations" id="">
                    
                    <option value="None"> --Select One-- </option>    
                <option value="Jammu">Jammu</option>    
                <option value="Delhi">Delhi</option>    
                <option value="Mumbai">Mumbai</option>    
                <option value="Jammu">Varanasi</option>    
                <option value="Jammu">Amritsar</option>    
                    
                    
                    
                </select>
                
                
                
                     <h2>To Station:</h2>
                <select name="To_Stations" id="">
                    
            <option value="None"> --Select One-- </option>    
                <option value="Jammu">Jammu</option>    
                <option value="Delhi">Delhi</option>    
                <option value="Mumbai">Mumbai</option>    
                <option value="Varanasi">Varanasi</option>    
                <option value="Amritsar">Amritsar</option>    
               
                </select><br>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
      var minDate=new Date();
    $( "#datepicker" ).datepicker({
        
       showAnim:'drop',
        numberofMonth:1,
        dateFormat:'dd/mm/yy',
        minDate:minDate
        
    });
  } );
  </script>
<p>Date:
                    <br> <input type="text" id="datepicker"></p>
                                     

                <!--</script><br>
    <input type="text" id="txtDate" name="txtDate" onclick="datepicker()">--><br><br><br>
          <input type="submit" value="Submit" name="submit-btn" id="submit">
                    <input type="submit" value="Back" id="back" name="back-btn">
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