<?php
// 建立一幅 100X30 的图像
$im = imagecreate(120, 30);

// 白色背景和蓝色文本
$bg = imagecolorallocate($im, 255, 255, 255);//背景色
$textcolor = imagecolorallocate($im, 0, 0, 0);//文字颜色

// 把字符串写在图像左上角
imagestring($im, 3, 10, 7, "06 52 23 88 63", $textcolor);

// 输出图像
header("Content-type: image/png");
imagepng($im);
?> 
