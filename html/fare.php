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
                    
                $result=mysqli_query($con,$sql1);
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
                $result=mysqli_query($con,$sql2);
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
                $result=mysqli_query($con,$sql3);
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
                $result=mysqli_query($con,$sql4);
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

                 header('location:1Passenger-details.php');       
                 }
    
          elseif($_POST['Passengers']=='2p')
          {
              
            $numbers = range($min, $max);
shuffle($numbers);

$random_1 = $numbers[0]; // first random number
$random_2 = $numbers[1]; // next random, non repeating
                     $_SESSION['seat1']=$random_1;
                     $_SESSION['seat2']=$random_2;
  
              
           header('location:2Passenger-details.php');   
              
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
                   
             header('location:3Passenger-details.php');
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
                   
             header('location:4Passenger-details.php');
         }
            }
                  
if(isset($_POST['back-btn']))
{
    header('location:trains.php');
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
             
           <h1>Book Ticket</h1>  
         </div>
         
        </div> 
       <div class="row" id="login">
         
         <div class="col-sm-12" >
            <form method="post">
                
                 
              <h1>Fare</h1>
               
               
               
                <h2>Total Passengers</h2>
                   <select name="Passengers" id="">
                    
                    <option value="None"> --Select One-- 

</option>    
                <option value="1p" name="1p">1</option>    
                <option value="2p" name="2p">2</option>    
                <option value="3p" name="3p">3</option>    
                <option value="4p" name="4p">4</option>    
               
                    
                    
                </select>
                
                
                <h2>Class:</h2>
                   <select name="Class" id="">
                    
                    <option value="None"> --Select One-- 

</option>    
                <option value="1A" name="1A">1A</option>    
                <option value="2A" name="2A">2A</option>    
                <option value="3A" name="3A">3A</option>    
                <option value="SL" name="SL">SL</option>    
               
                    
                    
                </select>
                <br>
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
                    
                $result=mysqli_query($con,$sql1);
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
                $result=mysqli_query($con,$sql2);
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
                $result=mysqli_query($con,$sql3);
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
                $result=mysqli_query($con,$sql4);
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
                   
                
                
                /*else if(isset($_POST['submit-btn']))
                
                    {
                    
                    
                    $selected_train=$_SESSION['train'];
                $selected_stn=$_SESSION['stn'];
                $total_pg=(int)$_POST['Passengers'];
                    
                 if($_POST['Class']=='1A')
                {          
                $sql1="select first_ac from $selected_stn where train_name='$selected_train'";
                    
                $result=mysqli_query($con,$sql1);
                if($row1=mysqli_fetch_array($result))
                {
                $Tfare=$row1[0]*$total_pg; 
                echo "Rs.". $Tfare;
                }
                    
                }   
                    
               elseif($_POST['Class']=='2A')
                {
                
                
                 $sql2= "select second_ac from $selected_stn where train_name='$selected_train'" ;  
                $result=mysqli_query($con,$sql2);
                if($row1=mysqli_fetch_array($result))
                {
                $Tfare=$row1[0]*$total_pg; 
                echo "Rs.".$Tfare;
                }     
               }
                 elseif($_POST['Class']=='3A')
                          {
                              
                            $sql3= "select third_ac from $selected_stn where train_name='$selected_train'" ;  
                $result=mysqli_query($con,$sql3);
                if($row1=mysqli_fetch_array($result))
                {
                $Tfare=$row1[0]*$total_pg; 
                echo "Rs.". $Tfare;
                          }
                 }
                     elseif($_POST['Class']=='SL')
                          {
                              
                           $sql4= "select sleeper from $selected_stn where train_name='$selected_train'" ;  
                $result=mysqli_query($con,$sql4);
                if($row1=mysqli_fetch_array($result))
                {
                $Tfare=$row1[0]*$total_pg; 
                echo "Rs.". $Tfare;  
                              
                          }   
                    
                }
                        
                        
                        
                 }*/
                  
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                /*if(isset($_SESSION['train'])&&isset($_SESSION['stn']))
                {*/
                    
               /* $selected_train=$_SESSION['train'];
                $selected_stn=$_GET
                $total_pg=(int)$_POST['passengers'];    
                if($_POST['Class']=='1A')
                {          
                $sql1="select first_ac from $selected_stn where train_name='$selected_train'";
                    
                $result=mysqli_query($con,$sql1);
                $Tfare=$result*$total_pg; 
                echo $Tfare;
                    
                }
                 
                elseif($_POST['Class']=='2A')
                {
                
                
                 $sql2= "select second_ac from $selected_stn where train_name='$selected_train'" ;  
                $result=mysqli_query($con,$sql2);
                $Tfare=$result*$total_pg; 
                echo $Tfare;
                }
                elseif($_POST['Class']=='3A')
                          {
                              
                            $sql3= "select third_ac from $selected_stn where train_name='$selected_train'" ;  
                $result=mysqli_query($con,$sql3);
                $Tfare=$result*$total_pg; 
                echo $Tfare;  
                          }
                     elseif($_POST['Class']=='SL')
                          {
                              
                           $sql4= "select sleeper from $selected_stn where train_name='$selected_train'" ;  
                $result=mysqli_query($con,$sql4);
                $Tfare=$result*$total_pg; 
                echo $Tfare;      
                              
                          }*/
                            
                       /*   }
                    
                     else
                     {
                         echo"Session not set!!!";
                     }
                          }*/
                ?>
                 <br><br>
                    <input type="submit" value="Calculate Total Fare" name="calc-btn">
                    <input type="submit" value="Submit" id="submit" name="submit-btn">
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
