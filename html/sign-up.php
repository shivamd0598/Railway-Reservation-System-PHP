
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
    </head>
    
    <script type="text/javascript">
    
    
    function validate()
    {
        
       var n=document.getElementById('u-name').value;
        
        if(n=="")
            {
                
                alert("Enter Your Name");
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
    
    
    
    <style>
    
    #c-pass
        {
    border-radius: 34px;
    font-size: 32px;
    margin-left: 2px;
        }
    #sign-btn
    {
        font-size: 38px;
        width: 280px;
        height: 70px;
    }
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
         <a class="nav-item nav-link active"id="nav-item-active"  href="#">Sign Up <span class="sr-only">(current)</span></a>
       
        <a class="nav-item nav-link" id="nav-item" href="forgot-pass.php">Forgot Password</a>
        <a class="nav-item nav-link" id="nav-item" href="contact-us.php">Contact-Us</a>
      
    </div>
  </div>
</nav>
      
     <div class="row">
         
         <div class="col-sm" id="h-login">
             
           <h1>CREATE NEW ACCOUNT</h1>  
         </div>
         
        </div> 
       <div class="row" id="login">
         
         <div class="col-sm-12" >
             <form method="post">
                 
                 <label> User-name: </label>
                 <input type="text" name="uname" id="u-name" placeholder="Enter Your User-name">
                 
      
         <br>
        
                 
                 <label id="l-pass"> Password: </label>
                 <input type="password" name="pass" id="pass" placeholder="Enter Your Password">
                 
          <br>
             
                 
               <label id="l-cpass">Confirm Password:</label>
                 
                 <input type="password" name="" id="c-pass" placeholder="Enter Your Password">
                                 <br>
                                  <label id="l-pass"> Gender: </label>

                 <select name="gender" id="">
                     <option value="">--Select One--</option>
                     <option value="">Male</option>
                     <option value="">Female</option>
                     
                 </select>
                <br>
         <label id="l-pass"> Security Queston: </label>
        <select name="security-question" id="">
        <option value="">--Select One--</option>
         <option value="">Your Childhood's best friend name?</option>   
         <option value="">Your first pet name?</option>   
         <option value="">Your first School's name?</option>   
         <option value="">Your favourite sports name?</option>   
         </select><br>
                          <label id="l-pass"> Answer: </label>

                <input type="text" name="answer" placeholder="Answer Your Security Question" id="uname">
                <br>
                <input type="submit" class="btn btn-primary" value="Sign Up" name="sign-btn" id="sign-btn" onclick="return validate()" >
                
                 
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

<?php
include("conn.php");

if(isset($_POST['sign-btn']))
{
    
    $uname=$_POST['uname'];
    $pswd=$_POST['pass'];
    $gender=$_POST['gender'];
    $answer=$_POST['answer'];
    
    $sql1="INSERT INTO users(sno,uname,password,gender,answer) VALUES(NULL,'$uname','$pswd','$gender','$answer')";
    
    $sql2="CREATE TABLE $uname(sno int(20) PRIMARY KEY AUTO_INCREMENT,
    train_name varchar(50),
    train_no bigint(20),
    fare int(20),
    class varchar(50),
    boarding_stn varchar(50),
    destination_stn varchar(50),
    
    date_journey date
   
    )";
    
  // mysqli_query($con,$sql);
//  $result2=mysqli_query($con,$sql2);
if (!mysqli_query($con,$sql1))
  {
    echo "<script type='text/javascript'>
            alert('Account Not Created!!') 
            </script>";
  echo("Error description: " . mysqli_error($con));
    
  }
    
    if (!mysqli_query($con,$sql2))
  {
    
    echo "<script type='text/javascript'>
            alert('Account Not Created!!') 
            </script>";    
  echo("Error description: " . mysqli_error($con));
  }
       
        else
        {
            
    echo "<script type='text/javascript'>
            alert('Account Successfully Created!!') 
            </script>";
        }
}
?>


