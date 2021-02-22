<?php
include("conn.php");
session_start();
if(!isset($_SESSION['uname']))
   {
       header('location:login.php');
   }

/*if(isset($_POST['pay-btn']))
 {
     header("location:Payment-Successful.php");
 }*/
if(isset($_POST['back-btn']))
 {
     header("location:index.php");
 }
         if(isset($_POST['cancel-btn']))
         {
             
          $selected_ticket=$_POST['radio'];
          $username=$_SESSION['uname']; 
               
          $sql1="delete from $username where sno= '$selected_ticket' ";
          if (!mysqli_query($con,$sql1))
  {
    echo "<script type='text/javascript'>
            alert('Ticket Not Cancelled!!') 
            </script>";
  echo("Error description: " . mysqli_error($con));
    
  }  
              else
        {
            
    echo "<script type='text/javascript'>
            alert('Ticket Successfully Cancelled!!') 
            </script>";
        }
             
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
        
        
            
  #back-btn
{
    height: 80px;
    width: 350px;
    background-color: darkgray;
    color: crimson;
    border-radius: 90px;
}      
        
 #back-btn:hover
{       
    
    background-color: darkcyan;
    color: crimson;
    cursor: pointer;
        }  
        
        
      #booked-tickets
        {
         
            color: darkcyan;
            font-size: 28px;
            text-align: center;   
        }
        
        #cancel-button
        {
            height: 80px;
    width: 350px;
    background-color: darkgray;
    color: crimson;
    border-radius: 90px;
        }
        #cancel-button:hover
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
             
           <h1>Cancel Booked Tickets</h1>  
         </div>
         
        </div> 
       <div class="row" id="login">
         
         <div class="col-sm-12" >
            <form method="post">
                
                <h1>Records:</h1>
                    <br>
                  <table colspan="5" text-align='center' id="booked-tickets" align='center' border="4px">
                    <tr>
                    <th colspan="6" text-align='center'>Booked Tickets</th>
                </tr>
                    
                     <tr text-align='center'>
        <td>Select Ticket</td>    
        <td>Train Number</td>    
        <td>Train Name</td>    
        <td>Date Of Journey</td>    
        <td>Class</td>      
        <td>Total Fare</td>      
        </tr>     
                    
              <?php 
                $cnt=0;
                $username=$_SESSION['uname'];
                $sql1="Select * from $username";
                $result=mysqli_query($con,$sql1);
                while($row=mysqli_fetch_array($result))
                {
                ?>
                
                    
                    <tr>
                    <td><input type="radio" name="radio" value="<?php echo $row['sno'] ?>"></td>
                    <td><?php echo $row['train_no'] ?></td>
                    <td><?php echo $row['train_name'] ?></td>
                    <td><?php echo $row['date_journey'] ?></td>
                    <td><?php echo $row['class'] ?></td>
                    <td><?php echo $row['fare'] ?></td>
                    
                    </tr>
                    <?php
                    $cnt++;
                }
                if($cnt==0)
                {
                    echo "Records Not Found!!!";
                }
                    ?>
                </table>
                  
                    <br>
                    <br>
                    <input type="submit" value="Cancel Ticket" id="cancel-button" name="cancel-btn">
                    <input type="submit" value="Back" id="back-btn" name="back-btn">
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