<?php
header ("content-type: image/png");
$logoimage = imagecreatefrompng('sy/m.png');

$photoimage = imagecreatefromjpeg('sy/liu.jpg');

imagealphablending($photoimage, true);
$logoW = imagesx($logoimage);
$logoH = imagesy($logoimage);

$photoW=imagesx($photoimage);
$photoH=imagesy($photoimage);
imagecopy($photoimage, $logoimage, $photoW-$logoW,$photoH-$logoH, 0, 0, $logoW, $logoH);
imagejpeg($photoimage); // output to browser
imagedestroy($photoimage);
imagedestroy($logoimage);
echo '<a href="sy/liu.jpg">tu</a>';
?> 