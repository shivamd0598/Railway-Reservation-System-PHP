<?php
session_start(); // Staring Session
//putenv('GDFONTPATH=' . realpath('.'));

$code=rand(1000,9999);
$_SESSION['code']=$code;
$font_size=34;
$width=200;
$height=40;

$image=imagecreate($width,$height);
imagecolorallocate($image,255,255,255);
$txt_color=imagecolorallocate($image,0,0,0);
for($x=1;$x<=30;$x++)
{
    $x1=rand(1,100);
    $y1=rand(1,100);
    $x2=rand(1,100);
    $y2=rand(1,100);
    imageline($image,$x1,$y1,$x2,$y2,$code);
}
imagettftext($image,$font_size,0,15,30,$txt_color,"C://xampp/htdocs/Website Project/ttf-fonts/font.ttf",$code);
imagejpeg($image);

echo "Captcha" ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Captcha</title>
</head>
<body>
                    <img src="captcha.php">                 <br>

</body>
</html>