<?php
session_start();
if(!isset($_SESSION['uname']))
   {
       echo "<script type='text/javascript'>
            alert('Please Login!!') 
            </script>";
       header('location:login.php');
   }

/*if(isset($_SESSION['past-date']))
{
 echo "<script type='text/javascript'>
    alert('date is in the past')
    </script>";   
}*/


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
    $date = new DateTime($_POST['date_journey']);
$now = new DateTime();

if($date < $now) {
   echo "<script type='text/javascript'>
    alert('date is in the past')
    window.location='book-ticket1.php';
    </script>";
    //sleep(3);
    //header('location:book-ticket1.php');

}
    
    else
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
}
if(isset($_POST['back-btn']))
{
    header('location:index.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Ticket</title>
    <link rel="stylesheet" href="../css/book-ticket1.css">
    
   <!-- <script type="text/javascript">
    function checkDate() {
   var selectedText = document.getElementById('datepicker').value;
   var selectedDate = new Date(selectedText);
   var now = new Date();
   if (selectedDate < now) {
       window.location="book-ticket1.php";
    alert("Date must be in the future");
    return false;   
   }
 }
 </script>-->
</head>

<body>
    <div class="container"> 
    <div class="heading">
        <h1 style="font-size:3em;" > Book Ticket</h1> </div> 
    <div class="nav-bar">
         
            
            <form method="post" >
                 
              <h1>Journey Planner</h1>
                
                <h2>From Station:</h2>
                <select name="From_Stations" id="from-stn">
                    
                    <option value="None"> --Select One-- </option>    
                <option value="Jammu">Jammu</option>    
                <option value="Delhi">Delhi</option>    
                <option value="Mumbai">Mumbai</option>    
                <option value="Varanasi">Varanasi</option>    
                <option value="Amritsar">Amritsar</option>    
                    
                    
                    
                </select>
                
                
                
                     <h2>To Station:</h2>
                <select name="To_Stations" id="to-stn">
                    
            <option value="None"> --Select One-- </option>    
                <option value="Jammu">Jammu</option>    
                <option value="Delhi">Delhi</option>    
                <option value="Mumbai">Mumbai</option>    
                <option value="Varanasi">Varanasi</option>    
                <option value="Amritsar">Amritsar</option>    
               
                </select><br>

  <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
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
  </script>-->
                <p><span>Journey Date:</span>
                   <br>
                    <br><!-- <input type="text" id="datepicker" name="date_journey"></p>-->
                <input type="date" name="date_journey" id="datepicker">
                                     

                <!--</script><br>
    <input type="text" id="txtDate" name="txtDate" onclick="datepicker()">--><br><br><br>
          <input type="submit" value="Submit" name="submit-btn" id="submit-btn" onclick="checkDate()">
                    <input type="submit" value="Back" id="back-btn" name="back-btn" >
             </form>
            
            
        
    </div>
    <div class="footer"><p>All Rights Reserved.Copyright &copy;2018 <br>Designed By Shivam Dhar </p></div>
    </div>
</body>
</html>