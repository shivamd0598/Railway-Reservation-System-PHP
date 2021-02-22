
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
        <a class="nav-item nav-link" id="nav-item"href="login.php">Login</a>
        <a class="nav-item nav-link" id="nav-item" href="sign-up.php">Sign Up</a>
        <a class="nav-item nav-link" id="nav-item" href="forgot-pass.php">Forgot Password</a>
         <a class="nav-item nav-link active"id="nav-item-active"  href="contact-us.php">   Contact-Us   
             <span class="sr-only">(current)</span></a>
       
        <a class="nav-item nav-link" id="nav-item" href="#"></a>
        
      
    </div>
  </div>
</nav>
      
     <div class="row">
         
         <div class="col-sm" id="h-login">
             
           <h1>Contact Us</h1>  
         </div>
         
        </div> 
       <div class="row" id="login">
         
         <div class="col-sm" >
            <form action="">
                 
                <button type="button" class="btn btn-primary btn-lg btn-block" id="sub-btn">Contact No:-(+91) 2234-555-667</button>
                 <button type="button" class="btn btn-primary btn-lg btn-block" id="sub-btn">Mail-Id:traventour123@gmail.com</button>
                 
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