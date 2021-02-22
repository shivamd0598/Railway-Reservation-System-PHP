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
     header("location:Payment-Successful.php");
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
         
         <div class="col-sm" id="h-login">
             
           <h1>PAYMENT GATEWAY</h1>  
         </div>
         
        </div> 
       <div class="row" id="login">
         
         <div class="col-sm-12" >
            <form method="post">
                 
              <h1>PAYMENT</h1><br>
               <?php
                echo $_SESSION['card'];
                
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
              echo "Rs.".$tfare;
                
           ?>
                   
                    <br>
                    <br>
                    <input type="submit" value="Pay" id="submit" name="pay-btn">
                    <input type="submit" value="Cancel" id="back" name="cancel-btn">
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