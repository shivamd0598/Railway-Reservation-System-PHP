<?php
include("conn1.php");
session_start();
if(!isset($_SESSION['uname']))
   {
       header('location:login.php');
   }

if(isset($_POST['prcd-paybtn']))
{
    $pname1=$_POST['tname1'];
    $pname2=$_POST['tname2'];
    $pname3=$_POST['tname3'];
    
    if($pname1!=null && $pname2!=null && $pname3!=null)
    {
    header('location:choose-card.php');
    }
    else
     {
        echo "<script type='text/javascript'>
        alert('Enter the passenger details!!!')
        </script>";
        
    } //yeh bhi nhi show ho raha aur page ka design bhi change ho jaata hai //start now...hmm agaya yeh ,,,kya problem thi?ate ho harr alert k baad. wo by default isi page par hi rehta hai ok k click par...gotit?matlab agar alert rakha hoga toh header ke need nhi hai? hmmm yes.....ok
    //yeh > nhi tha and window.location ya header kyu lag
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
        
        
#tname1
        {
            height: 55px;
            width: 320px;
        }
       
        
   #tname2
        {
            height: 55px;
            width: 320px;
        }
        #tname3
        {
            height: 55px;
            width: 320px;
        }
        #tname4
        {
            height: 55px;
            width: 320px;
        }
             
        
        #frm-data
        {
            background-color: black;
            color: darkcyan;
            text-align: center;
            font-size: 20px;
            width: 100%;
}
        
    </style>
    
    
   <body>
  <div class="container-fluid">
      

      
     <div class="row">
         
         <div class="col-sm" id="h-login">
             
           <h1>Book Ticket</h1>  
         </div>
         
        </div> 
       <!--<div class="row" id="login">
         <form method="post">
         <div class="col-sm-12" >
          
          
          <h1>Passenger Details:</h1>
   
          
           </div>
           
            <div class="col-sm-6">
                
                
                
                <h2>Passenger Name:</h2>
                
               
            </div> 
          
          
               <div class="col-sm-4">
          
          
           <h2>Prefeered Berth:</h2>
                
          
          
          </div>
          
          <div class="col-sm-4">
           <h2>Gender:</h2>
           </div>
           
           
             <div class="col-sm-4">
            <input type="text" name="" id="tname1" placeholder="Enter 1st Pessanger Name">
           </div>
          
                  
             
          
              
              
                        <div class="col-sm-4">
           <select name="Class" id="">
                    
                    <option value="None"> --Select One-- </option>    
                <option value="ub">Upper Berth</option>    
                <option value="mb">Middle Berth</option>    
                <option value="lb">Lower Berth</option>        
                </select>
                
           </div>
          
              
                                    <div class="col-sm-4">
               <select name="gender" id="">
                    
            <option value="None"> --Select One-- </option>    
                <option value="m">Male</option>    
                <option value="f">Female</option>    
                
                </select>
           </div>
             
             
               <div class="col-sm-4">
            <input type="text" name="" id="tname2" placeholder="Enter 2nd Pessanger Name">
           </div>
          
             
              
              
                        <div class="col-sm-4">
           <select name="Class" id="">
                    
                    <option value="None"> --Select One-- </option>    
                <option value="ub">Upper Berth</option>    
                <option value="mb">Middle Berth</option>    
                <option value="lb">Lower Berth</option>        
                </select>
                
           </div>
          
              
                                    <div class="col-sm-4">
             <select name="gender" id="">
                    
            <option value="None"> --Select One-- </option>    
                <option value="m">Male</option>    
                <option value="f">Female</option>    
                
                </select>
                
           </div>
             
             
              
               <div class="col-sm-4">
            <input type="text" name="" id="tname3" placeholder="Enter 3rd Pessanger Name">
           </div>
          
              
              
                        <div class="col-sm-4">
           <select name="Class" id="">
                    
                    <option value="None"> --Select One-- </option>    
                <option value="ub">Upper Berth</option>    
                <option value="mb">Middle Berth</option>    
                <option value="lb">Lower Berth</option>        
                </select>
                
           </div>
          
              
                                    <div class="col-sm-4">
             <select name="gender" id="">
                    
            <option value="None"> --Select One-- </option>    
                <option value="m">Male</option>    
                <option value="f">Female</option>    
                
                </select>
                
           </div> 
             <br>
              <br>
              <div class="col-sm-12">
               <h1>Total Fare:</h1>
                <?php
             $tfare=$_SESSION['tfare'];
                //$selected_stn=$_SESSION['stn'];
              echo "Rs.".$tfare;
           ?>
           </div>
              
              
                <br>
                <br>
                    <input type="submit" value="Proceed To Pay" id="submit" name="prcd-paybtn" >
                    <input type="submit" value="Cancel" id="back">
              
               
           </form>
      </div>

          
           <!-- <form action="">
                 
              <h1>Passenger Details:</h1>
                
                <h2>Passenger Name:</h2>
                
                <input type="text" name="" id="">
                
                <h2>Class:</h2>
                <select name="Class" id="">
                    
                    <option value="None"> --Select One-- </option>    
                <option value="1A">1A</option>    
                <option value="2A">2A</option>    
                <option value="3A">3A</option>    
                <option value="SL">SL</option>    
               
                    
                    
                </select>
                
                <h2>Prefeered Berth:</h2>
                <select name="Class" id="">
                    
                    <option value="None"> --Select One-- </option>    
                <option value="ub">Upper Berth</option>    
                <option value="mb">Middle Berth</option>    
                <option value="lb">Lower Berth</option>        
                </select>
                
                     <h2>Gender:</h2>
                <select name="Statiopns" id="">
                    
            <option value="None"> --Select One-- </option>    
                <option value="m">Male</option>    
                <option value="f">Female</option>    
                
                </select>
                    
                <br>
                <br>
                    <input type="submit" value="Proceed" id="submit">
                    <input type="submit" value="Cancel" id="back">
                    
                    
                    
             </form> -->
             <div id="frm-data">
             <form method="post">
           <table text-align="center" id="login" align="center" width="100%">
               
               <tr>
               <th >Passenger Details:</th>
               
               </tr>
               
               <tr>
                <td>Passenger Name</td>   
                <td>Preferred Berth</td>   
                <td>Gender</td>   
                 </tr>
               <tr>
                   
                 <td><input type="text" name="tname1" id="tname1" placeholder="Enter 1st Pessanger Name"></td>
                   
                 <td><select name="Class" id="">

<option value="None"> --Select One-- </option>    
                <option value="ub">Upper Berth</option>    
                <option value="mb">Middle Berth</option>    
                <option value="lb">Lower Berth</option>        
                </select></td>
                  
                 <td><select name="gender" id="">
                    
            <option value="None"> --Select One-- </option>    
                <option value="m">Male</option>    
                <option value="f">Female</option>    
                
                </select>
          </td>  
                   
               </tr>
               
               <tr>
                   
                 <td><input type="text" name="tname2" id="tname2" placeholder="Enter 2nd Pessanger Name"></td> 
                  
                 <td><select name="Class" id="">

<option value="None"> --Select One-- </option>    
                <option value="ub">Upper Berth</option>    
                <option value="mb">Middle Berth</option>    
                <option value="lb">Lower Berth</option>        
                </select></td>
                  
                 <td><select name="gender" id="">
                    
            <option value="None"> --Select One-- </option>    
                <option value="m">Male</option>    
                <option value="f">Female</option>    
                
                </select></td>  
                </tr>
                
               <tr>
                   
                   
                 <td><input type="text" name="tname3" id="tname3" placeholder="Enter 2nd Pessanger Name"></td> 
                 
                   
                 <td><select name="Class" id="">

<option value="None"> --Select One-- </option>    
                <option value="ub">Upper Berth</option>    
                <option value="mb">Middle Berth</option>    
                <option value="lb">Lower Berth</option>        
                </select></td>
                
                    
                 <td><select name="gender" id="">
                    
            <option value="None"> --Select One-- </option>    
                <option value="m">Male</option>    
                <option value="f">Female</option>    
                
                </select></td>  
                   
                   
               </tr>
               
           </table>
           
           <br>
           <h2>Total Fare:</h2>
           <?php
             $tfare=$_SESSION['tfare'];
                //$selected_stn=$_SESSION['stn'];
              echo "Rs.".$tfare;
           ?>
           <br>
           <br>
          <input type="submit" value="Proceed To Pay" id="submit" name="prcd-paybtn" >
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
      
      
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script> src="../bottstrap/js/bootstrap.min.js" </script>
  </body>
</html>