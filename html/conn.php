<?php
$con=mysqli_connect("localhost","root","root");
$res=mysqli_select_db($con,"travel_system");
if($res)
    echo"Connected!!!";
    else
        echo"Not Connected!!!";
?>