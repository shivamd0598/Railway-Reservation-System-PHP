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
             
                 
             $train=$_POST['available_trains'];     
              $_SESSION['train']=$train;        
             
             
       
       /*$frm_stn =$_GET['From_Stations'];
              $to_stn= $_GET['To_Stations'];
              $stn_val=$frm_stn . $to_stn;
                       $_SESSION['stn']=$stn_val;*/

       
            header("location:fare.php");
   }
             
                
if(isset($_POST['back-btn']))
{
    header('location:book-ticket1.php');
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
        
        
    #show-details-btn    
      {
        
         height: 80px;
    width: 350px;
    background-color: darkgray;
    color: crimson;
    border-radius: 90px;
        
        
        }
         #show-details-btn:hover
        {
            
            
          background-color: darkcyan;
    color: crimson;
    cursor: pointer;  
            
            
        }
        
        #train-details
        {
            color: darkcyan;
            font-size: 28px;
            text-align: center;
        }
    </style>
    
    
   <body>
  <div class="container-fluid">
      
      

      
     <div class="row">
         
         <div class="col-sm" id="h-login">
             
           <h1>Book Ticket</h1>  
         </div>
         
        </div> 
       <div class="row" id="login">
         
         <div class="col-sm-12" >
            <form method="post" >
              <h2>Available Trains:</h2>
               
              
            
  <br>
  <?php
                 echo $_SESSION['stn'];  
             echo $_SESSION['frm_stn']."-".$_SESSION['to_stn'];   
                
                ?>


<br>
    
    <!--<select name="available_trains">
     <!--  <option value="Jammu Rajdhani"> Jammu Rajdhani</option>   
     <option value="Jammu Rajdhani"> Jammu Rajdhani</option>   
     <option value="Jammu Rajdhani"> Jammu Rajdhani</option>   
     <option value="Jammu Rajdhani"> Jammu Rajdhani</option>   
    
</select>-->
   <select name="available_trains" id="">
    <?php
        
    //echo $_SESSION['frm_stn'];*/
   /* $stn_val=$_SESSION['stn'];*/
        //$frm_stn=$_GET['From_Stations'];
        //$to_stn= $_GET['To_Stations'];
       // $stn_val=$frm_stn . $to_stn;
                $stn_val=$_SESSION['stn'];
    $sql1="SELECT * from $stn_val ";
    
    $result=mysqli_query($con,$sql1);
                
    while($row=mysqli_fetch_array($result))
   {
     // $_SESSION['train_no']=$row["train_no"];
    ?>
    <option ><?php echo $row["train_name"]; ?> </option>
    
    <?php   
}
                    


    ?>
               </select><br><br>
                
                
    <?php            
        if(isset($_POST['Show-btn']))
        {
        $train=$_POST['available_trains'];        
        $sql2="SELECT * from $stn_val where train_name='$train'";
        $result=mysqli_query($con,$sql2);
            if($row1=mysqli_fetch_array($result))
                {
            
        ?>           
       <table border="4px" text-align='center' align="center" id='train-details'>
        
            <th colspan="4" text-align='center'>Train Details</th>
            
          
        <tr text-align='center'>
            
        <td>Train Name</td>    
        <td>Train No.</td>    
        <td>Scheduled Dept.</td>    
        <td>Scheduled Arrv.</td>      
        </tr>   
           
           
        <tr>
            
            <td><?php echo $row1['train_name'] ?></td>
            <td><?php echo $row1['train_no'] ?></td>
            <td><?php echo $row1['scheduled_dept'] ?></td>
            <td><?php echo $row1['scheduled_arrv'] ?></td>
            
            
            
        </tr>   
           <?php
                }
        }
                
                
                
                
            ?>
           
       </table>
            <!--<select>
             <option value="Jammu Rajdhani"> Jammu Rajdhani</option>   
     <option value="Jammu Rajdhani"> Jammu Rajdhani</option>   
     <option value="Jammu Rajdhani"> Jammu Rajdhani</option>   
     <option value="Jammu Rajdhani"> Jammu Rajdhani</option>   
    
</select>-->
          
            <br>

              
           
                 <br><br>
                     <input type="submit" value="Show Details" name="Show-btn" id="show-details-btn" class="btn btn-primary">            
                    <input type="submit" value="Submit" id="submit"  name="submit-btn" class="btn btn-primary" >
                    <input type="submit" value="Back" id="back" name="back-btn" class="btn btn-primary">
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
